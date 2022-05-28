<?php

namespace App\Field\Store;

class NumberField extends Field
{
    public function __construct($name, $type = 'number')
    {
        $this->name = $name;
        $this->type = $type;
    }

    public function fill($item, $data){
        $value=  $data[$this->name]*100;
        $item->{$this->name} = $value;
        
    }
    
   
}

