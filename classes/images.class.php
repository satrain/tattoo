<?php

class Images extends Dbh {

    protected function setImage($category, $path, $date) {
        $sql = "INSERT INTO images(image_category, image_path, image_date) VALUES(?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $result = $stmt->execute([$category, $path, $date]);

        if($result) {
            echo "Successfully added image.";
        }
        else {
            echo "Error trying to upload an image.";
        }
    }

    protected function getImages() {
        $sql = "SELECT * FROM images";
        $stmt = $this->connect()->query($sql);
        
        while($row = $stmt->fetch()) {
            echo "<hr>";
            echo "<img style='width: 200px; height: 200px;' src='../" . $row['image_path'] . "'>";
            echo "<br>";
            echo $row['image_category'] . " " . $row['image_date'];
            echo "<hr>";
        }
    }

    protected function getImagesByCategory($cat) {
        $sql = "SELECT * FROM images WHERE image_category = '$cat' ORDER BY image_id ASC";
        $stmt = $this->connect()->query($sql);

        while($row = $stmt->fetch()) {
            echo "<a href='" . $row['image_path'] . "'>";
                echo "<div class='image-box'>";
                    echo "<img src='" . $row['image_path'] . "'>";
                echo "</div>";
            echo "</a>";
        }
    }

}