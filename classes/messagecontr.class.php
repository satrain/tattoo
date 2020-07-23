<?php

class MessageContr extends Message {

    public $dateSent;

    public function sendMessage($firstName, $lastName, $phone, $email, $adult, $designIdea, $placement, $size, $preferableDate, $references) {
        $this->dateSent = date("Y-m-d");  
        $this->setMessage($firstName, $lastName, $phone, $email, $adult, $designIdea, $placement, $size, $preferableDate, $references, $dateSent);
    }

}