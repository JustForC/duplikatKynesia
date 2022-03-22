<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Auth;
use App\Models\Training;

class TableTraining extends Component
{
    protected $listeners = [
        'refreshTraining' => '$refresh'
    ];

    public function select($id, $select)
    {
        if($select == "edit"){
            $this->emit('getTraining', $id);
        }
        elseif($select == "delete"){
            $this->emit('deleteTraining', $id);
        }
    }

    public function render()
    {
        $trainings = Training::where('user_id','=',Auth::user()->id)->get();
        return view('livewire.table-training')->with(['trainings' => $trainings]);
    }
}
