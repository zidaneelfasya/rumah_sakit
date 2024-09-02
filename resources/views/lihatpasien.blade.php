@extends('layout/main')

@section('breadcrumbs')

@endsection

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <a href="{{ url('admin/pasien/form') }}" class="btn btn-success btn-sm">
                    <i class="ti ti-plus"></i>
                </a>
                <br>
                <br>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Tanggal Lahir</th>
                                <th>NIK</th>
                                <th>Alamat</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pasien as $p)
                                <tr>
                                    <td>{{ $p->id }}</td>
                                    <td>{{ $p->nama }}</td>
                                    <td>{{ $p->tanggal_lahir }}</td>
                                    <td>{{ $p->NIK }}</td>
                                    <td>{{ $p->alamat }}</td>
                                    <td class="text-center">
                                        <a href="{{ url('admin/posts/' . $p->id) }}" class="btn btn-primary btn-sm">
                                            <i class="ti ti-info-circle"></i>
                                        </a>
                                        <a href="{{ url('admin/posts/formupdate/'. $p->id)  }}" class="btn btn-warning btn-sm">
                                            <i class="ti ti-edit-circle"></i>
                                        </a>
                                        <a href="{{ url('admin/posts/formdelete/'. $p->id) }}" class="btn btn-danger btn-sm"  onclick="return confirmDelete()">
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
