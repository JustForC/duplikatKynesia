<div>
    <div class="row">
        <div class="col-xl">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">No.</th>
                            <th class="text-center">Nama</th>
                            <th class="text-center">Lama Pendidikan</th>
                            <th class="text-center">Tahun Diselenggarakan</th>
                            <th class="text-center">Sertifikat</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($trainings as $training)
                        <tr>
                            <td>{{$loop->index + 1}}</td>
                            <td>{{$training->name}}</td>
                            <td>{{$training->period}}</td>
                            <td>{{$training->year}}</td>
                            <td>{{$training->certificate}}</td>
                            <td>
                                <button wire:click="select({{$training->id}}, 'edit')" class="btn btn-info">Edit</button>
                                <button wire:click="select({{$training->id}}, 'delete')" class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
