@extends('layout/main')

@section('breadcrumbs')

@endsection

@section('content')
<div class="container-fluid">
    <div class="container-fluid">
        <div class="card mx-auto"  style="width: 500px">
            <div class="card-body">
                <div class="row">
                    <form id="formUpdateRekamMedis" action="/admin/rekam/update/{{$rekamMedis->id}}/store" method="post" enctype="multipart/form-data" onsubmit="submitForm()">
                        @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label">Pasien</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{$rekamMedis->datapasien->nama}}" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="tanggal_kunjungan" class="form-label">Tanggal Kunjungan</label>
                            <input type="date" class="form-control" id="tanggal_kunjungan" name="tanggal_kunjungan" value="{{$rekamMedis->tanggal_kunjungan}}">
                        </div>
                        <div class="mb-3">
                            <label for="dx" class="form-label">Diagnosa</label>
                            <input type="text" class="form-control" id="dx" name="dx" value="{{$rekamMedis->dx}}">
                        </div>
                        <div class="mb-3">
                            <label for="tx" class="form-label">Tindakan</label>
                            <input type="text" class="form-control" id="tx" name="tx"value="{{$rekamMedis->tx}}">
                        </div>
                        <div class="mb-3">
                            <label for="keterangan" class="form-label">Keterangan</label>
                            <textarea class="form-control" id="keterangan" name="keterangan"></textarea>
                        </div>
                        <div>
                            <label class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <button type="submit" class="btn-custom">Submit</button>
                            </div>
                        </div>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>s
<script>
    $(document).ready(function() {
        $('#nama').select2({
            placeholder: "Pilih Pasien",
            allowClear: true
        });
    });
</script>
@endsection
