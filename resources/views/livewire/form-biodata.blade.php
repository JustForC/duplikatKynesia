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
                                <div class="row">
                                    <div class="col-xl">    
                                        <h3 class="content-header-title float-left mb-0">Biodata Diri</h3>
                                    </div>
                                </div>
                                <br>
                                <input type="hidden" wire:model="biodataId">
                                <div class="row">
                                    <div class="col-xl">
                                        <fieldset class="form-group">
                                            <label for="helpInputTop">Nama Lengkap</label>
                                            <input wire:model="name" type="text" class="form-control" id="helpInputTop">
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="helpInputTop">Nama Panggilan</label>
                                            <input wire:model="nickname" type="text" class="form-control" id="helpInputTop">
                                        </fieldset>
                                    </div>
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="basicSelect">Jenis Kelamin</label>
                                            <select wire:model="gender" class="form-control" id="basicSelect">
                                                <option disable selected hidden>Silahkan Pilih</option>
                                                <option value="Pria">Pria</option>
                                                <option value="Wanita">Wanita</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="helpInputTop">Tempat Lahir</label>
                                            <input wire:model="birthplace" type="text" class="form-control" id="helpInputTop">
                                        </fieldset>
                                    </div>
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="pickDate">Tanggal Lahir</label>
                                            <input wire:model="birthdate" type='date' class="form-control pickadate" id="pickDate">
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="helpInputTop">Telephone</label>
                                            <input wire:model="telephone" type="text" class="form-control" id="helpInputTop">
                                        </fieldset>
                                    </div>
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="helpInputTop">Email</label>
                                            <input wire:model="email" type="text" class="form-control" id="helpInputTop">
                                        </fieldset>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-xl">    
                                        <h3 class="content-header-title float-left mb-0">Alamat</h3>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="basicSelect">Identitas Yang Digunakan</label>
                                            <select wire:model="idType" class="form-control" id="basicSelect">
                                                <option disable selected hidden>Silahkan Pilih</option>
                                                <option value="KTP">KTP</option>
                                                <option value="Passport">Passport</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="helpInputTop">Nomor Identitas</label>
                                            <input wire:model="idNumber" type="text" class="form-control" id="helpInputTop">
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl">
                                        <fieldset class="form-group">
                                            <label for="helpInputTop">Alamat</label>
                                            <input wire:model="address" type="text" class="form-control" id="helpInputTop">
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="helpInputTop">Kode Pos</label>
                                            <input wire:model="code" type="text" class="form-control" id="helpInputTop">
                                        </fieldset>
                                    </div>
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="helpInputTop">Kecamatan</label>
                                            <input wire:model="district" type="text" class="form-control" id="helpInputTop">
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="helpInputTop">Kota/Kabupaten</label>
                                            <input wire:model="city" type="text" class="form-control" id="helpInputTop">
                                        </fieldset>
                                    </div>
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="basicSelect">Provinsi</label>
                                            <select wire:model="province" class="form-control" id="basicSelect">
                                                <option disable selected hidden>Silahkan Pilih</option>
                                                <option value="Aceh">Aceh</option>
                                                <option value="Bali">Bali</option>
                                                <option value="Bangka Belitung">Bangka Belitung</option>
                                                <option value="Banten">Banten</option>
                                                <option value="Bengkulu">Bengkulu</option>
                                                <option value="DI Yogyakarta">DI Yogyakarta</option>
                                                <option value="DKI Jakarta">DKI Jakarta</option>
                                                <option value="Gorontalo">Gorontalo</option>
                                                <option value="Jambi">Jambi</option>
                                                <option value="Jawa Barat">Jawa Barat</option>
                                                <option value="Jawa Tengah">Jawa Tengah</option>
                                                <option value="Jawa Timur">Jawa Timur</option>
                                                <option value="Kalimantan Barat">Kalimantan Barat</option>
                                                <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                                                <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                                                <option value="Kalimantan Timur">Kalimantan Timur</option>
                                                <option value="Kalimantan Utara">Kalimantan Utara</option>
                                                <option value="Kepulauan Riau">Kepulauan Riau</option>
                                                <option value="Lampung">Lampung</option>
                                                <option value="Maluku Utara">Maluku Utara</option>
                                                <option value="Maluku">Maluku</option>
                                                <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                                                <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                                                <option value="Papua Barat">Papua Barat</option>
                                                <option value="Papua">Papua</option>
                                                <option value="Riau">Riau</option>
                                                <option value="Sulawesi Barat">Sulawesi Barat</option>
                                                <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                                                <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                                                <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                                                <option value="Sulawesi Utara">Sulawesi Utara</option>
                                                <option value="Sumatra Barat">Sumatra Barat</option>
                                                <option value="Sumatra Selatan">Sumatra Selatan</option>
                                                <option value="Sumatra Utara">Sumatra Utara</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl">
                                        <fieldset class="form-group">
                                            <label for="helpInputTop">Alamat Tinggal</label>
                                            <input wire:model="addressLiving" type="text" class="form-control" id="helpInputTop">
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="helpInputTop">Kode Pos Tinggal</label>
                                            <input wire:model="codeLiving" type="text" class="form-control" id="helpInputTop">
                                        </fieldset>
                                    </div>
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="helpInputTop">Kecamatan Tinggal</label>
                                            <input wire:model="districtLiving" type="text" class="form-control" id="helpInputTop">
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="helpInputTop">Kota/Kabupaten Tinggal</label>
                                            <input wire:model="cityLiving" type="text" class="form-control" id="helpInputTop">
                                        </fieldset>
                                    </div>
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="basicSelect">Provinsi Tinggal</label>
                                            <select wire:model="provinceLiving" class="form-control" id="basicSelect">
                                                <option disable selected hidden>Silahkan Pilih</option>
                                                <option value="Aceh">Aceh</option>
                                                <option value="Bali">Bali</option>
                                                <option value="Bangka Belitung">Bangka Belitung</option>
                                                <option value="Banten">Banten</option>
                                                <option value="Bengkulu">Bengkulu</option>
                                                <option value="DI Yogyakarta">DI Yogyakarta</option>
                                                <option value="DKI Jakarta">DKI Jakarta</option>
                                                <option value="Gorontalo">Gorontalo</option>
                                                <option value="Jambi">Jambi</option>
                                                <option value="Jawa Barat">Jawa Barat</option>
                                                <option value="Jawa Tengah">Jawa Tengah</option>
                                                <option value="Jawa Timur">Jawa Timur</option>
                                                <option value="Kalimantan Barat">Kalimantan Barat</option>
                                                <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                                                <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                                                <option value="Kalimantan Timur">Kalimantan Timur</option>
                                                <option value="Kalimantan Utara">Kalimantan Utara</option>
                                                <option value="Kepulauan Riau">Kepulauan Riau</option>
                                                <option value="Lampung">Lampung</option>
                                                <option value="Maluku Utara">Maluku Utara</option>
                                                <option value="Maluku">Maluku</option>
                                                <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                                                <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                                                <option value="Papua Barat">Papua Barat</option>
                                                <option value="Papua">Papua</option>
                                                <option value="Riau">Riau</option>
                                                <option value="Sulawesi Barat">Sulawesi Barat</option>
                                                <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                                                <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                                                <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                                                <option value="Sulawesi Utara">Sulawesi Utara</option>
                                                <option value="Sumatra Barat">Sumatra Barat</option>
                                                <option value="Sumatra Selatan">Sumatra Selatan</option>
                                                <option value="Sumatra Utara">Sumatra Utara</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-xl">    
                                        <h3 class="content-header-title float-left mb-0">Social Media</h3>
                                    </div>
                                </div>
                                <br>
                                <input type="hidden" wire:model="socialMediaId">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="helpInputTop">Facebook</label>
                                            <input wire:model="facebook" type="text" class="form-control" id="helpInputTop">
                                        </fieldset>
                                    </div>
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="helpInputTop">Instagram</label>
                                            <input wire:model="instagram" type="text" class="form-control" id="helpInputTop">
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="helpInputTop">Twitter</label>
                                            <input wire:model="twitter" type="text" class="form-control" id="helpInputTop">
                                        </fieldset>
                                    </div>
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="helpInputTop">Tiktok</label>
                                            <input wire:model="tiktok" type="text" class="form-control" id="helpInputTop">
                                        </fieldset>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-xl">    
                                        <h3 class="content-header-title float-left mb-0">Universitas Diterima</h3>
                                    </div>
                                </div>
                                <br>
                                <input type="hidden" wire:model="universityId">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="basicSelect">Jalur Masuk</label>
                                            <select wire:model="entranceType" class="form-control" id="basicSelect">
                                                <option disable selected hidden>Silahkan Pilih</option>
                                                <option value="SBMPTN">SBMPTN</option>
                                                <option value="SNPMTN">SNMPTN</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="helpInputTop">Nomor Peserta</label>
                                            <input wire:model="entranceNumber" type="text" class="form-control" id="helpInputTop">
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="helpInputTop">Program Studi</label>
                                            <input wire:model="major" type="text" class="form-control" id="helpInputTop">
                                        </fieldset>
                                    </div>
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="basicSelect">Perguruan Tinggi</label>
                                            <select wire:model="university" class="form-control" id="basicSelect">
                                                <option disable selected hidden>Silahkan Pilih</option>
                                                <option value="Universitas Indonesia">Universitas Indonesia</option>
                                                <option value="Institut Teknologi Bandung">Institut Teknologi Bandung</option>
                                                <option value="Universitas Padjadjaran">Universitas Padjadjaran</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                </div>
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
</div>
