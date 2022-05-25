<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class Products extends Component
{

    public $modal = false, $id_product, $description, $amount, $category_id;

    public function render()
    {
        return view('livewire.products.products', [
            'products' => Product::with('category:id,name')->get(),
            'categories' => Category::select('id', 'name')->get(),
        ]);
    }

    public function create()
    {
        $this->limpiarCampos();
        $this->abrirModal();
    }

    public function store()
    {
        Product::updateOrCreate(['id' => $this->id_product], [
            'description' => $this->description,
            'amount' => $this->amount,
            'category_id' => $this->category_id,
        ]);
        session()->flash('message', $this->id_product ? 'Registro Actualizado' : 'Registro Agregado');
        $this->cerrarModal();
        $this->limpiarCampos();
    }

    public function edit($id)
    {
        $producto = Product::findOrFail($id);
        $this->id_product = $producto->id;
        $this->description = $producto->description;
        $this->amount = $producto->amount;
        $this->category_id = $producto->category_id;
        $this->abrirModal();
    }

    public function destroy($id)
    {
        $producto = Product::findOrFail($id)->delete();
        session()->flash('message', 'Registro Eliminado');
    }

    public function abrirModal()
    {
        $this->modal = true;
    }

    public function cerrarModal()
    {
        $this->modal = false;
    }

    public function limpiarCampos()
    {
        $this->id_product = "";
        $this->description = "";
        $this->amount = "";
        $this->category_id = "";
    }
}
