<?php

class App implements \JsonSerializable
{
    private $package;
    private $icon;
    private $name;
    private $developer;
    private $price;
    private $url;

    private $description;
    private $category;
    private $rating_value;
    private $rating_count;

    private $file_size;
    private $date_updated;
    private $num_downloads;
    private $version;
    private $required_android;
    private $content_rating;

    public function getPackage()
    {
        return $this->package;
    }

    public function setPackage($package)
    {
        $package = trim($package);
        $this->package = $package;
    }

    public function getIcon()
    {
        return $this->icon;
    }

    public function setIcon($icon)
    {
        $icon = trim($icon);
        if (substr($icon, 0, 2) === '//') {
            $icon = 'http:'.$icon;
        }
        $this->icon = $icon;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $name = trim($name);
        $this->name = $name;
    }

    public function getDeveloper()
    {
        return $this->developer;
    }

    public function setDeveloper($developer)
    {
        $developer = trim($developer);
        $this->developer = $developer;
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
        $this->description = $description;
    }

    public function getCategory(){
        return $this->category;
    }

    public function setCategory($category){
        $category = trim($category);
        $this->category = $category;
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

    public function getFileSize(){
        return $this->file_size;
    }

    public function setFileSize($file_size){
        $file_size=trim($file_size);
        $this->file_size = $file_size;
    }

    public function getDateUpdated(){
        return $this->date_updated;
    }

    public function setDateUpdated($date_updated){
        $this->date_updated = $date_updated;
    }

    public function getNumDownloads(){
        return $this->num_downloads;
    }

    public function setNumDownloads($num_downloads){
        $num_downloads=trim($num_downloads);
        $this->num_downloads = $num_downloads;
    }

    public function getVersion(){
        return $this->version;
    }

    public function setVersion($version){
        $version=trim($version);
        $this->version = $version;
    }

    public function getRequiredAndroid(){
        return $this->required_android;
    }

    public function setRequiredAndroid($required_android){
        $required_android=trim($required_android);
        $this->required_android = $required_android;
    }

    public function getContentRating(){
        return $this->content_rating;
    }

    public function setContentRating($content_rating){
        $this->content_rating = $content_rating;
    }

    public function JsonSerialize()
    {
        $vars = get_object_vars($this);

        return array_filter($vars, function ($value) {
            return null !== $value;
        });
    }
}
