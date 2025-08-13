<?php

namespace App\Livewire\Products;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
   //public $products;

   public function delete(Product $product){
        $product->delete();
          
        session()->flash('status', 'Producto eliminado  exitosamente');
        $this->redirectRoute('products.index',navigate:true);



   }

    public function render()
    {
        return view('livewire.products.index',[
         'products' => Product::paginate(10)
         //'products' => Product::simplepaginate(10)
    ]);
    }
}
