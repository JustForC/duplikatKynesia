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
                                                <th>Status</th>
                                                <th>Link Interview</th>
                                                <th>Tanggal Interview</th>
                                                <th>Detail</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($users as $user)
                                                <tr>
                                                    <th>{{$user->id}}</th>
                                                    <td>{{$user->name}}</td>
                                                    <td>{{$user->email}}</td>
                                                    <td>{{$user->statusTwo}}</td>
                                                    <td>{{$user->interviewLink}}</td>
                                                    <td>{{$user->interviewDate}}</td>
                                                    <td><button wire:click="selectUser({{$user->id}}, 'detail')" type="button" class="btn btn-info">Detail</button></td>
                                                    <td>
                                                        @if($user->statusTwo != "Lolos")
                                                            <button wire:click="selectUser({{$user->id}}, 'accept')" type="button" class="btn btn-success">Terima</button>
                                                            <button wire:click="selectUser({{$user->id}}, 'reject')" type="button" class="btn btn-danger">Tolak</button>
                                                        @endif
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

    {{-- Modal Accept --}}
    <div wire:ignore.self class="modal fade text-left" id="acceptModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1">Penerimaan {{$userName}}</h4>
                    <button type="button" class="close" wire:click="closeAccept()">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Anda Yakin Akan Menerima {{$userName}}?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" wire:click="closeAccept()">Cancel</button>
                    <button type="button" class="btn btn-success" wire:click="accept()">Accept</button>
                </div>
            </div>
        </div>
    </div>
    {{-- End Modal Accept --}}

    {{-- Modal Reject --}}
    <div wire:ignore.self class="modal fade text-left" id="rejectModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1">Tolak {{$userName}}</h4>
                    <button type="button" class="close" wire:click="closeReject()">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Anda Yakin Akan Menolak {{$userName}}?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" wire:click="closeReject()">Tidak</button>
                    <button type="button" class="btn btn-success" wire:click="reject()">Ya</button>
                </div>
            </div>
        </div>
    </div>
    {{-- End Modal Reject --}}
</div>
