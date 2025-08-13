<?php

namespace App\Livewire\Products;

use Livewire\Component;
use App\Livewire\Forms\ProductForm;
use App\Models\Product;
class Update extends Component
{

    public ProductForm $form;
    public function mount(Product $product){
        $this->form->setProduct($product);

    }
    public function save(){
        $this->form->update();
        session()->flash('status', 'Producto editado exitosamente');
        $this->redirectRoute('products.index',navigate:true);

    }
    public function render()
    {
        return view('livewire.products.create');
    }
}
