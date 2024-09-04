@extends('layout/main')

@section('breadcrumbs')

@endsection

@section('content')
<div class="container-fluid">
    <div class="container-fluid">
        <div class="card mx-auto"  style="width: 500px" >
            <div class="card-body">
                <div class="row">
                    
                        <form id="formAddPasien" action="{{url('/admin/pasien/add/store')}}" method="post" enctype="multipart/form-data" onsubmit="submitForm()">
                            @csrf
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama">
                                
                            </div>
                            <div class="mb-3">
                                <label for="NIK" class="form-label">NIK</label>
                                <input type="number" class="form-control" id="NIK" name="NIK">
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat">
                            </div>
                            <div class="mb-3">
                                <label for="tlahir" class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="tlahir" name="tlahir">
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

</div>

    
<script>
</script>
@endsection
