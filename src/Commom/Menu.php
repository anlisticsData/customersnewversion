<?php

namespace Analistics\Customers\Commom;


class Menu extends ApplicationBase{
    public $ico;
    public $description;
    public $title;
    public $section=0;
    public $url;
    public $uuid;
    public $childs=array();

    public function __construct($description,$title,$url,$ico=null,$sectorCode=0)
    {
        $this->description=$description;
        $this->title=$title;
        $this->url=$url;
        $this->ico=$ico;
        $this->section=$sectorCode;
        $this->uuid=uniqid();
    }

    public function setIco($ico){
        $this->ico=$ico;
    }

    public function setSector($sectorCode){
        $this->section=$sectorCode;
    }

    public function addChildsMenus(Array $menus){
        $this->childs=$menus;
    }


}


?>