<div>
    <div class="row">
        <div class="col-xl">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">No.</th>
                            <th class="text-center">Nama Bahasa</th>
                            <th class="text-center">Berbicara</th>
                            <th class="text-center">Menulis</th>
                            <th class="text-center">Membaca</th>
                            <th class="text-center">Mendengar</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($languages as $language)
                        <tr>
                            <td>{{$loop->index + 1}}</td>
                            <td>{{$language->language}}</td>
                            <td>{{$language->talk}}</td>
                            <td>{{$language->write}}</td>
                            <td>{{$language->read}}</td>
                            <td>{{$language->listen}}</td>
                            <td>
                                <button wire:click="select({{$language->id}}, 'edit')" class="btn btn-info">Edit</button>
                                <button wire:click="select({{$language->id}}, 'delete')" class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
