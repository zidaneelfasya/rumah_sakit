@extends('layout/main')

@section('breadcrumbs')

@endsection

@section('content')
<div class="container-fluid">
    <div class="container-fluid">
        <div class="card mx-auto"  style="width: 500px" >
            <div class="card-body">
                <div class="row">
                    
                        <form id="formAddPost" action="{{url('/admin/users/formadd/process')}}" method="post" enctype="multipart/form-data" onsubmit="submitForm()">
                            @csrf
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama">
                                
                            </div>
                            <div class="mb-3">
                                <label for="nim" class="form-label">NIM</label>
                                <input type="number" class="form-control" id="nim" name="nim">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                              </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <div>
                                <label for="role" class="form-label">Role</label>
                                <select class="form-control" aria-label=".form-select-lg example" name="role">
                                <option selected>Pilih Role</option>
                                <option value="1">Admin</option>
                                <option value="2">Staff Muda</option>
                            </select>
                            </div>
                            <div>
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Submit</button>
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
