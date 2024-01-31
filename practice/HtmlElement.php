<?php
class HtmlElement{
    private $attributes=[];
    private $tag;
    public function __construct($tag){
        $this->tag=$tag;
    }
    public function __set(string $name, $value){
        $this->attributes[$name]=$value;
    }

    public function RenderElement($innerhtml=''){
        $html= "<{$this->tag} ";
        foreach($this->attributes as $name=>$value){
            $html.= ''.$name.'="'.$value.'"';
        }
        $html.= ">";
        $html.= $innerhtml;
        $html.= "</{$this->tag}>";
        return $html;
    }
    public function GetAttributes(){
        var_dump($this->attributes) ;
    }
}