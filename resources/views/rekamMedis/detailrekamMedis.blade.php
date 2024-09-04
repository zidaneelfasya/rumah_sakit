@extends('layout/main')

@section('breadcrumbs')
    <!-- You can add breadcrumbs here if needed -->
@endsection

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3>Detail Rekam Medis</h3>
            </div>
            <div class="card-body">
                <a href="{{ url('admin/rekam') }}" class="btn btn-secondary btn-sm mb-3">
                    <i class="ti ti-arrow-left"></i> Kembali
                </a>
                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <td>{{ $rekam_medis->id }}</td>
                    </tr>
                    <tr>
                        <th>Nama Pasien</th>
                        <td>{{ $rekam_medis->datapasien->nama }}</td>
                    </tr>
                    <tr>
                        <th>Tanggal Kunjungan</th>
                        <td>{{ $rekam_medis->tanggal_kunjungan }}</td>
                    </tr>
                    <tr>
                        <th>Diagnosa (DX)</th>
                        <td>{{ $rekam_medis->dx }}</td>
                    </tr>
                    <tr>
                        <th>Tindakan (TX)</th>
                        <td>{{ $rekam_medis->tx }}</td>
                    </tr>
                    <tr>
                        <th>Keterangan</th>
                        <td>{{ $rekam_medis->keterangan }}</td>
                    </tr>
                    <!-- Add more fields as needed -->
                </table>
                <a href="{{ url('admin/rekam/update/'. $rekam_medis->id) }}" class="btn btn-warning btn-sm">
                    <i class="ti ti-edit-circle"></i> Edit
                </a>
                <a href="{{ url('admin/rekam/delete/'. $rekam_medis->id) }}" class="btn btn-danger btn-sm" onclick="return confirmDelete()">
                    <i class="ti ti-trash"></i> Hapus
                </a>
            </div>
        </div>
    </div>
    <script>
        function confirmDelete() {
            return confirm("Apakah Anda yakin ingin menghapus rekam medis ini?");
        }
    </script>
@endsection
