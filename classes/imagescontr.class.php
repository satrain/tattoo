<?php

class ImagesContr extends Images {

    public $date;

    public function uploadImage($category, $path) {
        $this->date = date("Y-m-d");
        $this->setImage($category, $path, $this->date);
    }

}