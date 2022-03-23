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
                                        <h2 class="content-header-title float-left mb-0">Pendidikan Formal</h2>
                                    </div>
                                </div>
                                <br>
                                {{-- SD --}}
                                <div class="row">
                                    <div class="col-xl">    
                                        <h3 class="content-header-title float-left mb-0">SD</h3>
                                    </div>
                                </div>
                                <br>
                                <input type="hidden" wire:model="elementaryId">
                                <div class="row">
                                    <div class="col-xl">
                                        <fieldset class="form-group">
                                            <label for="elementaryName">Nama Sekolah</label>
                                            <input wire:model="elementaryName" type="text" class="form-control" id="elementaryName">
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="elementaryProvince">Provinsi</label>
                                            <select wire:model="elementaryProvince" class="form-control" id="elementaryProvince">
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
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="elementaryCity">Kota/Kabupaten</label>
                                            <input wire:model="elementaryCity" type="text" class="form-control" id="elementaryCity">
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="elementaryEnter">Tahun Masuk</label>
                                            <input wire:model="elementaryEnter" type="text" class="form-control" id="elementaryEnter">
                                        </fieldset>
                                    </div>
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="elementaryGraduate">Tahun Lulus</label>
                                            <input wire:model="elementaryGraduate" type="text" class="form-control" id="elementaryGraduate">
                                        </fieldset>
                                    </div>
                                </div>
                                <hr>
                                {{-- End SD --}}

                                {{-- SMP --}}
                                <div class="row">
                                    <div class="col-xl">    
                                        <h3 class="content-header-title float-left mb-0">SMP</h3>
                                    </div>
                                </div>
                                <br>
                                <input type="hidden" wire:model="juniorId">
                                <div class="row">
                                    <div class="col-xl">
                                        <fieldset class="form-group">
                                            <label for="juniorName">Nama Sekolah</label>
                                            <input wire:model="juniorName" type="text" class="form-control" id="juniorName">
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="juniorProvince">Provinsi</label>
                                            <select wire:model="juniorProvince" class="form-control" id="juniorProvince">
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
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="juniorCity">Kota/Kabupaten</label>
                                            <input wire:model="juniorCity" type="text" class="form-control" id="juniorCity">
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="juniorEnter">Tahun Masuk</label>
                                            <input wire:model="juniorEnter" type="text" class="form-control" id="juniorEnter">
                                        </fieldset>
                                    </div>
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="juniorGraduate">Tahun Lulus</label>
                                            <input wire:model="juniorGraduate" type="text" class="form-control" id="juniorGraduate">
                                        </fieldset>
                                    </div>
                                </div>
                                <hr>
                                {{-- End SMP --}}

                                {{-- SMA --}}
                                <div class="row">
                                    <div class="col-xl">    
                                        <h3 class="content-header-title float-left mb-0">SMA</h3>
                                    </div>
                                </div>
                                <br>
                                <input type="hidden" wire:model="highId">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="highName">Nama Sekolah</label>
                                            <input wire:model="highName" type="text" class="form-control" id="highName">
                                        </fieldset>
                                    </div>
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="highMajor">Penjurusan</label>
                                            <select wire:model="highMajor" class="form-control" id="highMajor">
                                                <option disable selected hidden>Silahkan Pilih</option>
                                                <option value="IPA">IPA</option>
                                                <option value="IPS">IPS</option>
                                                <option value="Bahasa">Bahasa</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="highProvince">Provinsi</label>
                                            <select wire:model="highProvince" class="form-control" id="highProvince">
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
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="highCity">Kota/Kabupaten</label>
                                            <input wire:model="highCity" type="text" class="form-control" id="highCity">
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="highEnter">Tahun Masuk</label>
                                            <input wire:model="highEnter" type="text" class="form-control" id="highEnter">
                                        </fieldset>
                                    </div>
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="highGraduate">Tahun Lulus</label>
                                            <input wire:model="highGraduate" type="text" class="form-control" id="highGraduate">
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <button wire:click="saveEducation()" class="btn btn-success">Simpan Pendidikan</button>
                                    </div>
                                </div>
                                <br>
                                <hr>
                                {{-- End SMA --}}

                                {{-- Training --}}
                                <div class="row">
                                    <div class="col-xl">    
                                        <h3 class="content-header-title float-left mb-0">Pendidikan Non-Formal</h3>
                                    </div>
                                </div>
                                <br>
                                <input type="hidden" wire:model="trainingId">
                                <div class="row">
                                    <div class="col-xl">
                                        <fieldset class="form-group">
                                            <label for="trainingName">Nama Pendidikan Non-Formal</label>
                                            <input wire:model="trainingName" type="text" class="form-control" id="trainingName">
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="trainingPeriod">Lama Pendidikan</label>
                                            <input wire:model="trainingPeriod" type="text" class="form-control" id="trainingPeriod">
                                        </fieldset>
                                    </div>
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="trainingYear">Tahun Diselenggarakan</label>
                                            <input wire:model="trainingYear" type="text" class="form-control" id="trainingYear">
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="trainingOrganizer">Penyelenggara</label>
                                            <input wire:model="trainingOrganizer" type="text" class="form-control" id="trainingOrganizer">
                                        </fieldset>
                                    </div>
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="trainingCertificate">Sertifikat</label>
                                            <select wire:model="trainingCertificate" class="form-control" id="trainingCertificate">
                                                <option disable selected hidden>Silahkan Pilih</option>
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <button wire:click="saveTraining()" class="btn btn-success">Simpan Pelatihan</button>
                                    </div>
                                </div>
                                <br>
                                <livewire:table-training></livewire:table-training>
                                <hr>
                                {{-- End Training --}}

                                {{-- Achievement --}}
                                <div class="row">
                                    <div class="col-xl">    
                                        <h3 class="content-header-title float-left mb-0">Prestasi</h3>
                                    </div>
                                </div>
                                <br>
                                <input type="hidden" wire:model="achievementId">
                                <div class="row">
                                    <div class="col-xl">
                                        <fieldset class="form-group">
                                            <label for="achievementName">Nama Prestasi</label>
                                            <input wire:model="achievementName" type="text" class="form-control" id="achievementName">
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="achievementOrganizer">Penyelenggara</label>
                                            <input wire:model="achievementOrganizer" type="text" class="form-control" id="achievementOrganizer">
                                        </fieldset>
                                    </div>
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="achievementLevel">Tingkat</label>
                                            <select wire:model="achievementLevel" class="form-control" id="achievementLevel">
                                                <option disable selected hidden>Silahkan Pilih</option>
                                                <option value="Regional">Regional</option>
                                                <option value="Nasional">Nasional</option>
                                                <option value="Internasional">Internasional</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <button wire:click="saveAchievement()" class="btn btn-success">Simpan Pelatihan</button>
                                    </div>
                                </div>
                                <br>
                                <livewire:table-achievement></livewire:table-achievement>
                                <hr>
                                {{-- End Achievement --}}

                                {{-- Language --}}
                                <div class="row">
                                    <div class="col-xl">    
                                        <h3 class="content-header-title float-left mb-0">Bahasa Asing</h3>
                                    </div>
                                </div>
                                <br>
                                <input type="hidden" wire:model="languageId">
                                <div class="row">
                                    <div class="col-xl">
                                        <fieldset class="form-group">
                                            <label for="languageName">Bahasa Asing</label>
                                            <select wire:model="languageName" class="form-control" id="languageName">
                                                <option disable selected hidden>Silahkan Pilih</option>
                                                <option value="Inggris">Inggris</option>
                                                <option value="Mandarin">Mandarin</option>
                                                <option value="Jepang">Jepang</option>
                                                <option value="Korea">Korea</option>
                                                <option value="India">India</option>
                                                <option value="Perancis">Perancis</option>
                                                <option value="Belanda">Belanda</option>
                                                <option value="Jerman">Jerman</option>
                                                <option value="Russia">Russia</option>
                                                <option value="Arab">Arab</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="languageListen">Kemampuan Mendengar</label>
                                            <select wire:model="languageListen" class="form-control" id="languageListen">
                                                <option disable selected hidden>Silahkan Pilih</option>
                                                <option value="Beginner">Beginner</option>
                                                <option value="Intermediate">Intermediate</option>
                                                <option value="Advance">Advance</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="languageRead">Kemampuan Membaca</label>
                                            <select wire:model="languageRead" class="form-control" id="languageRead">
                                                <option disable selected hidden>Silahkan Pilih</option>
                                                <option value="Beginner">Beginner</option>
                                                <option value="Intermediate">Intermediate</option>
                                                <option value="Advance">Advance</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="languageWrite">Kemampuan Menulis</label>
                                            <select wire:model="languageWrite" class="form-control" id="languageWrite">
                                                <option disable selected hidden>Silahkan Pilih</option>
                                                <option value="Beginner">Beginner</option>
                                                <option value="Intermediate">Intermediate</option>
                                                <option value="Advance">Advance</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="languageTalk">Kemampuan Berbicara</label>
                                            <select wire:model="languageTalk" class="form-control" id="languageTalk">
                                                <option disable selected hidden>Silahkan Pilih</option>
                                                <option value="Beginner">Beginner</option>
                                                <option value="Intermediate">Intermediate</option>
                                                <option value="Advance">Advance</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <button wire:click="saveLanguage()" class="btn btn-success">Simpan Bahasa</button>
                                    </div>
                                </div>
                                <br>
                                <livewire:table-language></livewire:table-language>
                                <hr>
                                {{-- End Language --}}

                                {{-- Organization --}}
                                <div class="row">
                                    <div class="col-xl">    
                                        <h3 class="content-header-title float-left mb-0">Riwayat Organisasi</h3>
                                    </div>
                                </div>
                                <br>
                                <input type="hidden" wire:model="organizationId">
                                <div class="row">
                                    <div class="col-xl">
                                        <fieldset class="form-group">
                                            <label for="organizationName">Nama Organisasi</label>
                                            <input wire:model="organizationName" type="text" class="form-control" id="organizationName">
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="organizationPeriod">Periode Mengurus</label>
                                            <input wire:model="organizationPeriod" type="text" class="form-control" id="organizationPeriod">
                                        </fieldset>
                                    </div>
                                    <div class="col-xl-6">
                                        <fieldset class="form-group">
                                            <label for="organizationPosition">Posisi Mengurus</label>
                                            <input wire:model="organizationPosition" type="text" class="form-control" id="organizationPosition">
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl">
                                        <fieldset class="form-group">
                                            <label for="organizationDescription">Keterangan</label>
                                            <textarea wire:model="organizationDescription" class="form-control" id="organizationDescription" rows="3"></textarea>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <button wire:click="saveOrganization()" class="btn btn-success">Simpan Organisasi</button>
                                    </div>
                                </div>
                                <br>
                                <livewire:table-organization></livewire:table-organization>
                                <hr>
                                {{-- End Organization --}}

                                {{-- Talent --}}
                                <div class="row">
                                    <div class="col-xl">    
                                        <h3 class="content-header-title float-left mb-0">Bakat</h3>
                                    </div>
                                </div>
                                <br>
                                <input type="hidden" wire:model="talentId">
                                <div class="row">
                                    <div class="col-xl">
                                        <fieldset class="form-group">
                                            <label for="talentName">Nama Bakat</label>
                                            <input wire:model="talentName" type="text" class="form-control" id="talentName">
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <button wire:click="saveTalent()" class="btn btn-success">Simpan Bakat</button>
                                    </div>
                                </div>
                                <br>
                                <livewire:table-talent></livewire:table-talent>
                                <hr>
                                {{-- End Talent --}}
                            </div>
                        </div>
                        <div class="card-footer text-muted">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    {{-- Modal Delete Training --}}
    <div class="modal fade text-left" id="deleteTraining" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1">Delete Training</h4>
                    <button type="button" class="close" wire:click="closeModalTraining()" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Anda Yakin Akan Menghapus {{$trainingName}}?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" wire:click="closeModalTraining()">Cancel</button>
                    <button wire:click="doDeleteTraining()" type="button" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>
    {{-- End Modal Delete Training --}}

    {{-- Modal Delete Achievement --}}
    <div class="modal fade text-left" id="deleteAchievement" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1">Delete Prestasi</h4>
                    <button type="button" class="close" wire:click="closeModalAchievement()" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Anda Yakin Akan Menghapus {{$achievementName}}?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" wire:click="closeModalAchievement()">Cancel</button>
                    <button wire:click="doDeleteAchievement()" type="button" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>
    {{-- End Modal Delete Training --}}

    {{-- Modal Delete Language --}}
    <div class="modal fade text-left" id="deleteLanguage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1">Delete Bahasa</h4>
                    <button type="button" class="close" wire:click="closeModalLanguage()" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Anda Yakin Akan Menghapus {{$languageName}}?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" wire:click="closeModalLanguage()">Cancel</button>
                    <button wire:click="doDeleteLanguage()" type="button" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>
    {{-- End Modal Delete Language --}}

    {{-- Modal Delete Organisation --}}
    <div class="modal fade text-left" id="deleteOrganization" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1">Delete Organisasi</h4>
                    <button type="button" class="close" wire:click="closeModalOrganization()" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Anda Yakin Akan Menghapus {{$organizationName}}?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" wire:click="closeModalOrganization()">Cancel</button>
                    <button wire:click="doDeleteOrganization()" type="button" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>
    {{-- End Modal Delete Organisation --}}

    {{-- Modal Delete Talent --}}
    <div class="modal fade text-left" id="deleteTalent" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1">Delete Organisasi</h4>
                    <button type="button" class="close" wire:click="closeModalTalent()" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Anda Yakin Akan Menghapus {{$talentName}}?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" wire:click="closeModalTalent()">Cancel</button>
                    <button wire:click="doDeleteTalent()" type="button" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>
    {{-- End Modal Delete Talent --}}
</div>
