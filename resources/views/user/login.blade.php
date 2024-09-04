<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>
  <link rel="shortcut icon" type="image/png" href="{{asset('template/assets/images/logos/Rs_logo.png')}}" />
  <link rel="stylesheet" href="{{asset('template/assets/css/styles.min.css')}}" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <link href="{{asset('template_user/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('template_user/css/style.css')}}" rel="stylesheet">

  <style>
    .app-header {
      border-bottom: 2px solid #eaeaea;
    }
    .btn-custom {
      background-color: #0463fa;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      text-decoration: none;
      display: inline-block;
    }
    .btn-custom:hover {
      background-color: #2078a8;
    }
    .sidebar-item.active > .sidebar-link,
    .sidebar-item > .sidebar-link:hover {
      background-color: #2aa8e6;
      color: #fff;
    }

    body, html {
      height: 100%;
      margin: 0;
    }

    .main-container {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .card {
      width: 100%;
      max-width: 400px;
      margin: 0 auto;
    }
  </style>
</head>

<body>
  <div class="main-container">
    <div class="card mx-auto">
      <div class="card-body">
        <div class="row">
          <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="/admin" class="text-nowrap logo-img">
              <h1 class="m-0 text-primary"><i class="far fa-hospital me-3"></i>RSWM</h1>
            </a>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
              <i class="ti ti-x fs-8"></i>
            </div>
          </div>
          <form id="login" action="{{url('login')}}" method="post" enctype="multipart/form-data" onsubmit="submitForm()">
            @csrf
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password">
            </div>
            <div>
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

</body>

</html>
