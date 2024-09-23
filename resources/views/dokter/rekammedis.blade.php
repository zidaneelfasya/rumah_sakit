@extends('layout/main_user')

@section('breadcrumbs')

@endsection

@section('content')
<div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s" >
    <div class="bg-light rounded h-100 d-flex align-items-center p-5">
        <form>
            <div class="row g-3">
                <div class="col-12 col-sm-6">
                    <input type="text" class="form-control border-0" placeholder="Nama" style="height: 55px;">
                </div>
                <div class="col-12 col-sm-6">
                    <input type="email" class="form-control border-0" placeholder="Email" style="height: 55px;">
                </div>
                <div class="col-12 col-sm-6">
                    <input type="text" class="form-control border-0" placeholder="Nomor Telepon" style="height: 55px;">
                </div>
                
                <div class="col-12 col-sm-6">
                    <div class="date" id="date" data-target-input="nearest">
                        <input type="text"
                            class="form-control border-0 datetimepicker-input"
                            placeholder="Choose Date" data-target="#date" data-toggle="datetimepicker" style="height: 55px;">
                    </div>
                </div>
                
                <div class="col-12">
                    <textarea class="form-control border-0" rows="5" placeholder="Describe your problem"></textarea>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary w-100 py-3" type="submit">Book Appointment</button>
                </div>
            </div>
        </form>
    </div>
</div>
    
<script>
</script>
@endsection
