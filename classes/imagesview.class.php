<?php

class ImagesView extends Images {

    public function showImages() {
        $this->getImages();
    }

    public function showImagesByCategory($cat) {
        $this->getImagesByCategory($cat);
    }

}