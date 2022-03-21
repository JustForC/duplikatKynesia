<div>
    <div class="row">
        <div class="col-xl">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">No.</th>
                            <th class="text-center">Nama</th>
                            <th class="text-center">Periode Mengurus</th>
                            <th class="text-center">Posisi Mengurus</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($organizations as $organization)
                        <tr>
                            <td>{{$loop->index + 1}}</td>
                            <td>{{$organization->name}}</td>
                            <td>{{$organization->period}}</td>
                            <td>{{$organization->position}}</td>
                            <td>
                                <button wire:click="select({{$organization->id}}, 'edit')" class="btn btn-info">Edit</button>
                                <button wire:click="select({{$organization->id}}, 'delete')" class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
