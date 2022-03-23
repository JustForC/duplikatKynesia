<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Online Interview</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Online
                                </li>
                                <li class="breadcrumb-item"><a href="{{route('user.interview')}}">Interview</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <section id="content-types">
                <div class="row match-height">
                    <div class="col-xl">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <h2 class = "info text-left">Selamat Datang di Portal Pendaftaran Kynesia Scholarship!</h2>
                                    <h4 class="text-justify">Portal pendaftaran berisikan dua buah tahapan pendaftaran beasiswa yang perlu dilalui oleh pendaftar. Tahap pertama berisikan pengisian formulir administrasi dan tes online. Tahap kedua berisikan wawancara online. Pada tahap pertama pendaftar diminta untuk mengisi form administrasi yang dapat diakses melalui menu navigasi yang ada pada portal. Jika sudah, dapat dilanjut dengan mengikuti tes online. Setelah menyelesaikan tahap pertama pendaftar akan diseleksi untuk memasuki tahap dua. Hasil seleksi dapat dilihat pada status pendaftaran yang ada pada halaman home portal pendaftaran. Selanjutnya jika pendaftar lolos tahap pertama, pendaftaran dapat mengikuti tahap dua yaitu wawancara online. Selanjutnya pendaftar akan diseleksi kembali untuk menjadi penerima beasiswa.</h4>
                                    <br>
                                    <h2 class = "info text-left">Timeline Pendaftaran</h2>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">Timeline Kegiatan</th>
                                                    <th class="text-center">Waktu</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Pendaftaran Beasiswa (Administrasi dan Tes Online)</td>
                                                    <td>03-Jan-2022 s/d 14-Jan-2022</td>
                                                </tr>
                                                <tr>
                                                    <td>Pengumuman Beasiswa Tahap 1 (Adminisrasi dan Tes Online)</td>
                                                    <td>15-Jan-2022</td>
                                                </tr>
                                                <tr>
                                                    <td>Proses Seleksi Tahap 2 (Wawancara Online)</td>
                                                    <td>16-Jan-2022 s/d 23-Jan-2022</td>
                                                </tr>
                                                <tr>
                                                    <td>Pengumuman Penerima Beasiswa</td>
                                                    <td>24-Jan-2022</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <br>
                                    <h2 class = "info text-left">Status Pendaftaran</h2>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">Tahap Seleksi</th>
                                                    <th class="text-center">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Status 1</td>
                                                    <td>{{Auth::user()->statusOne}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Status 2</td>
                                                    @if(Auth::user()->statusTwo == NULL)
                                                    <td>-</td>
                                                    @elseif(Auth::user()->statusTwo != NULL)
                                                    <td>{{Auth::user()->statusTwo}}</td>
                                                    @endif
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
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
    </div>
</div>