<div>
    <div class="content-body">
        <section id="content-types">

            <div class="row match-height">
                <div class="col-xl">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3 form-group float-left">
                                        <button class='btn btn-success'><a href="{{route('admin.export')}}" class="white">Export Excel</a></button>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="excel">File Excel</label>
                                            <div class="custom-file">
                                                <input wire:model="excel" type="file" class="custom-file-input" id="excel">
                                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                @error('excel') <h6 class="danger">{{ $message }}</h6> @enderror
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-xl-6">
                                        <br>
                                        <button wire:click="saveExcel()" class="btn btn-success">Import</button>
                                    </div>
                                </div>
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
                                                <th>Status Tahap Satu</th>
                                                <th>Status Tahap Dua</th>
                                                <th>Role</th>
                                                <th>Link Interview</th>
                                                <th>Tanggal Interview</th>
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
                                                    @if($user->role == 0)
                                                    <td>User</td>
                                                    @elseif($user->role == 1)
                                                    <td>Admin</td>
                                                    @endif
                                                    <td>{{$user->interviewLink}}</td>
                                                    <td>{{$user->interviewDate}}</td>
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
