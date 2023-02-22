<?php

namespace Analistics\Customers\MenusManegement;

class MenusController{
    private $session = null;
    private $meusIndicadores=[];



    function __construct($sessionSerializedActive)
    {
        $this->session =(array)unserialize($sessionSerializedActive);
    }


    public function getUser(){
        return array(
            "name"=>$this->session['name']
        );
    }

    public function getDws(){
        $dws=$this->session['dws'];
        $storgers = [];
        if(is_null($dws)) return [];
        foreach($dws as $key=>$dw){
            $tmp=(array)$dw;
            $tmp['companyInformation']=(array)$tmp['companyInformation'];
            $storgers[] =$tmp;
        }
        return $storgers ;
    }


    public function getExtractor(){
        $extractor=$this->session['extractos'];
        $extractors = [];
        if(is_null($extractor)) return [];
        foreach($extractor as $key=>$extract){
            $tmp=(array)$extract;
            $extractors[] =$tmp;
        }
        return $extractors ;
    }


    public function meusIndicadores(){


        return $this->meusIndicadores;
    }



    


}




?>