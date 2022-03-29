<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class StepTwo extends Component
{
    use WithPagination;

    public $userId;
    public $userName;

    public $searchKey;
    public $sortType = "asc";
    public $sortName = "id";
    public $paginationKey = 2;

    protected $listeners = [
        'refresh' => '$refresh',
    ];

    public function selectUser($id, $mode)
    {
        if ($mode == 'accept') {
            $this->getUser($id);
            $this->dispatchBrowserEvent('showModalAccept');
        } elseif ($mode == 'reject') {
            $this->getUser($id);
            $this->dispatchBrowserEvent('showModalReject');
        } elseif ($mode == "detail") {
            return redirect()->route('admin.detail', $id);
        }
    }

    public function render()
    {
        $users = User::where([['statusTwo', '=', 'Proses Seleksi'],
            ['name', 'LIKE', '%' . $this->searchKey . '%']])
            ->orWhere([['statusTwo', '=', 'Proses Seleksi'],
                ['email', 'LIKE', '%' . $this->searchKey . '%']])
            ->orWhere([['statusTwo', '=', 'Lolos'],
                ['name', 'LIKE', '%' . $this->searchKey . '%']])
            ->orWhere([['statusTwo', '=', 'Lolos'],
                ['email', 'LIKE', '%' . $this->searchKey . '%']])
            ->orderBy($this->sortName, $this->sortType)
            ->paginate($this->paginationKey);
        return view('livewire.step-two')->with(['users' => $users]);
    }

    public function getUser($id)
    {
        $user = User::find($id);
        $this->userId = $user->id;
        $this->userName = $user->name;
    }

    public function accept()
    {
        User::find($this->userId)->update([
            'statusTwo' => 'Lolos',
        ]);
        $this->clearUser();
        $this->dispatchBrowserEvent('closeModalAccept');
        $this->emit('refresh');
    }

    public function reject()
    {
        User::find($this->userId)->update([
            'statusTwo' => 'Tidak Lolos',
        ]);
        $this->clearUser();
        $this->dispatchBrowserEvent('closeModalReject');
        $this->emit('refresh');
    }

    public function clearUser()
    {
        $this->userId = null;
        $this->userName = null;
        $this->link = null;
        $this->date = null;
    }

    public function closeAccept()
    {
        $this->clearUser();
        $this->dispatchBrowserEvent('closeModalAccept');
    }

    public function closeReject()
    {
        $this->clearUser();
        $this->dispatchBrowserEvent('closeModalReject');
    }
}
