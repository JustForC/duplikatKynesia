<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;
use DB;

class StepOne extends Component
{
    use WithPagination;

    public $userId;
    public $userName;
    public $link, $date;

    public $searchKey;
    public $sortType = "asc";
    public $sortName = "id";
    public $paginationKey = 2;

    protected $listeners = [
        'refresh' => '$refresh'
    ];

    public function selectUser($id, $mode)
    {
        if($mode == 'accept')
        {
            $this->getUser($id);
            $this->dispatchBrowserEvent('showModalAccept');
        }
        elseif($mode == 'reject')
        {
            $this->getUser($id);
            $this->dispatchBrowserEvent('showModalReject');
        }
        elseif($mode == "detail")
        {
            return redirect()->route('admin.detail',$id);
        }
    }

    public function render()
    {
        $users = User::where([['statusOne','=', 'Proses Seleksi'],
                             ['name', 'LIKE', '%'.$this->searchKey.'%']])
                     ->orWhere([['statusOne','=', 'Proses Seleksi'],
                             ['email', 'LIKE', '%'.$this->searchKey.'%']])
                     ->orderBy($this->sortName, $this->sortType)
                     ->paginate($this->paginationKey);
        return view('livewire.step-one')->with(['users' => $users]);
    }

    public function getUser($id)
    {
        $user = User::find($id);
        $this->userId = $user->id;
        $this->userName = $user->name;
    }

    public function accept()
    {
        if(strpos($this->link,'https://') !== false)
        {
            $this->link = $this->link;
        }
        else
        {
            $this->link = "https://".$this->link;
        }

        User::find($this->userId)->update([
            'statusOne' => 'Lolos',
            'statusTwo' => 'Proses Seleksi',
            'interviewLink' => $this->link,
            'interviewDate' => $this->date,
        ]);
        $this->clearUser();
        $this->dispatchBrowserEvent('closeModalAccept');
        $this->emit('refresh');
    }

    public function reject()
    {
        User::find($this->userId)->update([
            'statusOne' => 'Tidak Lolos',
            'statusTwo' => 'Tidak Lolos',
        ]);
        $this->clearUser();
        $this->dispatchBrowserEvent('closeModalReject');
        $this->emit('refresh');
    }

    public function clearUser()
    {
        $this->userId = NULL;
        $this->userName = NULL;
        $this->link = NULL;
        $this->date = NULL;
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
