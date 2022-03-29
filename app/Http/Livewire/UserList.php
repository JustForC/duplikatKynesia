<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class UserList extends Component
{
    use WithFileUploads, WithPagination;

    public $searchKey;
    public $sortType = "asc";
    public $sortName = "id";
    public $paginationKey = 2;

    public $excel;

    protected $listeners = [
        'refreshTable' => '$refresh',
    ];

    public function render()
    {
        $users = User::where('name', 'LIKE', '%' . $this->searchKey . '%')
            ->orWhere('email', 'LIKE', '%' . $this->searchKey . '%')
            ->orWhere('statusOne', 'LIKE', '%' . $this->searchKey . '%')
            ->orWhere('statusTwo', 'LIKE', '%' . $this->searchKey . '%')
            ->orderBy($this->sortName, $this->sortType)
            ->paginate($this->paginationKey);

        return view('livewire.user-list')->with([
            'users' => $users,
        ]);
    }

    public function saveExcel()
    {
        $this->clearInput();
        $this->emit('refreshTable');
    }

    public function clearInput()
    {
        $this->excel = null;
    }
}
