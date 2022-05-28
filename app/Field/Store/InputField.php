<?php

namespace App\Field\Store;

use Dotenv\Parser\Value;

class InputField extends Field
{
    public function __construct($name, $type = 'text')
    {
        $this->name = $name;
        $this->type = $type;
    }

    public function fill($item, $data){
        $value=  $data[$this->name];

        $beforeSave = $this ->beforeSaveClouser;
        $value = $this->$beforeSave($value);
        $item->{$this->name} = $value;
        
    }
    
   
}

