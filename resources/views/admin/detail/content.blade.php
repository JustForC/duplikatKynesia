<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Detail Pendaftar</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Detail {{$biodata->name}}
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Biodata -->
            <section id="content-types">
                <div class="row match-height">
                    <div class="col-xl">
                        <div class="card">
                            <div class="card-header mb-1">
                                <h4 class="card-title">Data Diri</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <p class="card-text">Nama : {{$biodata->name}}</p>
                                    <p class="card-text">Panggilan : {{$biodata->nickname}}</p>
                                    <p class="card-text">Jenis Kelamin : {{$biodata->gender}}</p>
                                    <p class="card-text">Tempat, Tanggal Lahir : {{$biodata->birthplace}}, {{$biodata->birthdate}}</p>
                                    <p class="card-text">Telephone : {{$biodata->telephone}}</p>
                                    <p class="card-text">Email : {{$biodata->email}}</p>
                                    <p class="card-text">Kartu Identitas & Nomor Identitas : {{$biodata->idType}} ({{$biodata->idNumber}})</p>
                                    <p class="card-text">Alamat : {{$biodata->address}} Kecamatan {{$biodata->district}}, {{$biodata->city}} {{$biodata->province}} ({{$biodata->code}})</p>
                                    <p class="card-text">Alamat Tinggal : {{$biodata->addressLiving}} Kecamatan {{$biodata->districtLiving}}, {{$biodata->cityLiving}} {{$biodata->provinceLiving}} ({{$biodata->codeLiving}})</p>
                                </div>
                            </div>
                            <div class="card-footer text-muted">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Biodata -->

            <!-- Universitas -->
            <section id="content-types">
                <div class="row match-height">
                    <div class="col-xl">
                        <div class="card">
                            <div class="card-header mb-1">
                                <h4 class="card-title">Universitas Diterima</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <p class="card-text">Universitas : {{$university->name}}</p>
                                    <p class="card-text">Jurusan : {{$university->major}}</p>
                                    <p class="card-text">Jalur Masuk : {{$university->entranceType}}</p>
                                    <p class="card-text">Nomor Ujian : {{$university->entranceNumber}}</p>
                                </div>
                            </div>
                            <div class="card-footer text-muted">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Universitas -->

            <!-- Media Social -->
            <section id="content-types">
                <div class="row match-height">
                    <div class="col-xl">
                        <div class="card">
                            <div class="card-header mb-1">
                                <h4 class="card-title">Social Media</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <p class="card-text">Facebook : {{$socialMedia->facebook}}</p>
                                    <p class="card-text">Twitter :  {{$socialMedia->twitter}}</p>
                                    <p class="card-text">Instagram : {{$socialMedia->instagram}}</p>
                                    <p class="card-text">Tiktok : {{$socialMedia->tiktok}}</p>
                                </div>
                            </div>
                            <div class="card-footer text-muted">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Media Social -->

            <!-- Keluarga -->
            <section id="content-types">
                <div class="row match-height">
                    <div class="col-xl">
                        <div class="card">
                            <div class="card-header mb-1">
                                <h4 class="card-title">Data Keluarga</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="accordion" id="accordionFamily" data-toggle-hover="true">
                                        @foreach($families as $family)
                                        <div class="collapse-margin">
                                            <div class="card-header" id="headingFamily{{$family->id}}" data-toggle="collapse" role="button" data-target="#collapseFamily{{$family->id}}" aria-expanded="false" aria-controls="collapseFamily{{$family->id}}">
                                                <span class="lead collapse-title collapsed">
                                                    {{$family->name}}
                                                </span>
                                            </div>

                                            <div id="collapseFamily{{$family->id}}" class="collapse" aria-labelledby="headingFamily{{$family->id}}" data-parent="#accordionFamily">
                                                <div class="card-body">
                                                    <p class="card-text">Posisi : {{$family->status}}</p>
                                                    <p class="card-text">Tempat, Tanggal Lahir : {{$family->birthplace}}, {{$family->birthdate}}</p>
                                                    @if($family->status == "Children")
                                                    <p class="card-text">Jenis Kelamin : {{$family->gender}}</p>
                                                    @endif
                                                    <p class="card-text">Pendidikan Terakhir : {{$family->education}}</p>
                                                    <p class="card-text">Pekerjaan : {{$family->job}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    <br>
                                    <p class="card-title">Penghasilan Orangtua : {{$networth->networth}}</p>
                                </div>
                            </div>
                            <div class="card-footer text-muted">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Keluarga -->

            <!-- Pendidikan -->
            <section id="content-types">
                <div class="row match-height">
                    <div class="col-xl">
                        <div class="card">
                            <div class="card-header mb-1">
                                <h4 class="card-title">Data Pendidikan</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="accordion" id="accordionEducation" data-toggle-hover="true">
                                        @foreach($educations as $education)
                                        <div class="collapse-margin">
                                            <div class="card-header" id="headingEducation{{$education->id}}" data-toggle="collapse" role="button" data-target="#collapseEducation{{$education->id}}" aria-expanded="false" aria-controls="collapseEducation{{$education->id}}">
                                                <span class="lead collapse-title collapsed">
                                                    {{$education->level}}
                                                </span>
                                            </div>

                                            <div id="collapseEducation{{$education->id}}" class="collapse" aria-labelledby="headingEducation{{$education->id}}" data-parent="#accordionEducation">
                                                <div class="card-body">
                                                    <p class="card-text">Nama Sekolah : {{$education->name}}</p>
                                                    <p class="card-text">Kota : {{$education->city}}</p>
                                                    <p class="card-text">Provinsi : {{$education->province}}</p>
                                                    @if($education->level == "SMA")
                                                    <p class="card-text">Jurusan : {{$education->major}}</p>
                                                    @endif
                                                    <p class="card-text">Tahun Masuk : {{$education->enter}}</p>
                                                    <p class="card-text">Tahun Lulus : {{$education->graduate}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-muted">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Pendidikan -->

            <!-- Pelatihan -->
            <section id="content-types">
                <div class="row match-height">
                    <div class="col-xl">
                        <div class="card">
                            <div class="card-header mb-1">
                                <h4 class="card-title">Pendidikan Non-Formal</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="accordion" id="accordionTraining" data-toggle-hover="true">
                                        @foreach($trainings as $training)
                                        <div class="collapse-margin">
                                            <div class="card-header" id="headingTraining{{$training->id}}" data-toggle="collapse" role="button" data-target="#collapseTraining{{$training->id}}" aria-expanded="false" aria-controls="collapseTraining{{$training->id}}">
                                                <span class="lead collapse-title collapsed">
                                                    {{$training->name}}
                                                </span>
                                            </div>

                                            <div id="collapseTraining{{$training->id}}" class="collapse" aria-labelledby="headingTraining{{$training->id}}" data-parent="#accordionTraining">
                                                <div class="card-body">
                                                    <p class="card-text">Penyelenggara : {{$training->organizer}}</p>
                                                    <p class="card-text">Tahun Diselenggarakan : {{$training->year}}</p>
                                                    <p class="card-text">Lama Pendidikan : {{$training->period}}</p>
                                                    <p class="card-text">Sertifikat : {{$training->certificate}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-muted">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Pelatihan -->

            <!-- Prestasi -->
            <section id="content-types">
                <div class="row match-height">
                    <div class="col-xl">
                        <div class="card">
                            <div class="card-header mb-1">
                                <h4 class="card-title">Prestasi</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="accordion" id="accordionAchievement" data-toggle-hover="true">
                                        @foreach($achievements as $achievement)
                                        <div class="collapse-margin">
                                            <div class="card-header" id="headingAchievement{{$achievement->id}}" data-toggle="collapse" role="button" data-target="#collapseAchievement{{$achievement->id}}" aria-expanded="false" aria-controls="collapseAchievement{{$achievement->id}}">
                                                <span class="lead collapse-title collapsed">
                                                    {{$achievement->name}}
                                                </span>
                                            </div>

                                            <div id="collapseAchievement{{$achievement->id}}" class="collapse" aria-labelledby="headingAchievement{{$achievement->id}}" data-parent="#accordionAchievement">
                                                <div class="card-body">
                                                    <p class="card-text">Penyelenggara : {{$achievement->organizer}}</p>
                                                    <p class="card-text">Tingkatan : {{$achievement->level}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-muted">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Prestasi -->

            <!-- Organisasi -->
            <section id="content-types">
                <div class="row match-height">
                    <div class="col-xl">
                        <div class="card">
                            <div class="card-header mb-1">
                                <h4 class="card-title">Riwayat Organisasi</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="accordion" id="accordionOrganization" data-toggle-hover="true">
                                        @foreach($organizations as $organization)
                                        <div class="collapse-margin">
                                            <div class="card-header" id="headingOrganization{{$organization->id}}" data-toggle="collapse" role="button" data-target="#collapseOrganization{{$organization->id}}" aria-expanded="false" aria-controls="collapseOrganization{{$organization->id}}">
                                                <span class="lead collapse-title collapsed">
                                                    {{$organization->name}}
                                                </span>
                                            </div>

                                            <div id="collapseOrganization{{$organization->id}}" class="collapse" aria-labelledby="headingOrganization{{$organization->id}}" data-parent="#accordionOrganization">
                                                <div class="card-body">
                                                    <p class="card-text">Periode Mengurus : {{$organization->period}}</p>
                                                    <p class="card-text">Posisi Mengurus : {{$organization->position}}</p>
                                                    <p class="card-text">Keterangan : {{$organization->description}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-muted">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Organisasi -->

            <!-- Bahasa -->
            <section id="content-types">
                <div class="row match-height">
                    <div class="col-xl">
                        <div class="card">
                            <div class="card-header mb-1">
                                <h4 class="card-title">Kemampuan Bahasa Asing</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="accordion" id="accordionLanguage" data-toggle-hover="true">
                                        @foreach($languages as $language)
                                        <div class="collapse-margin">
                                            <div class="card-header" id="headingLanguage{{$language->id}}" data-toggle="collapse" role="button" data-target="#collapseLanguage{{$language->id}}" aria-expanded="false" aria-controls="collapseLanguage{{$language->id}}">
                                                <span class="lead collapse-title collapsed">
                                                    {{$language->language}}
                                                </span>
                                            </div>

                                            <div id="collapseLanguage{{$language->id}}" class="collapse" aria-labelledby="headingLanguage{{$language->id}}" data-parent="#accordionLanguage">
                                                <div class="card-body">
                                                    <p class="card-text">Kemampuan Membaca : {{$language->read}}</p>
                                                    <p class="card-text">Kemampuan Menulis : {{$language->write}}</p>
                                                    <p class="card-text">Kemampuan Mendengar : {{$language->listen}}</p>
                                                    <p class="card-text">Kemampuan Berbicara : {{$language->talk}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-muted">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Bahasa -->

            <!-- Bakat -->
            <section id="content-types">
                <div class="row match-height">
                    <div class="col-xl">
                        <div class="card">
                            <div class="card-header mb-1">
                                <h4 class="card-title">Bakat</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    @foreach($talents as $talent)
                                    <p class="card-text">{{$talent->name}}</p>
                                    @endforeach
                                </div>
                            </div>
                            <div class="card-footer text-muted">
                                <span class="float-left">3 hours ago</span>
                                <span class="float-right">
                                    <a href="#" class="card-link">Read More <i class="fa fa-angle-right"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Bakat -->

            <!-- Downloadable -->
            <section id="content-types">
                <div class="row match-height">
                    <div class="col-xl">
                        <div class="card">
                            <div class="card-header mb-1">
                                <h4 class="card-title">Dokumen Tambahan</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <img class="img-fluid" src="{{ asset($downloadable->identityPath) }}">
                                        </div>
                                        <div class="col-xl-6">
                                            <embed src="{{ asset($downloadable->graduationPath) }}" width=100% height=100%>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <img class="img-fluid" src="{{ asset($downloadable->universityPath) }}">
                                        </div>
                                        <div class="col-xl-6">
                                            <embed src="{{ asset($downloadable->motivationPath) }}" width=100% height=100%>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-muted">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Downloadable -->
        </div>
        </div>
    </div>
</div>