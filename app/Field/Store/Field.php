<?php
namespace App\Field\Store;

 
class Field{
    protected $name;
    protected $type;

    protected $beforeSaveClouser;

    public static function make($name ){
        $class = get_called_class();
        return new $class($name);
    }
     
    public function beforeSave(  $collback){
$this->beforeSaveClouser = $collback;
return $this;
    }

}