<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Eka Blog | {{$judul}}</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/cover/">

    

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="/css/cover.css" rel="stylesheet">
  </head>
  <body class="d-flex h-100 text-center text-white bg-dark">
    
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div>
      <h3 class="float-md-start mb-0">Eka | Tugas Web</h3>
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link {{($judul == 'Dashboard')? 'active' : ''}}" href="/dashboard">Home</a>
        <a class="nav-link {{($judul == 'Blog')? 'active' : ''}}" href="/blog">Blog</a>
        <a class="nav-link {{($judul == 'About')? 'active' : ''}}" href="/about">About</a>
        <a class="nav-link {{($judul == 'About')? 'active' : ''}}" href="/mainPage">Main Page</a>
      </nav>
    </div>
  </header>
  <main class="px-3">
        @yield('container')
    </main>


    
  </body>
</html>
