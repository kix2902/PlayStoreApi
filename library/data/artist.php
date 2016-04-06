<?php
class Artist implements \JsonSerializable {
    private $artist_id;
    private $image;
    private $name;

    public function getArtistId(){
        return $this->artist_id;
    }

    public function setArtistId($artist_id){
        $artist_id = trim($artist_id);
        $this->artist_id = $artist_id;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $name = trim($name);
        $this->name = $name;
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
    
    public function JsonSerialize(){
        return get_object_vars($this);
    }
}
?>