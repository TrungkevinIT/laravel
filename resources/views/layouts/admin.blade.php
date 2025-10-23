<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link href="{{ asset('/css/admin.css') }}" rel="stylesheet" />
<title>@yield('title', 'Admin - Online Store')</title>
</head>
<body>
<div class="row g-0">
    <div class="p-3 col-3 fixed text-white bg-dark">

        <a href="" class="text-white text-decoration-none">
            <span class="fs-4">Dashboard</span>
        </a>
        <hr />
        <ul class="nav flex-column">
            <li><a href="{{route('admin.home.index')}}" class="nav-link text-white">Admin - Home</a></li>
            <li><a href="{{route('admin.home.productsmanagement')}}" class="nav-link text-white">Admin - Products</a></li>
            <li>
                <a href="{{route('home.welcome')}}" class="mt-2 btn bg-primary text-white">Về Trang chủ</a>
            </li>
        </ul>
    </div>
    <div class="col content-grey">
        <nav class="p-3 shadow text-end">
            <span class="profile-font">Admin</span>
            <img class="img-profile rounded-circle" src="{{asset("/img/test.webp")}}" alt="xxx" style="height: 2rem; width: 2rem; object-fit: cover;">
        </nav>
        <div class="g-0 m-5">
            @yield('content')
        </div>
    </div>
</div>
<div class="copyright py-4 text-center text-white bg-dark admin-footer">
    <div class="container">
        <small>
            Copyright - <a class="text-reset fw-bold text-decoration-none" target="_blank" href=""> NDDuy - CKC </a>
        </small>
    </div>
</div>
<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
</script>
</body>
</html>