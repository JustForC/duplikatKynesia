<div>
    <div class="row">
        <div class="col-xl">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">No.</th>
                            <th class="text-center">Nama</th>
                            <th class="text-center">Jenis Kelamin</th>
                            <th class="text-center">Tempat, Tanggal Lahir</th>
                            <th class="text-center">Pendidikan</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($children as $child)
                        <tr>
                            <td>{{$loop->index + 1}}</td>
                            <td>{{$child->name}}</td>
                            <td>{{$child->gender}}</td>
                            <td>{{$child->birthplace}}, {{$child->birthdate}}</td>
                            <td>{{$child->education}}</td>
                            <td>
                                <button wire:click="select({{$child->id}}, 'edit')" class="btn btn-info">Edit</button>
                                <button wire:click="select({{$child->id}}, 'delete')" class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
