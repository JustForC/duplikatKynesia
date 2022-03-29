<div>
    <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon feather icon-bell"></i>
        @if($countNotif != 0)
        <span class="badge badge-pill badge-primary badge-up">{{$countNotif}}</span>
        @endif
    </a>
        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
            <li class="dropdown-menu-header">
                <div class="dropdown-header m-0 p-2">
                    <h3 class="white">{{$countNotif}} New</h3><span class="notification-title">Notification</span>
                </div>
            </li>
            <li class="scrollable-container media-list"><a class="d-flex justify-content-between" href="javascript:void(0)">
                @foreach($notifications as $notification)
                <div wire:click="changeStatus({{$notification->id}})" class="media d-flex align-items-start">
                    <div class="media-left"><i class="feather icon-plus-square font-medium-5 primary"></i></div>
                    <div class="media-body">
                        <h6 class="primary media-heading">Notifications</h6><small class="notification-text"> {{$notification->content}}</small>
                    </div>
                </div></a>
                @endforeach
            </li>
        </ul>
    </li>
</div>
