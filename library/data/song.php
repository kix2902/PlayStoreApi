<?php

class Song implements \JsonSerializable
{
    private $album_id;
    private $song_id;
    private $image;
    private $title;
    private $artist;
    private $artist_id;
    private $price;
    private $url;

    public function getAlbumId()
    {
        return $this->album_id;
    }

    public function setAlbumId($album_id)
    {
        $album_id = trim($album_id);
        $this->album_id = $album_id;
    }

    public function getSongId()
    {
        return $this->song_id;
    }

    public function setSongId($song_id)
    {
        $song_id = trim($song_id);
        $this->song_id = $song_id;
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
        $url = trim($url);
        $this->url = $url;
    }

    public function JsonSerialize()
    {
        $vars = get_object_vars($this);

        return array_filter($vars, function ($value) {
            return null !== $value;
        });
    }
}
