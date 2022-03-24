<div>
    <div class="content-body">
        <section id="content-types">
            <div class="row match-height">
                <div class="col-xl">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="alert alert-success alert-dismissible fade hidden" role="alert" id="alertSuccess">
                                    <h4 class="alert-heading">Success</h4>
                                    <p class="mb-0">
                                        Data berhasil disimpan.
                                    </p>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                {{-- Profile --}}
                                <div class="row">
                                    <div class="col-xl">    
                                        <h3 class="content-header-title float-left mb-0">Profile</h3>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-xl">
                                        <fieldset class="form-group">
                                            <label for="name">Nama</label>
                                            <input wire:model="name" type="text" class="form-control" id="name">
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <button wire:click="saveProfile()" class="btn btn-success">Edit Profile</button>
                                    </div>
                                </div>
                                <hr>
                                {{-- End Profile --}}

                                {{-- Password --}}
                                <div class="row">
                                    <div class="col-xl">    
                                        <h3 class="content-header-title float-left mb-0">Ganti Password</h3>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-xl">
                                        <fieldset class="form-group">
                                            <label for="checkPassword">Password Lama</label>
                                            <input wire:model="checkPassword" type="password" class="form-control" id="checkPassword">
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="password">Password Baru</label>
                                            <input wire:model="password" type="password" class="form-control" id="password">
                                        </fieldset>
                                    </div>
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="confirmPassword">Konfirmasi Password</label>
                                            <input wire:model="confirmPassword" type="password" class="form-control" id="confirmPassword">
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <button wire:click="savePassword()" class="btn btn-success">Ganti Password</button>
                                    </div>
                                </div>
                                {{-- End Password --}}
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
