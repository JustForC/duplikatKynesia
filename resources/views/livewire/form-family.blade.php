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

                                {{-- Father --}}
                                <div class="row">
                                    <div class="col-xl">    
                                        <h3 class="content-header-title float-left mb-0">Ayah</h3>
                                    </div>
                                </div>
                                <br>
                                <input type="hidden" wire:model="fatherId">
                                <div class="row">
                                    <div class="col-xl">
                                        <fieldset class="form-group">
                                            <label for="fatherName">Nama Lengkap</label>
                                            <input wire:model="fatherName" type="text" class="form-control" id="fatherName">
                                            @error('fatherName') <h6 class="danger">{{ $message }}</h6> @enderror
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="fatherBirthplace">Tempat Lahir</label>
                                            <input wire:model="fatherBirthplace" type="text" class="form-control" id="fatherBirthplace">
                                            @error('fatherBirthplace') <h6 class="danger">{{ $message }}</h6> @enderror
                                        </fieldset>
                                    </div>
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="fatherBirthdate">Tanggal Lahir</label>
                                            <input wire:model="fatherBirthdate" type='date' class="form-control pickadate" id="fatherBirthdate">
                                            @error('fatherBirthdate') <h6 class="danger">{{ $message }}</h6> @enderror
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="fatherEducation">Pendidikan Terakhir</label>
                                            <select wire:model="fatherEducation" class="form-control" id="fatherEducation">
                                                <option disable selected hidden>Silahkan Pilih</option>
                                                <option value="SD">SD</option>
                                                <option value="SMP">SMP</option>
                                                <option value="SMA">SMA</option>
                                                <option value="SMK">SMK</option>
                                                <option value="D3">D3</option>
                                                <option value="D4">D4</option>
                                                <option value="S1">S1</option>
                                                <option value="S2">S2</option>
                                                <option value="S3">S3</option>
                                            </select>
                                            @error('fatherEducation') <h6 class="danger">{{ $message }}</h6> @enderror
                                        </fieldset>
                                    </div>
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="fatherJob">Pekerjaan</label>
                                            <input wire:model="fatherJob" type="text" class="form-control" id="fatherJob">
                                            @error('fatherJob') <h6 class="danger">{{ $message }}</h6> @enderror
                                        </fieldset>
                                    </div>
                                </div>
                                <hr>
                                {{-- End Father --}}

                                {{-- Mother --}}
                                <div class="row">
                                    <div class="col-xl">    
                                        <h3 class="content-header-title float-left mb-0">Ibu</h3>
                                    </div>
                                </div>
                                <br>
                                <input type="hidden" wire:model="motherId">
                                <div class="row">
                                    <div class="col-xl">
                                        <fieldset class="form-group">
                                            <label for="motherName">Nama Lengkap</label>
                                            <input wire:model="motherName" type="text" class="form-control" id="motherName">
                                            @error('motherName') <h6 class="danger">{{ $message }}</h6> @enderror
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="motherBirthplace">Tempat Lahir</label>
                                            <input wire:model="motherBirthplace" type="text" class="form-control" id="motherBirthplace">
                                            @error('motherBirthplace') <h6 class="danger">{{ $message }}</h6> @enderror
                                        </fieldset>
                                    </div>
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="motherBirthdate">Tanggal Lahir</label>
                                            <input wire:model="motherBirthdate" type='date' class="form-control pickadate" id="motherBirthdate">
                                            @error('motherBirthdate') <h6 class="danger">{{ $message }}</h6> @enderror
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="motherEducation">Pendidikan Terakhir</label>
                                            <select wire:model="motherEducation" class="form-control" id="motherEducation">
                                                <option disable selected hidden>Silahkan Pilih</option>
                                                <option value="SD">SD</option>
                                                <option value="SMP">SMP</option>
                                                <option value="SMA">SMA</option>
                                                <option value="SMK">SMK</option>
                                                <option value="D3">D3</option>
                                                <option value="D4">D4</option>
                                                <option value="S1">S1</option>
                                                <option value="S2">S2</option>
                                                <option value="S3">S3</option>
                                            </select>
                                            @error('motherEducation') <h6 class="danger">{{ $message }}</h6> @enderror
                                        </fieldset>
                                    </div>
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="motherJob">Pekerjaan</label>
                                            <input wire:model="motherJob" type="text" class="form-control" id="motherJob">
                                            @error('motherJob') <h6 class="danger">{{ $message }}</h6> @enderror
                                        </fieldset>
                                    </div>
                                </div>
                                <hr>
                                {{-- End Mother --}}

                                {{-- Child --}}
                                <div class="row">
                                    <div class="col-xl">    
                                        <h3 class="content-header-title float-left mb-0">Anak</h3>
                                    </div>
                                </div>
                                <br>
                                <input type="hidden" wire:model="childId">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="childName">Nama Lengkap</label>
                                            <input wire:model="childName" type="text" class="form-control" id="childName">
                                            @error('childName') <h6 class="danger">{{ $message }}</h6> @enderror
                                        </fieldset>
                                    </div>
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="childGender">Jenis Kelamin</label>
                                            <select wire:model="childGender" class="form-control" id="childGender">
                                                <option disable selected hidden>Silahkan Pilih</option>
                                                <option value="Pria">Pria</option>
                                                <option value="Wanita">Wanita</option>
                                            </select>
                                            @error('childGender') <h6 class="danger">{{ $message }}</h6> @enderror
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="childBirthplace">Tempat Lahir</label>
                                            <input wire:model="childBirthplace" type="text" class="form-control" id="childBirthplace">
                                            @error('childBirthplace') <h6 class="danger">{{ $message }}</h6> @enderror
                                        </fieldset>
                                    </div>
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="childBirthdate">Tanggal Lahir</label>
                                            <input wire:model="childBirthdate" type='date' class="form-control pickadate" id="childBirthdate">
                                            @error('childBirthdate') <h6 class="danger">{{ $message }}</h6> @enderror
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="childEducation">Pendidikan Terakhir</label>
                                            <select wire:model="childEducation" class="form-control" id="childEducation">
                                                <option disable selected hidden>Silahkan Pilih</option>
                                                <option value="SD">SD</option>
                                                <option value="SMP">SMP</option>
                                                <option value="SMA">SMA</option>
                                                <option value="SMK">SMK</option>
                                                <option value="D3">D3</option>
                                                <option value="D4">D4</option>
                                                <option value="S1">S1</option>
                                                <option value="S2">S2</option>
                                                <option value="S3">S3</option>
                                            </select>
                                            @error('childEducation') <h6 class="danger">{{ $message }}</h6> @enderror
                                        </fieldset>
                                    </div>
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="childJob">Pekerjaan</label>
                                            <input wire:model="childJob" type="text" class="form-control" id="childJob">
                                            @error('childJob') <h6 class="danger">{{ $message }}</h6> @enderror
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <button wire:click="saveChild()" class="btn btn-success">Simpan Anak</button>
                                    </div>
                                </div>
                                <br>
                                <livewire:table-child></livewire:table-child>
                                <hr>
                                {{-- End Child --}}

                                {{-- Networth --}}
                                <div class="row">
                                    <div class="col-xl">    
                                        <h3 class="content-header-title float-left mb-0">Penghasilan Orang Tua</h3>
                                    </div>
                                </div>
                                <br>
                                <input type="hidden" wire:model="nethworthId">
                                <div class="row">
                                    <div class="col-xl">
                                        <fieldset class="form-group">
                                            <label for="networthValue">Pendapatan Orang Tua</label>
                                            <input wire:model="networthValue" type="number" class="form-control" id="networthValue">
                                        </fieldset>
                                        @error('networthValue') <h6 class="danger">{{ $message }}</h6> @enderror
                                    </div>
                                </div>
                                {{-- End Networth --}}
                            </div>
                        </div>
                        <div class="card-footer text-muted">
                            <button wire:click="save()" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    {{-- Modal Delete --}}
    <div class="modal fade text-left" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1">Delete Anak</h4>
                    <button type="button" class="close" wire:click="closeModal()" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Anda Yakin Akan Menghapus {{$childName}}?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" wire:click="closeModal()">Cancel</button>
                    <button wire:click="delete()" type="button" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>
    {{-- End Modal Delete --}}
</div>
