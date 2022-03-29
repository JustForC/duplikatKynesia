<?php

namespace App\Http\Livewire;

use App\Models\NotifAdmin;
use Livewire\Component;
use Livewire\WithPagination;

class TableNotif extends Component
{
    use WithPagination;

    public $searchKey;
    public $sortType = "asc";
    public $sortName = "id";
    public $paginationKey = 2;

    protected $listeners = [
        'refreshTableNotification' => '$refresh',
    ];

    public function render()
    {
        $notifications = NotifAdmin::where('content', 'LIKE', '%' . $this->searchKey . '%')
            ->paginate($this->paginationKey);
        return view('livewire.table-notif')->with(['notifications' => $notifications]);
    }
}
