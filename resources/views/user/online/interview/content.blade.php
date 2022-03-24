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
                                    <h2 class = "info text-left">Wawancara Online</h2>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">Waktu Wawancara</th>
                                                    <th class="text-center">Link Wawancara</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>{{date('d-M-Y' ,strtotime(Auth::user()->interviewDate))}}</td>
                                                    <td><a href="{{Auth::user()->interviewLink}}" target = "_blank">{{Auth::user()->interviewLink}}</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <h2 class = "info text-left">Aturan Wawancara</h2>
                                    <h4 class="text-justify">1. Aturan Satu</h4>
                                    <h4 class="text-justify">2. Aturan Dua</h4>
                                    <h4 class="text-justify">3. Aturan Tiga</h4>
                                    <h4 class="text-justify">4. Aturan Empat</h4>
                                    <h4 class="text-justify">5. Aturan Lima</h4>
                                    <br>

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