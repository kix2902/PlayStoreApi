<?php
class Newspaper implements \JsonSerializable {
    private $newspaper_id;
    private $image;
    private $title;
    private $price;
    private $url;

    public function getNewspaperId(){
        return $this->newspaper_id;
    }

    public function setNewspaperId($newspaper_id){
        $newspaper_id = trim($newspaper_id);
        $this->newspaper_id = $newspaper_id;
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

    public function getUrl(){
        return $this->url;
    }

    public function setUrl($url){
        $url = trim($url);
        $this->url = $url;
    }

    public function JsonSerialize(){
        return get_object_vars($this);
    }
}
?>
