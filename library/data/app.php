<?php

class App implements \JsonSerializable
{
    private $package;
    private $icon;
    private $name;
    private $developer;
    private $price;
    private $url;

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

    public function JsonSerialize()
    {
        $vars = get_object_vars($this);

        return array_filter($vars, function ($value) {
            return null !== $value;
        });
    }
}
