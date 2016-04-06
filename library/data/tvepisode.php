<?php

class Episode implements \JsonSerializable
{
    private $episode_id;
    private $season_id;
    private $show_id;
    private $image;
    private $episode_title;
    private $show_title;
    private $date;
    private $price;

    public function getEpisodeId()
    {
        return $this->episode_id;
    }

    public function setEpisodeId($episode_id)
    {
        $episode_id = trim($episode_id);
        $this->episode_id = $episode_id;
    }

    public function getSeasonId()
    {
        return $this->season_id;
    }

    public function setSeasonId($season_id)
    {
        $season_id = trim($season_id);
        $this->season_id = $season_id;
    }

    public function getShowId()
    {
        return $this->show_id;
    }

    public function setShowId($show_id)
    {
        $show_id = trim($show_id);
        $this->show_id = $show_id;
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

    public function getEpisodeTitle()
    {
        return $this->episode_title;
    }

    public function setEpisodeTitle($episode_title)
    {
        $episode_title = trim($episode_title);
        $this->episode_title = $episode_title;
    }

    public function getShowTitle()
    {
        return $this->show_title;
    }

    public function setShowTitle($show_title)
    {
        $show_title = trim($show_title);
        $this->show_title = $show_title;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $date = trim($date);
        $this->date = $date;
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

    public function JsonSerialize()
    {
        return get_object_vars($this);
    }
}
