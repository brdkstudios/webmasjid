<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Masjid</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
@extends('layouts.app')
@section('content')

<section class="w-full px-8 py-4">

   <!-- Judul -->
   <div class="w-full grid gap-4 mb-8 py-2">
      <div class="text-3xl font-semibold h-8 text-wrap">Kontak</div>
      <div>Setiap kontribusi sangat berarti bagi kami. Terima kasih kepada semua pihak yang telah berkontribusi.</div>
   </div>

   <!-- daftar kontak -->
   
   <div class="grid grid-cols-4 gap-4 justify-items-center w-full">

    <div class="w-72 h-72 rounded-lg border-solid border-2 border-gray-300 grid justify-center justify-items-center py-5">
    <img src="{{ asset('images/avatar/1.png') }}" alt="Logo" class="w-20 h-20 rounded-full">
      <div class="text-center grid">
        <p class="font-semibold text-xl">Ferry Siswanto</p>
        <p>Ketua DKM</p>
        <p>Usaroyum@gmail.com</p>
      </div>
      <a href=""><div class="bg-sky-500 hover:bg-sky-800 py-2 px-3 rounded-md text-white font-semibold mt-2">Hubungi via WhatsApp</div></a>
    </div>

    <div class="w-72 h-72 rounded-lg border-solid border-2 border-gray-300 grid justify-center justify-items-center py-5">
    <img src="{{ asset('images/avatar/1.png') }}" alt="Logo" class="w-20 h-20 rounded-full">
      <div class="text-center grid">
        <p class="font-semibold text-xl">Ferry Siswanto</p>
        <p>Ketua DKM</p>
        <p>Usaroyum@gmail.com</p>
      </div>
      <a href=""><div class="bg-sky-500 hover:bg-sky-800 py-2 px-3 rounded-md text-white font-semibold mt-2">Hubungi via WhatsApp</div></a>
    </div>

    <div class="w-72 h-72 rounded-lg border-solid border-2 border-gray-300 grid justify-center justify-items-center py-5">
    <img src="{{ asset('images/avatar/1.png') }}" alt="Logo" class="w-20 h-20 rounded-full">
      <div class="text-center grid">
        <p class="font-semibold text-xl">Ferry Siswanto</p>
        <p>Ketua DKM</p>
        <p>Usaroyum@gmail.com</p>
      </div>
      <a href=""><div class="bg-sky-500 hover:bg-sky-800 py-2 px-3 rounded-md text-white font-semibold mt-2">Hubungi via WhatsApp</div></a>
    </div>

    <div class="w-72 h-72 rounded-lg border-solid border-2 border-gray-300 grid justify-center justify-items-center py-5">
    <img src="{{ asset('images/avatar/1.png') }}" alt="Logo" class="w-20 h-20 rounded-full">
      <div class="text-center grid">
        <p class="font-semibold text-xl">Ferry Siswanto</p>
        <p>Ketua DKM</p>
        <p>Usaroyum@gmail.com</p>
      </div>
      <a href=""><div class="bg-sky-500 hover:bg-sky-800 py-2 px-3 rounded-md text-white font-semibold mt-2">Hubungi via WhatsApp</div></a>
    </div>

    <div class="w-72 h-72 rounded-lg border-solid border-2 border-gray-300 grid justify-center justify-items-center py-5">
    <img src="{{ asset('images/avatar/1.png') }}" alt="Logo" class="w-20 h-20 rounded-full">
      <div class="text-center grid">
        <p class="font-semibold text-xl">Ferry Siswanto</p>
        <p>Ketua DKM</p>
        <p>Usaroyum@gmail.com</p>
      </div>
      <a href=""><div class="bg-sky-500 hover:bg-sky-800 py-2 px-3 rounded-md text-white font-semibold mt-2">Hubungi via WhatsApp</div></a>
    </div>

   </div>

</section>

@endsection


</body>
</html>