<?php

namespace App\Http\Livewire;

use App\Models\Organization;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TableOrganization extends Component
{
    protected $listeners = [
        'refreshOrganization' => '$refresh',
    ];

    public function select($id, $select)
    {
        if ($select == "edit") {
            $this->emit('getOrganization', $id);
        } elseif ($select == "delete") {
            $this->emit('deleteOrganization', $id);
        }
    }

    public function render()
    {
        $organizations = Organization::where('user_id', '=', Auth::user()->id)->get();
        return view('livewire.table-organization')->with(['organizations' => $organizations]);
    }
}
