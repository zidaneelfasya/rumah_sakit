@extends('layout/main')

@section('breadcrumbs')
    <!-- You can add breadcrumbs here if needed -->
@endsection

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3>Detail Pasien</h3>
            </div>
            <div class="card-body">
                <a href="{{ url('admin/pasien') }}" class="btn btn-secondary btn-sm mb-3">
                    <i class="ti ti-arrow-left"></i> Kembali
                </a>
                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <td>{{ $pasien->id }}</td>
                    </tr>
                    <tr>
                        <th>Nama</th>
                        <td>{{ $pasien->nama }}</td>
                    </tr>
                    <tr>
                        <th>Tanggal Lahir</th>
                        <td>{{ $pasien->tanggal_lahir }}</td>
                    </tr>
                    <tr>
                        <th>NIK</th>
                        <td>{{ $pasien->NIK }}</td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td>{{ $pasien->alamat }}</td>
                    </tr>
                    <!-- Add more fields as needed -->
                </table>
                <a href="{{ url('admin/pasien/update/'. $pasien->id) }}" class="btn btn-warning btn-sm">
                    <i class="ti ti-edit-circle"></i> Edit
                </a>
                <a href="{{ url('admin/pasien/delete/'. $pasien->id) }}" class="btn btn-danger btn-sm" onclick="return confirmDelete()">
                    <i class="ti ti-trash"></i> Hapus
                </a>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3>Detail Rekam Medis</h3>
            </div>
            <div class="card-body">
                <a href="{{ url('admin/rekam') }}" class="btn btn-secondary btn-sm mb-3">
                    <i class="ti ti-arrow-left"></i> Kembali
                </a>
    
                <!-- Cek apakah pasien memiliki rekam medis -->
                @if($pasien->rekamMedis->isEmpty())
                    <p>Belum ada rekam medis untuk pasien ini.</p>
                @else
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tanggal Kunjungan</th>
                                <th>Diagnosa (DX)</th>
                                <th>Tindakan (TX)</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pasien->rekamMedis as $rekam_medis)
                                <tr>
                                    <td>{{ $rekam_medis->id }}</td>
                                    <td>{{ $rekam_medis->tanggal_kunjungan }}</td>
                                    <td>{{ $rekam_medis->dx }}</td>
                                    <td>{{ $rekam_medis->tx }}</td>
                                    <td>{{ $rekam_medis->keterangan }}</td>
                                    <td>
                                        <a href="{{ url('admin/rekam/' . $rekam_medis->id) }}" class="btn btn-primary btn-sm">
                                            <i class="ti ti-info-circle"></i>
                                        </a>
                                        <a href="{{ url('admin/rekam/update/'. $rekam_medis->id) }}" class="btn btn-warning btn-sm">
                                            <i class="ti ti-edit-circle"></i>
                                        </a>
                                        <a href="{{ url('admin/rekam/delete/'. $rekam_medis->id) }}" class="btn btn-danger btn-sm" onclick="return confirmDelete()">
                                            <i class="ti ti-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
    

    <script>
        function confirmDelete() {
            return confirm("Apakah Anda yakin ingin menghapus pasien ini?");
        }
    </script>
@endsection
