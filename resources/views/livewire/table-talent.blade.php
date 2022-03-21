<div>
    <div class="row">
        <div class="col-xl">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">No.</th>
                            <th class="text-center">Nama</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($talents as $talent)
                        <tr>
                            <td>{{$loop->index + 1}}</td>
                            <td>{{$talent->name}}</td>
                            <td>
                                <button wire:click="select({{$talent->id}}, 'edit')" class="btn btn-info">Edit</button>
                                <button wire:click="select({{$talent->id}}, 'delete')" class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
