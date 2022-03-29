<div>
    <div class="content-body">
        <section id="content-types">
            <div class="row match-height">
                <div class="col-xl">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <fieldset class="col-sm-1 form-group float-left">
                                    <select wire:model="paginationKey" class="form-control" id="basicSelect">
                                        <option>2</option>
                                        <option>5</option>
                                        <option>10</option>
                                        <option>15</option>
                                        <option>25</option>
                                    </select>
                                </fieldset>
                                <fieldset class="col-xl-3 form-group position-relative has-icon-left float-right">
                                    <input wire:model="searchKey" type="text" class="form-control round" id="searchbar">
                                    <div class="form-control-position">
                                        <i class="feather icon-search px-1"></i>
                                    </div>
                                </fieldset>
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Content</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($notifications as $notification)
                                                <tr>
                                                    <th>{{$notification->id}}</th>
                                                    <td>{{$notification->content}}</td>
                                                    @if($notification->status == 0)
                                                    <td>Belum Dibaca</td>
                                                    @elseif($notification->status ==1)
                                                    <td>Sudah Dibaca</td>
                                                    @endif
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{$notifications->links()}}
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-muted">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
