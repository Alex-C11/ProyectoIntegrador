<?php

namespace App\Http\Livewire;

use App\Models\Association as ModelsCategory;
use Livewire\Component;

class CrudAssociation extends Component
{
    public $isOpen=false;
    public $category_id,$name,$creationDate,$location;

    public function render(){
        $categories=ModelsCategory::all();
        return view('livewire.crud-association',compact('categories'));
    }
    public function create(){
        $this->openModal();
    }
    public function openModal(){
        $this->isOpen=true;
    }
    public function closeModal(){
        $this->isOpen=false;
    }
    private function resetInputsFields(){
        $this->name="";
        $this->creationDate="";
        $this->location="";
    }
    public function store(){
        $this->validate([
            'name'=>'required',
            'creationDate'=>'required',
            'location'=>'required'
        ]);
        ModelsCategory::updateOrCreate(['id'=>$this->category_id],
            [
                'name'=>$this->name,
                'creationDate'=>$this->creationDate,
                'location'=>$this->location
            ]
        );
        session()->flash('message',
            $this->category_id?'Registro actualizado satisfactoriamente':'Registro creado satisfactoriamente.');
        $this->closeModal();
        $this->resetInputsFields();
    }

    public function edit(ModelsCategory $category){
        $this->category_id=$category->id;
        $this->name=$category->name;
        $this->creationDate=$category->creationDate;
        $this->location=$category->location;
        $this->openModal();
    }

    public function delete(ModelsCategory $category){
        $category->delete();
        session()->flash('message', 'Registro borrado satisfactoriamente.');
    }
}

