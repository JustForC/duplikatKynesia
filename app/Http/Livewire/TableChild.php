<?php

namespace App\Http\Livewire;

use App\Models\Family;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TableChild extends Component
{
    protected $listeners = [
        'refreshTable' => '$refresh',
    ];

    public function select($id, $select)
    {
        if ($select == "edit") {
            $this->emit('getChild', $id);
        } elseif ($select == "delete") {
            $this->emit('deleteChild', $id);
        }
    }

    public function render()
    {
        $children = Family::where('user_id', '=', Auth::user()->id)
            ->where('status', '=', 'Children')
            ->get();
        return view('livewire.table-child')->with(['children' => $children]);
    }
}
