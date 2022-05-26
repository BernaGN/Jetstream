<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class Categories extends Component
{

    public $modal = false, $id_category, $name;

    public function render()
    {
        return view('livewire.categories.categories', [
            'categories' => Category::all(),
        ]);
    }

    public function create()
    {
        $this->limpiarCampos();
        $this->abrirModal();
    }

    public function store()
    {
        Category::updateOrCreate(['id' => $this->id_category], [
            'name' => $this->name,
        ]);
        session()->flash('message', $this->id_category ? 'Registro Actualizado' : 'Registro Agregado');
        $this->cerrarModal();
        $this->limpiarCampos();
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        $this->id_category = $category->id;
        $this->name = $category->name;
        $this->abrirModal();
    }

    public function destroy($id)
    {
        Category::findOrFail($id)->delete();
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
        $this->id_category = "";
        $this->name = "";
    }
}
