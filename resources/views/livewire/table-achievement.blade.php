<div>
    <div class="row">
        <div class="col-xl">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">No.</th>
                            <th class="text-center">Nama</th>
                            <th class="text-center">Penyelenggara</th>
                            <th class="text-center">Tingkat</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($achievements as $achievement)
                        <tr>
                            <td>{{$loop->index + 1}}</td>
                            <td>{{$achievement->name}}</td>
                            <td>{{$achievement->organizer}}</td>
                            <td>{{$achievement->level}}</td>
                            <td>
                                <button wire:click="select({{$achievement->id}}, 'edit')" class="btn btn-info">Edit</button>
                                <button wire:click="select({{$achievement->id}}, 'delete')" class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
