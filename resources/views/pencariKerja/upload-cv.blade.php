@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])
@section('title', 'Profil Pencari Kerja')
@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Profil Pencari Kerja'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-3 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                                    <h5 class="text-white" style="line-height: 2.2">1</h5>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="numbers">
                                    <p class="text-sm mb-0 font-weight-bold" style="margin-left: 10px; line-height: 3">
                                        Lengkapi Biodata
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-3 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                                    <h5 class="text-white" style="line-height: 2.2">
                                        2
                                    </h5>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="numbers">
                                    <p class="text-sm mb-0 font-weight-bold" style="margin-left: 10px;">
                                        Unggah Foto Profil
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-3 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                                    <h5 class="text-white" style="line-height: 2.2">
                                        3
                                    </h5>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="numbers">
                                    <p class="text-sm mb-0 font-weight-bold" style="margin-left: 10px; line-height: 3">
                                        Sertifikasi
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-3 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                                    <h5 class="text-white" style="line-height: 2.2">
                                        4
                                    </h5>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="numbers">
                                    <p class="text-sm mb-0 font-weight-bold" style="margin-left: 10px; ">
                                        Unggah Daftar Riwayat Hidup
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card z-index-2 h-100">
                    <div class="card-header pb-0 pt-4 bg-transparent">
                        <h6 class="text-capitalize" style="margin-left: 15px">Unggah Daftar Riwayat Hidup</h6>
                    </div>
                    <div class="card-body p-3" style="margin-top: -15px">
                        <div class="row">
                            <div class="col">
                                <form role="form" method="POST" action={{ route('SE.store') }} enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <input type="file" name="foto" accept="image/png, image/jpeg">
                                        </div>
                                        {{-- <div class="input-group">
                                            <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                            <button class="btn btn-primary" type="button" id="inputGroupFileAddon04">Button</button>
                                        </div> --}}
                                        <div class="p-3">
                                            <p>Catatan :</p>
                                            <p>Resume CV yang sudah diunggah dapat diakses oleh semua perusahaan yang telah dilamar</p>
                                            <p class="text-secondary"><i>Unggah CV dalam bentuk <b class="text-danger">PDF (Maksimal 3 mb)</b></i></p>
                                            <p>Catatan :</p>
                                    </div>
                                    <div class="card-footer pb-0">
                                        <div class="d-flex align-items-center">
                                            <button type="submit" class="btn btn-primary btn-lg ms-auto" style="margin-right: -22px">Selanjutnya 
                                                <i class="fa fa-forward" style="font-size: 15px; margin-left: 5px"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection