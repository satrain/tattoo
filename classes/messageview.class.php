<?php 

class MessageView extends Message {

    public function showMessages() {
        $this->getMessages();
    }

    public function showMessage($id) {
        $result = $this->getMessageById($id);
        echo "<div class='container'>";
            echo "Client Full Name: " . $result[0]['client_firstname'] . " " . $result[0]['client_lastname'];
            echo "<br>";
            echo "Client Phone Number: " . $result[0]['client_phone'];
            echo "<br>";
            echo "Client Email: " . $result[0]['client_email'];
            echo "<br>";
            echo "Client Adult(18+): " . $result[0]['client_adult'];
            echo "<br>";
            echo "Client Design Idea: " . $result[0]['client_design_idea'];
            echo "<br>";
            echo "Client Placement On Body: " . $result[0]['client_placement'];
            echo "<br>";
            echo "Client Tattoo Size(in cm): " . $result[0]['client_size'];
            echo "<br>";
            echo "Client Preferable Date: " . $result[0]['client_preferable_date'];
            echo "<br>";
            echo "<u>Client References</u><br>";
            echo "<img src='../" . $result[0]['client_references'] . "'>";
            echo "<br>";
            echo "Message Date: " . $result[0]['client_date_sent'];
        echo "</div>";
    }

}