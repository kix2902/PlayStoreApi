<?php
class Movie implements \JsonSerializable {
    private $movie_id;
    private $image;
    private $title;
    private $category;
    private $price;
    private $url;

    public function getMovieId(){
        return $this->movie_id;
    }

    public function setMovieId($movie_id){
        $movie_id = trim($movie_id);
        $this->movie_id = $movie_id;
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
