<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Rejected extends Component
{
    use WithPagination;

    public $searchKey;
    public $sortType = "asc";
    public $sortName = "id";
    public $paginationKey = 2;

    public function selectUser($id, $mode)
    {
        if ($mode == "detail") {
            return redirect()->route('admin.detail', $id);
        }
    }

    public function render()
    {
        $users = User::where([['statusOne', '=', 'Tidak Lolos'],
            ['name', 'LIKE', '%' . $this->searchKey . '%']])
            ->orWhere([['statusOne', '=', 'Tidak Lolos'],
                ['email', 'LIKE', '%' . $this->searchKey . '%']])
            ->orWhere([['statusTwo', '=', 'Tidak Lolos'],
                ['name', 'LIKE', '%' . $this->searchKey . '%']])
            ->orWhere([['statusTwo', '=', 'Tidak Lolos'],
                ['email', 'LIKE', '%' . $this->searchKey . '%']])
            ->orderBy($this->sortName, $this->sortType)
            ->paginate($this->paginationKey);
        return view('livewire.rejected')->with(['users' => $users]);
    }
}
