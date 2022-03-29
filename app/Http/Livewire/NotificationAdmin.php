<?php

namespace App\Http\Livewire;

use App\Models\NotifAdmin;
use Livewire\Component;

class NotificationAdmin extends Component
{
    public $countNotif;

    protected $listeners = [
        'refreshNotification' => '$refresh',
    ];

    public function render()
    {
        $this->countNotif = NotifAdmin::where('status', '=', 0)->count();
        $notifications = NotifAdmin::where('status', '=', 0)->get();
        return view('livewire.notification-admin')->with([
            'notifications' => $notifications,
        ]);
    }

    public function changeStatus($id)
    {
        NotifAdmin::find($id)->update([
            'status' => 1,
        ]);

        $this->emit('refreshNotification');
        $this->emit('refreshTableNotification');
    }
}
