<?php

namespace App\Http\Livewire;

use App\Models\Association;
use Livewire\Component;

class CrudAssociation extends Component
{
    public $association,$search;
    public $isOpen=false;
    protected $listeners=['render','delete'=>'delete'];

    protected $rules=[
        'association.name'=>'required',
        'association.creationDate'=>'required',
        'association.location'=>'required',
    ];

    public function render(){
        //$teams=Team::orderBy('id','desc')->paginate();
        $association=Association::where('name','like','%'.$this->search.'%')
                    ->orderBy('id','desc')->paginate(10);
        return view('livewire.crud-association',compact('association'));
    }


    public function create(){
        $this->isOpen=true;
        $this->reset(['association']);
    }

    public function store(){
        $this->validate();
        if(!isset($this->association->id)){
            Association::create($this->association);
        }else{
            $this->association->save();
        }
        $this->reset(['isOpen','association']);
        $this->emitTo('CrudAssociation','render');
        $this->emit('alert','Registro creado satisfactoriamente');
    }

    public function edit(Association $association){
        $this->association=$association;
        $this->isOpen=true;
    }

    public function delete(Association $association){
        $association->delete();
    }
}

