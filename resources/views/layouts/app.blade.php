<!doctype html>
<html lang="en">
<head>
 <meta charset="utf-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1" />
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
       rel="stylesheet" crossorigin="anonymous" />
 <title>@yield('title')</title>
</head>
<body>
 <nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-4">
   <div class="container">
     <a class="navbar-brand" href="{{ route('home.welcome') }}">Online Store</a>
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
             data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
             aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
       <div class="navbar-nav ms-auto">
         <a class="nav-link active" href="{{ route('home.welcome') }}">Home</a>
         <a class="nav-link active" href="{{ route('products.index') }}">Products</a>
         <a class="nav-link active" href="{{ route('home.about') }}">About</a>
         
       </div>
     </div>
   </div>
 </nav>
 <header class="masthead bg-success text-white text-center py-4">
   <div class="container d-flex align-items-center flex-column">
     <h2>@yield('subtitle')</h2>
   </div>
 </header>
 <div class="container my-4">
   @yield('content')
 </div>
 <div class="copyright py-4 text-center text-white bg-dark">
   <div class="container">
     <small>Copyright - <b>Online Store</b></small>
   </div>
 </div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
         crossorigin="anonymous"></script>
</body>
</html>
