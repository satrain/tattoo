<?php

class Message extends Dbh {

    protected function getMessages() {
        $sql = "SELECT * FROM inbox";
        $stmt = $this->connect()->query($sql);
        echo "<div class='limiter'>";
            echo "<div class='container-table100'>";
                echo "<div class='table'>";
                    echo "<div class='row header'>";
                        echo "<div class='cell'>";
                            echo "Full Name";
                        echo "</div>";
                        echo "<div class='cell'>";
                            echo "Email";
                        echo "</div>";
                        echo "<div class='cell'>";
                            echo "Phone Number";
                        echo "</div>";
                        echo "<div class='cell'>";
                            echo "Message Date";
                        echo "</div>";
                    echo "</div>";
                    while($row = $stmt->fetch()) {
                        echo "<div class='row'>";
                            echo "<div class='cell' data-title='Full Name'>";
                                echo "<a href='message.php?client=" . $row['client_id'] ."'>";
                                    echo $row['client_firstname'] . " " . $row['client_lastname'];
                                echo "</a>";
                            echo "</div>";
                            echo "<div class='cell' data-title='Email'>";
                                echo "<a href='message.php?client=" . $row['client_id'] ."'>";
                                    echo $row['client_email'];
                                echo "</a>";
                            echo "</div>";
                            echo "<div class='cell' data-title='Phone Number'>";
                                echo "<a href='message.php?client=" . $row['client_id'] ."'>";
                                    echo $row['client_phone'];
                                echo "</a>";
                            echo "</div>";
                            echo "<div class='cell' data-title='Message Date'>";
                                echo "<a href='message.php?client=" . $row['client_id'] ."'>";
                                    echo $row['client_date_sent'];
                                echo "</a>";
                            echo "</div>";
                        echo "</div>";
                    }
                echo "</div>";
            echo "</div>";
        echo "</div>";
    }

    protected function getMessageById($id) {
        $sql = "SELECT * FROM inbox WHERE client_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);

        $result = $stmt->fetchAll();

        return $result;
    }

    protected function setMessage($firstName, $lastName, $phone, $email, $adult, $designIdea, $placement, $size, $preferableDate, $references, $dateSent) {
        $sql = "INSERT INTO inbox(client_firstname, client_lastname, client_phone, client_email, client_adult, client_design_idea, client_placement, client_size, client_preferable_date, client_references, client_date_sent) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $result = $stmt->execute([$firstName, $lastName, $phone, $email, $adult, $designIdea, $placement, $size, $preferableDate, $references, $dateSent]);
        
        if($result) {
            echo "Successfully sent a message. You will get an answer on email within 24 hours.";
        }
        else {
            echo "There was an error" . $stmt->errorCode();
        }
    }

}