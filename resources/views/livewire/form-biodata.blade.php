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
                                            <label for="name">Nama Lengkap</label>
                                            <input wire:model="name" type="text" class="form-control" id="name">
                                            @error('name') <h6 class="danger">{{ $message }}</h6> @enderror
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="nickname">Nama Panggilan</label>
                                            <input wire:model="nickname" type="text" class="form-control" id="nickname">
                                            @error('nickname') <h6 class="danger">{{ $message }}</h6> @enderror
                                        </fieldset>
                                    </div>
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="gender">Jenis Kelamin</label>
                                            <select wire:model="gender" class="form-control" id="gender">
                                                <option disable selected hidden>Silahkan Pilih</option>
                                                <option value="Pria">Pria</option>
                                                <option value="Wanita">Wanita</option>
                                            </select>
                                            @error('gender') <h6 class="danger">{{ $message }}</h6> @enderror
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="birthplace">Tempat Lahir</label>
                                            <input wire:model="birthplace" type="text" class="form-control" id="birthplace">
                                            @error('birthplace') <h6 class="danger">{{ $message }}</h6> @enderror
                                        </fieldset>
                                    </div>
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="birthdate">Tanggal Lahir</label>
                                            <input wire:model="birthdate" type='date' class="form-control pickadate" id="birthdate">
                                            @error('birthdate') <h6 class="danger">{{ $message }}</h6> @enderror
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="telephone">Telephone</label>
                                            <input wire:model="telephone" type="text" class="form-control" id="telephone">
                                            @error('telephone') <h6 class="danger">{{ $message }}</h6> @enderror
                                        </fieldset>
                                    </div>
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="email">Email</label>
                                            <input wire:model="email" type="text" class="form-control" id="email">
                                            @error('email') <h6 class="danger">{{ $message }}</h6> @enderror
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="idType">Identitas Yang Digunakan</label>
                                            <select wire:model="idType" class="form-control" id="idType">
                                                <option disable selected hidden>Silahkan Pilih</option>
                                                <option value="KTP">KTP</option>
                                                <option value="Passport">Passport</option>
                                            </select>
                                            @error('idType') <h6 class="danger">{{ $message }}</h6> @enderror
                                        </fieldset>
                                    </div>
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="idNumber">Nomor Identitas</label>
                                            <input wire:model="idNumber" type="text" class="form-control" id="idNumber">
                                            @error('idNumber') <h6 class="danger">{{ $message }}</h6> @enderror
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
                                    <div class="col-xl">
                                        <fieldset class="form-group">
                                            <label for="address">Alamat</label>
                                            <input wire:model="address" type="text" class="form-control" id="address">
                                            @error('address') <h6 class="danger">{{ $message }}</h6> @enderror
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="code">Kode Pos</label>
                                            <input wire:model="code" type="text" class="form-control" id="code">
                                            @error('code') <h6 class="danger">{{ $message }}</h6> @enderror
                                        </fieldset>
                                    </div>
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="district">Kecamatan</label>
                                            <input wire:model="district" type="text" class="form-control" id="district">
                                            @error('district') <h6 class="danger">{{ $message }}</h6> @enderror
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="city">Kota/Kabupaten</label>
                                            <input wire:model="city" type="text" class="form-control" id="city">
                                            @error('city') <h6 class="danger">{{ $message }}</h6> @enderror
                                        </fieldset>
                                    </div>
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="province">Provinsi</label>
                                            <select wire:model="province" class="form-control" id="province">
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
                                            @error('province') <h6 class="danger">{{ $message }}</h6> @enderror
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl">
                                        <fieldset class="form-group">
                                            <label for="addressLiving">Alamat Tinggal</label>
                                            <input wire:model="addressLiving" type="text" class="form-control" id="addressLiving">
                                            @error('addressLiving') <h6 class="danger">{{ $message }}</h6> @enderror
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="codeLiving">Kode Pos Tinggal</label>
                                            <input wire:model="codeLiving" type="text" class="form-control" id="codeLiving">
                                            @error('codeLiving') <h6 class="danger">{{ $message }}</h6> @enderror
                                        </fieldset>
                                    </div>
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="districtLiving">Kecamatan Tinggal</label>
                                            <input wire:model="districtLiving" type="text" class="form-control" id="districtLiving">
                                            @error('districtLiving') <h6 class="danger">{{ $message }}</h6> @enderror
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="cityLiving">Kota/Kabupaten Tinggal</label>
                                            <input wire:model="cityLiving" type="text" class="form-control" id="cityLiving">
                                            @error('cityLiving') <h6 class="danger">{{ $message }}</h6> @enderror
                                        </fieldset>
                                    </div>
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="provinceLiving">Provinsi Tinggal</label>
                                            <select wire:model="provinceLiving" class="form-control" id="provinceLiving">
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
                                            @error('provinceLiving') <h6 class="danger">{{ $message }}</h6> @enderror
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
                                            <label for="facebook">Facebook</label>
                                            <input wire:model="facebook" type="text" class="form-control" id="facebook">
                                        </fieldset>
                                    </div>
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="instagram">Instagram</label>
                                            <input wire:model="instagram" type="text" class="form-control" id="instagram">
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="twitter">Twitter</label>
                                            <input wire:model="twitter" type="text" class="form-control" id="twitter">
                                        </fieldset>
                                    </div>
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="tiktok">Tiktok</label>
                                            <input wire:model="tiktok" type="text" class="form-control" id="tiktok">
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
                                            <label for="entranceType">Jalur Masuk</label>
                                            <select wire:model="entranceType" class="form-control" id="entranceType">
                                                <option disable selected hidden>Silahkan Pilih</option>
                                                <option value="SBMPTN">SBMPTN</option>
                                                <option value="SNPMTN">SNMPTN</option>
                                            </select>
                                            @error('entranceType') <h6 class="danger">{{ $message }}</h6> @enderror
                                        </fieldset>
                                    </div>
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="entranceNumber">Nomor Peserta</label>
                                            <input wire:model="entranceNumber" type="text" class="form-control" id="entranceNumber">
                                            @error('entranceNumber') <h6 class="danger">{{ $message }}</h6> @enderror
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="major">Program Studi</label>
                                            <input wire:model="major" type="text" class="form-control" id="major">
                                            @error('major') <h6 class="danger">{{ $message }}</h6> @enderror
                                        </fieldset>
                                    </div>
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="university">Perguruan Tinggi</label>
                                            <select wire:model="university" class="form-control" id="university">
                                                <option disable selected hidden>Silahkan Pilih</option>
                                                <option value="Universitas Indonesia">Universitas Indonesia</option>
                                                <option value="Institut Teknologi Bandung">Institut Teknologi Bandung</option>
                                                <option value="Universitas Padjadjaran">Universitas Padjadjaran</option>
                                            </select>
                                            @error('university') <h6 class="danger">{{ $message }}</h6> @enderror
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
