<?php
class Device implements \JsonSerializable {
    private $device_id;
    private $image;
    private $title;
    private $price;
    
    public function getDeviceId(){
        return $this->device_id;
    }

    public function setDeviceId($device_id){
        $device_id = trim($device_id);
        $this->device_id = $device_id;
    }

    public function getImage(){
        return $this->image;
    }

    public function setImage($image){
        $image = trim($image);
        if (substr($image, 0, 2) === "//") {
            $image="http:".$image;
        }
        $this->image = $image;
    }

    public function getTitle(){
        return $this->title;
    }

    public function setTitle($title){
        $title = trim($title);
        $this->title = $title;
    }

    public function getPrice(){
        return $this->price;
    }

    public function setPrice($price){
        $price = trim($price);
        if (!preg_match('#[0-9]#',$price)){
            $price = null;
        }
        $this->price = $price;
    }
    
    public function JsonSerialize(){
        return get_object_vars($this);
    }
}
?>