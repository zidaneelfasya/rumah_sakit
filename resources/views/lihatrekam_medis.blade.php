@extends('layout/main')

@section('breadcrumbs')

@endsection

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <a href="{{ url('') }}" class="btn btn-success btn-sm">
                    <i class="ti ti-plus"></i>
                </a>
                <br>
                <br>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>Nama Pasien</th>
                                <th>Tanggal Kunjungan</th>
                                <th>Diagnosa (DX)</th>
                                <th>Tindakan (TX)</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($rekam_medis as $rm)
                                <tr>
                                    <td>{{ $rm->id }}</td>
                                    <td>{{ $rm->datapasien->nama }}</td>
                                    <td>{{ $rm->tanggal_kunjungan }}</td>
                                    <td>{{ $rm->dx }}</td>
                                    <td>{{ $rm->tx }}</td>
                                    <td>{{ $rm->keterangan }}</td>
                                    <td class="text-center">
                                        <a href="{{ url('admin/posts/' . $rm->id) }}" class="btn btn-primary btn-sm">
                                            <i class="ti ti-info-circle"></i>
                                        </a>
                                        <a href="{{ url('admin/posts/formupdate/'. $rm->id)  }}" class="btn btn-warning btn-sm">
                                            <i class="ti ti-edit-circle"></i>
                                        </a>
                                        <a href="{{ url('admin/posts/formdelete/'. $rm->id) }}" class="btn btn-danger btn-sm"  onclick="return confirmDelete()">
                                            <i class="ti ti-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        function confirmDelete() {
            var confirmation = confirm("Apakah Anda yakin ingin menghapus post ini?");
            return confirmation;
        }
    </script>
@endsection
