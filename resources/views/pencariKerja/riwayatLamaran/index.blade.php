@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])
@section('title', 'Sertifikasi')
@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Sertifikasi'])
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card z-index-2 h-100">
                    <div class="card-header pb-0 pt-4 bg-transparent">
                        <h6 class="text-capitalize" style="margin-left: 15px">Lisensi & Sertifikasi</h6>
                    </div>
                    <div class="card-body p-3" style="margin-top: -15px">
                        <div class="row">
                            <div class="col">
                                <div class="card-body">
                                    @include('layouts.flash-message')
                                
                                    <div class="border border-light rounded-3 p-3">
                                    <table class="table table-bordered table-hover yajra-datatable" id="table">
                                        <thead>
                                            <tr>
                                                <th>NO</th>
                                                <th>Terkirim Pada</th>
                                                <th>Status</th>
                                                <th>Lowongan Kerja Id</th>
                                                <th>Pencari Kerja Id</th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>

    <!-- Modal Tambah -->
   

@endsection


@section('bottom-content')
    <script type="text/javascript">
        $(document).ready(function () {
            // datatable
            var table = $('.yajra-datatable').DataTable({
                processing: true,
                serverSide: true,
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/id.json',
                },
                ajax: "{{ route('riwayatLamaran.index') }}",
                columns: [
                    {data: 'Id', name: 'id'},
                    {data: 'terkirim_pada', name: 'terkirim_pada'},
                    {data: 'status', name: 'status'},
                    {data: 'lowongan_kerja_id', name: 'lowongan_kerja_id'},
                    {data: 'pencari_kerja_id', name: 'pencari_kerja_id'},
                    
                ]
            });

        });
    </script>
@endsection