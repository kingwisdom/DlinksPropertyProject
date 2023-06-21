<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <title>De-Links Property Limited</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Delinks Property Limited" name="keywords">
    <meta content="De-links Property Limited" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Oswald:wght@500;600;700&family=Pacifico&display=swap" rel="stylesheet"> 


  @include('partials.styles')
</head>
<body>
    
@include('partials.header')

<main class="container mt-5">
    @yield('content')
</main>

@include('partials.footer')

@include('partials.scripts')
      
</body>
</html>