@extends('layouts.main')

@section ('container')
<h1><?= $nama;?></h1>
    <p><?=$Nim?></p>
    <img src="img/<?= $image;?>" alt="<?= $nama;?>" width="150" class="img-thumbnail rounded-circle">
  </main>
  <footer class="mt-auto text-white-50">
    <p>Cover template for <a href="https://getbootstrap.com/" class="text-white">Bootstrap</a>, by <a href="https://twitter.com/mdo" class="text-white">@mdo</a>.</p>
  </footer>
@endsection