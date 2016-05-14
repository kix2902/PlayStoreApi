<?php

class Album implements \JsonSerializable
{
    private $album_id;
    private $image;
    private $title;
    private $artist;
    private $artist_id;
    private $price;
    private $url;

    private $description;
    private $genre;
    private $tracks;
    private $rating_value;
    private $rating_count;

    public function getAlbumId()
    {
        return $this->album_id;
    }

    public function setAlbumId($album_id)
    {
        $album_id = trim($album_id);
        $this->album_id = $album_id;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $image = trim($image);
        if (substr($image, 0, 2) === '//') {
            $image = 'http:'.$image;
        }
        $this->image = $image;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $title = trim($title);
        $this->title = $title;
    }

    public function getArtist()
    {
        return $this->artist;
    }

    public function setArtist($artist)
    {
        $artist = trim($artist);
        $this->artist = $artist;
    }

    public function getArtistId()
    {
        return $this->artist_id;
    }

    public function setArtistId($artist_id)
    {
        $artist_id = trim($artist_id);
        $this->artist_id = $artist_id;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $price = trim($price);
        if (!preg_match('#[0-9]#', $price)) {
            $price = null;
        }
        $this->price = $price;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }

    public function getDescription(){
        return $this->description;
    }

    public function setDescription($description){
        $this->description = $description;
    }

    public function getGenre(){
        return $this->genre;
    }

    public function setGenre($genre){
        $this->genre = $genre;
    }

    public function getTracks(){
        return $this->tracks;
    }

    public function setTracks($tracks){
        $this->tracks = $tracks;
    }

    public function getRatingValue(){
        return $this->rating_value;
    }

    public function setRatingValue($rating_value){
        $this->rating_value = $rating_value;
    }

    public function getRatingCount(){
        return $this->rating_count;
    }

    public function setRatingCount($rating_count){
        $this->rating_count = $rating_count;
    }

    public function JsonSerialize()
    {
        $vars = get_object_vars($this);

        return array_filter($vars, function ($value) {
            return null !== $value;
        });
    }
}
