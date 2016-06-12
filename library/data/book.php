<?php

class Book implements \JsonSerializable
{
    private $book_id;
    private $image;
    private $title;
    private $author;
    private $price;
    private $url;

    private $description;
    private $pages;
    private $languages;
    private $isbn;
    private $rating_value;
    private $rating_count;

    public function getBookId()
    {
        return $this->book_id;
    }

    public function setBookId($book_id)
    {
        $book_id = trim($book_id);
        $this->book_id = $book_id;
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

    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor($author)
    {
        $author = trim($author);
        $this->author = $author;
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
        $url = trim($url);
        $this->url = $url;
    }

    public function getDescription(){
        return $this->description;
    }

    public function setDescription($description){
        $description = trim($description);
        $this->description = $description;
    }

    public function getPages(){
        return $this->pages;
    }

    public function setPages($pages){
        $this->pages = $pages;
    }

    public function getLanguages(){
        return $this->languages;
    }

    public function setLanguages($languages){
        $this->languages = $languages;
    }

    public function getIsbn(){
        return $this->isbn;
    }

    public function setIsbn($isbn){
        $isbn = trim($isbn);
        $this->isbn = $isbn;
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
