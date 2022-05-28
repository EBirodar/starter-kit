<?php
namespace App\Services;

 
use App\Field\Store\InputField;
use App\Field\Store\NumberField;
use App\Models\Product;
use Illuminate\Support\Str;

class ProductService extends Service {
    protected $modelClass = Product::class;
    public function getFields() {
        return [
            InputField::make('name')->beforesave(fn($value)=> Str::upper($value)),
            NumberField::make('price'),
        ];
    }
} 