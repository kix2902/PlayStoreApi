<?php
class Show implements \JsonSerializable {
    private $show_id;
    private $image;
    private $title;
    private $category;
    private $price;
    
    public function getShowId(){
        return $this->show_id;
    }

    public function setShowId($show_id){
        $show_id = trim($show_id);
        $this->show_id = $show_id;
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

    public function getCategory(){
        return $this->category;
    }

    public function setCategory($category){
        $category = trim($category);
        $this->category = $category;
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