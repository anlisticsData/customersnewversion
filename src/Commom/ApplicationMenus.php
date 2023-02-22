<?php


namespace Analistics\Customers\Commom;

use Analistics\Customers\Commom\Menu;


class ApplicationMenus extends ApplicationBase{
    public $menus=[];
    

    public function addMenu(Menu $menu){
        array_push($this->menus,$menu);
    }


    public function getBy($indexMenu){
        return (isset($this->menus[$indexMenu])) ? $this->menus[$indexMenu]:null;
    }

    public function getAll(){
        return $this->menus;
    }

}


?>