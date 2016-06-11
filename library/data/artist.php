<?php

class Artist implements \JsonSerializable
{
    private $artist_id;
    private $image;
    private $name;
    private $url;

    private $about;

    public function getArtistId()
    {
        return $this->artist_id;
    }

    public function setArtistId($artist_id)
    {
        $artist_id = trim($artist_id);
        $this->artist_id = $artist_id;
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

    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl($url)
    {
        $url = trim($url);
        $this->url = $url;
    }

    public function getAbout()
    {
        return $this->about;
    }

    public function setAbout($about)
    {
        $about = trim($about);
        $this->about = $about;
    }

    public function JsonSerialize()
    {
        $vars = get_object_vars($this);

        return array_filter($vars, function ($value) {
            return null !== $value;
        });
    }
}
