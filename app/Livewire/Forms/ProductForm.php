<?php

namespace App\Livewire\Forms;

use App\Models\Product;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ProductForm extends Form
{
    public ?Product $product;
    #[Validate('required|string|max:255', as: 'Nombre de producto')]
    public $name;
    #[Validate('nullable|string|max:1000')]
    public $description;
    #[Validate('nullable|integer|min:0')]
    public $stock = 0;
    #[Validate('required|numeric|min:0')]
    public $price;
    public function setProduct($product){
        $data = auth()->user();
        $this->product = $product;
         //$product = new Product();
        $this->name = $product->name;
        $this->stock = $product->stock;
        $this->price = $product->price;
        $this->description = $product->description;
        $this->usuario = $data->name;
    }
    public function store(){
        $data = auth()->user();
      
        $this->validate();
       
        
        $product = new Product();
        $this->name = $product->name;
        $this->stock = $product->stock;
        $this->price = $product->price;
        $this->description = $product->description;
        $this->usuario = $data->name;
        $product->save();
    }
    public function update(){
        $this->validate();

        $this->product->update($this->all());
    }

    
}
