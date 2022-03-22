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
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Status 1</th>
                                                <th>Status 2</th>
                                                <th>Detail</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($users as $user)
                                                <tr>
                                                    <th>{{$user->id}}</th>
                                                    <td>{{$user->name}}</td>
                                                    <td>{{$user->email}}</td>
                                                    <td>{{$user->statusOne}}</td>
                                                    <td>{{$user->statusTwo}}</td>
                                                    <td>
                                                        <button wire:click="selectUser({{$user->id}}, 'detail')" type="button" class="btn btn-info">Detail</button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{$users->links()}}
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
