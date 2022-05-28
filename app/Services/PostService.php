<?php
namespace App\Services;

use App\Models\Post;
use App\Field\Store\InputField;


class PostService extends Service {

    protected $modelClass = Post::class;

   public function getFields() {
        return [
            InputField::make('name'),
            InputField::make('slug'),
        ];
    } 

} 