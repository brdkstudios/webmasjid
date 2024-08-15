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

<section class="relative full-width" style="height: 80svh;">

<div class="w-full bg-[url('./images/background/background.png')] bg-no-repeat bg-cover" style="height: 55%;">

<!-- card -->

<div class="grid gap-2 bg-white w-10/12 h-64 absolute shadow-md rounded-md left-1/2 transform -translate-x-1/2 p-5 bottom-1/4">

    <div class="w-full h-full flex gap-3">
     
    <div class="w-32"></div>
    <div class="w-2/3 bg-red-100">
    <p class="text-base font-semibold text-center w-fit">23 November 2024</p>
    </div>

    <div class="w-full">
        <div class="w-full grid grid-flow-col auto-cols-max gap-1 opacity-80 h-full items-center rounded-md bg-red-100">
                <p class="text-base font-semibold px-4 w-28 text-center">FAJR </p>
                <p class="text-base font-semibold px-4 w-28 text-center">SUBUH</p>
                <p class="text-base font-semibold px-4 w-28 text-center">DZUHUR</p>
                <p class="text-base font-semibold px-4 w-28 text-center">ASHAR</p>
                <p class="text-base font-semibold px-4 w-28 text-center">MAGHRIB</p>
                <p class="text-base font-semibold px-4 w-28 text-center">ISYA</p>
                </div>
    </div>
    <div class="w-full flex items-center bg-green-100">
        <p class="text-xl font-semibold">Total Saldo Infaq</p>
    </div>

    </div>

    <div class="w-full h-full flex gap-3">
     
    <div class="w-2/3 flex items-center justify-center bg-blue-100">
    <div class="grid gap-3 justify-center w-full">
    <div class="flex items-center gap-5">
            <div class="relatif flex">
            <div class="relative flex justify-center">
            <div class="animate-ping absolute w-5 h-5 rounded-full bg-green-300 opacity-50"></div>
            <div class="w-3 h-3 rounded-full bg-green-600 mt-1"></div>
            </div>
            </div>
                <p class="text-base font-semibold text-center w-fit">23 November 2024</p>
    </div>

    <div class="flex items-center gap-5">
    <div class="relatif flex">
            <div class="relative flex justify-center">
            <div class="absolute w-5 h-5 rounded-full"></div>
            <div class="w-3 h-3 rounded-full"></div>
            </div>
            </div>
                <p class="text-base font-regular text-center w-full">23 November 2024</p>
    </div>

    </div>
    
    </div>
    <div class="grid gap-2 w-full">
        <div class="bg-orange-100 w-max grid grid-flow-col auto-cols-max gap-1 h-full items-center rounded-md">
                <p class="text-base font-medium px-4 w-28 text-center">04:30</p>
                <p class="text-base font-medium px-4 w-28 text-center">04:30</p>
                <p class="text-base font-medium px-4 w-28 text-center">04:30</p>
                <p class="text-base font-medium px-4 w-28 text-center">04:30</p>
                <p class="text-base font-medium px-4 w-28 text-center">04:30</p>
                <p class="text-base font-medium px-4 w-28 text-center">04:30</p>
                </div>

                <div class="bg-orange-100 w-max grid grid-flow-col auto-cols-max gap-1 h-full items-center rounded-md">
                <p class="text-base font-medium px-4 w-28 text-center">04:30</p>
                <p class="text-base font-medium px-4 w-28 text-center">04:30</p>
                <p class="text-base font-medium px-4 w-28 text-center">04:30</p>
                <p class="text-base font-medium px-4 w-28 text-center">04:30</p>
                <p class="text-base font-medium px-4 w-28 text-center">04:30</p>
                <p class="text-base font-medium px-4 w-28 text-center">04:30</p>
                </div>
    </div>
    <div class="w-2/3">
        <!-- total saldo infaq -->
        <div class="bg-red-100 h-full rounded-md flex items-center justify-end px-4 bg-[url('../images/background/vector.svg')] bg-no-repeat bg-cover bg-bottom">
                    <div class="flex gap-1 text-2xl font-semibold">
                        <p>Rp</p>
                        <p>800.000.000.000</p>
                        </div>
                    
                </div>
    </div>

    </div>

    <div class="w-full h-full flex gap-3">
     
     <div class="bg-green-50 w-full flex gap-1 rounded-lg">
        <div class="flex items-center gap-3 h-full">
            <div class="bg-[url('../images/background/location_on.svg')] bg-no-repeat w-6 h-6"></div>
            <div class="text-lg">Jl. Gajah Raya, Sambirejo, Kec. Gayamsari, Kota Semarang.</div>
        </div>
        <div class="flex items-center gap-1 h-full">
            <div class="bg-[url('../images/background/map.svg')] bg-no-repeat w-6 h-6"></div>
            <a href="https://maps.app.goo.gl/53rhuidmmsqUUy2U9" target="_blank" class="font-semibold text-green-600 hover:text-green-800 text-lg">Buka Maps</a>
        </div>        
     </div>
     <div class="bg-blue-100 w-2/4 rounded-lg">
     <div class="flex items-center w-full h-full pl-4 gap-3">
                    <img src="{{ asset('images/avatar/1.png') }}" alt="Logo" class="w-14 h-14 rounded-full">
                    <div class="grid">
                    <p class="text-xl font-semibold truncate">Ferry Siswanto</p>
                    <p class="text-lg">Ketua DKM</p>
                    </div>
                    
                </div>
     </div>
 
     </div>



    </div>
</div>


</section>


<section class="h-max w-full px-32 mb-10">

    <div class="flex w-full h-max pb-8 gap-3">
        <div class="w-full h-full grid gap-1">
            <div class="h-24 grid gap-3 items-center mb-6">
            <div class="text-3xl font-semibold h-8 text-wrap">Ringkasan Laporan Infaq Bulan Ini</div>
            <div class="text-base font-regular h-14 text-wrap">Alhamdulillah, terima kasih kepada semua donatur atas partisipasi dan kepercayaan yang diberikan.</div>
            </div>
            <div class="w-full h-full">
            <table class="table-auto w-full">
         <thead class="bg-sky-500 text-white h-10 text-lg">
            <tr>
                <th>Jumlah</th>
                <th>Tanggal</th>
                <th>Donatur</th>
            </tr>
        </thead>
        <tbody class="">
            <tr class="bg-gray-200 text-white h-8 text-center text-lg">
            <td class="text-neutral-900 py-2">Rp 1.500.000</td>
            <td class="text-neutral-900 py-2">20 November 2024</td>
            <td class="text-neutral-900 py-2">Adi Firmansyah</td>
            </tr>
            <tr class="bg-gray-300 text-white h-8 text-center text-lg">
            <td class="text-neutral-900 py-2">Rp 1.500.000</td>
            <td class="text-neutral-900">20 November 2024</td>
            <td class="text-neutral-900">Adi Firmansyah</td>
            </tr>
            <tr class="bg-gray-200 text-white h-8 text-center text-lg">
            <td class="text-neutral-900 py-2">Rp 1.500.000</td>
            <td class="text-neutral-900">20 November 2024</td>
            <td class="text-neutral-900">Adi Firmansyah</td>
            </tr>
            <tr class="bg-gray-300 text-white h-8 text-center text-lg">
            <td class="text-neutral-900 py-2">Rp 1.500.000</td>
            <td class="text-neutral-900">20 November 2024</td>
            <td class="text-neutral-900">Adi Firmansyah</td>
            </tr>
            <tr class="bg-gray-200 text-white h-8 text-center text-lg">
            <td class="text-neutral-900 py-2">Rp 1.500.000</td>
            <td class="text-neutral-900">20 November 2024</td>
            <td class="text-neutral-900">Adi Firmansyah</td>
            </tr>
            </tbody>
</table>
<div class="w-full h-10 bg-sky-500 flex items-center text-lg font-bold text-white px-10">
    <p class="w-full text-right">Total Infaq <span>November 2024</span></p>
</div>
<div class="w-full h-12 bg-gray-200 flex items-center text-2xl font-semibold text-neutral-900 px-10">
    <p class="w-full text-right">Rp 80.000.000</p>
</div>
</div>
</div>

        <div class="w-full h-full grid gap-1">
        <div class="h-24 grid gap-3 items-center mb-6">
            <div class="text-3xl font-semibold h-8 text-wrap">Donasi disini</div>
            <div class="text-base font-regular h-14 text-wrap">Mari berdonasi untuk membantu mereka yang sedang kesulitan.</div>
        </div>
        
        <div class="grid gap-2 bg-gray-100 h-full w-full py-4 px-2">
            <div class="grid justify-center"><img src="{{ asset('images/qris.png') }}" alt="Logo" class="w-40 h-40 mb-4"></div>
            <div>
                <div class="w-full h-max grid grid-cols-9 py-1 border-b-4 border-gray-200">
                    <p class="col-span-3 text-center">Ferry Siswanto</p>
                    <p class="text-center">BCA</p>
                    <p class="col-span-3  text-center">022568963</p>
                    <a href=""><div class="w-max text-center flex items-center gap-2 bg-blue-100 p-1 rounded-md text-blue-500 font-semibold hover:bg-blue-200"><div class="bg-[url('../images/background/copy.svg')] bg-no-repeat w-5 h-5"></div>Copy</div></a>
                </div>
                <div class="w-full h-max grid grid-cols-9 py-1 border-b-4 border-gray-200">
                    <p class="col-span-3 text-center">Ferry Siswanto</p>
                    <p class="text-center">BCA</p>
                    <p class="col-span-3  text-center">022568963</p>
                    <a href=""><div class="w-max text-center flex items-center gap-2 bg-blue-100 p-1 rounded-md text-blue-500 font-semibold hover:bg-blue-200"><div class="bg-[url('../images/background/copy.svg')] bg-no-repeat w-5 h-5"></div>Copy</div></a>
                </div>
                <div class="w-full h-max grid grid-cols-9 py-1 border-b-4 border-gray-200">
                    <p class="col-span-3 text-center">Ferry Siswanto</p>
                    <p class="text-center">BCA</p>
                    <p class="col-span-3  text-center">022568963</p>
                    <a href=""><div class="w-max text-center flex items-center gap-2 bg-blue-100 p-1 rounded-md text-blue-500 font-semibold hover:bg-blue-200"><div class="bg-[url('../images/background/copy.svg')] bg-no-repeat w-5 h-5"></div>Copy</div></a>
                </div>
            </div>
      
        </div>
    </div>
    </div>

</section>

<section class="h-max py-8 w-full px-36">
<div class="grid gap-3 py-4">
    <p class="text-3xl font-semibold h-8 text-wrap">Dana Infaq Tersalurkan</p>
    <p>Setiap kontribusi sangat berarti bagi kami. Terima kasih kepada semua pihak yang telah berkontribusi.</p>
</div>

<div class="w-full h-max flex gap-5 mt-4">
    <div class="h-80 w-64 bg-gray-300 rounded-md border-2 border-gray-100">
        <div class="bg-[url('../images/background/donasi1.jpg')] bg-no-repeat bg-cover w-full h-1/2 rounded-t-lg"></div>
        <div class="bg-white w-full h-1/2 grid gap-2">
            <div class="p-2 grid">
            <p class="text-sm h-4">03 Maret 2024</p>
            <div class="grid gap-1"> 
            <p class="font-semibold text-xl truncate">Rp1.000.000.000</p>
            <p class="w-full h-max line-clamp-3 overflow-hidden">Pemberian bantuan bencana alam di daaerah maluku utara Indonesia</p></div>
           
            </div>
        </div>
    </div>
    <div class="h-80 w-64 bg-gray-300 rounded-md border-2 border-gray-100">
    <div class="bg-[url('../images/background/donasi1.jpg')] bg-no-repeat bg-cover w-full h-1/2 rounded-t-lg"></div>
        <div class="bg-white w-full h-1/2 grid gap-2">
            <div class="p-2 grid">
            <p class="text-sm h-4">03 Maret 2024</p>
            <div class="grid gap-1"> 
            <p class="font-semibold text-xl truncate">Rp1.000.000.000</p>
            <p class="w-full h-max line-clamp-3 overflow-hidden">Pemberian bantuan bencana alam di daaerah maluku utara Indonesia</p></div>
           
            </div>
        </div>
    </div>
    <div class="h-80 w-64 bg-gray-300 rounded-md border-2 border-gray-100">
    <div class="bg-[url('../images/background/donasi1.jpg')] bg-no-repeat bg-cover w-full h-1/2 rounded-t-lg"></div>
        <div class="bg-white w-full h-1/2 grid gap-2">
            <div class="p-2 grid">
            <p class="text-sm h-4">03 Maret 2024</p>
            <div class="grid gap-1"> 
            <p class="font-semibold text-xl truncate">Rp1.000.000.000</p>
            <p class="w-full h-max line-clamp-3 overflow-hidden">Pemberian bantuan bencana alam di daaerah maluku utara Indonesia</p></div>
           
            </div>
        </div>
    </div>
    <div class="h-80 w-64 bg-gray-300 rounded-md border-2 border-gray-100">
    <div class="bg-[url('../images/background/donasi1.jpg')] bg-no-repeat bg-cover w-full h-1/2 rounded-t-lg"></div>
        <div class="bg-white w-full h-1/2 grid gap-2">
            <div class="p-2 grid">
            <p class="text-sm h-4">03 Maret 2024</p>
            <div class="grid gap-1"> 
            <p class="font-semibold text-xl truncate">Rp1.000.000.000</p>
            <p class="w-full h-max line-clamp-3 overflow-hidden">Pemberian bantuan bencana alam di daaerah maluku utara Indonesia</p></div>
           
            </div>
        </div>
    </div>
    <div class="h-80 w-64 bg-gray-300 rounded-md border-2 border-gray-100">
    <div class="bg-[url('../images/background/donasi1.jpg')] bg-no-repeat bg-cover w-full h-1/2 rounded-t-lg"></div>
        <div class="bg-white w-full h-1/2 grid gap-2">
            <div class="p-2 grid">
            <p class="text-sm h-4">03 Maret 2024</p>
            <div class="grid gap-1"> 
            <p class="font-semibold text-xl truncate">Rp1.000.000.000</p>
            <p class="w-full h-max line-clamp-3 overflow-hidden">Pemberian bantuan bencana alam di daaerah maluku utara Indonesia</p></div>
           
            </div>
        </div>
    </div>
</div>

</section>

<section class="h-max py-8 w-full px-36 bg-sky-50">

<div class="grid gap-3">
    <p class="text-3xl font-semibold h-8 text-wrap">Pengumuman</p>
    <p>Setiap kontribusi sangat berarti bagi kami. Terima kasih kepada semua pihak yang telah berkontribusi.</p>
</div>

<div class="w-full h-max flex gap-5 mt-4">
    <div class="h-80 w-64 bg-gray-300 rounded-md border-2 border-gray-100">
        <div class="bg-[url('../images/background/donasi1.jpg')] bg-no-repeat bg-cover w-full h-1/2 rounded-t-lg"></div>
        <div class="bg-white w-full h-1/2 grid gap-2">
            <div class="p-2 grid">
            <p class="text-sm h-4">03 Maret 2024</p>
            <div class="grid gap-1"> 
            <p class="font-semibold text-xl truncate">Rp1.000.000.000</p>
            <p class="w-full h-max line-clamp-3 overflow-hidden">Pemberian bantuan bencana alam di daaerah maluku utara Indonesia</p></div>
           
            </div>
        </div>
    </div>
    <div class="h-80 w-64 bg-gray-300 rounded-md border-2 border-gray-100">
    <div class="bg-[url('../images/background/donasi1.jpg')] bg-no-repeat bg-cover w-full h-1/2 rounded-t-lg"></div>
        <div class="bg-white w-full h-1/2 grid gap-2">
            <div class="p-2 grid">
            <p class="text-sm h-4">03 Maret 2024</p>
            <div class="grid gap-1"> 
            <p class="font-semibold text-xl truncate">Rp1.000.000.000</p>
            <p class="w-full h-max line-clamp-3 overflow-hidden">Pemberian bantuan bencana alam di daaerah maluku utara Indonesia</p></div>
           
            </div>
        </div>
    </div>
    <div class="h-80 w-64 bg-gray-300 rounded-md border-2 border-gray-100">
    <div class="bg-[url('../images/background/donasi1.jpg')] bg-no-repeat bg-cover w-full h-1/2 rounded-t-lg"></div>
        <div class="bg-white w-full h-1/2 grid gap-2">
            <div class="p-2 grid">
            <p class="text-sm h-4">03 Maret 2024</p>
            <div class="grid gap-1"> 
            <p class="font-semibold text-xl truncate">Rp1.000.000.000</p>
            <p class="w-full h-max line-clamp-3 overflow-hidden">Pemberian bantuan bencana alam di daaerah maluku utara Indonesia</p></div>
           
            </div>
        </div>
    </div>
    <div class="h-80 w-64 bg-gray-300 rounded-md border-2 border-gray-100">
    <div class="bg-[url('../images/background/donasi1.jpg')] bg-no-repeat bg-cover w-full h-1/2 rounded-t-lg"></div>
        <div class="bg-white w-full h-1/2 grid gap-2">
            <div class="p-2 grid">
            <p class="text-sm h-4">03 Maret 2024</p>
            <div class="grid gap-1"> 
            <p class="font-semibold text-xl truncate">Rp1.000.000.000</p>
            <p class="w-full h-max line-clamp-3 overflow-hidden">Pemberian bantuan bencana alam di daaerah maluku utara Indonesia</p></div>
           
            </div>
        </div>
    </div>
    <div class="h-80 w-64 bg-gray-300 rounded-md border-2 border-gray-100">
    <div class="bg-[url('../images/background/donasi1.jpg')] bg-no-repeat bg-cover w-full h-1/2 rounded-t-lg"></div>
        <div class="bg-white w-full h-1/2 grid gap-2">
            <div class="p-2 grid">
            <p class="text-sm h-4">03 Maret 2024</p>
            <div class="grid gap-1"> 
            <p class="font-semibold text-xl truncate">Rp1.000.000.000</p>
            <p class="w-full h-max line-clamp-3 overflow-hidden">Pemberian bantuan bencana alam di daaerah maluku utara Indonesia</p></div>
           
            </div>
        </div>
    </div>
</div>


</section>

<section class="h-max py-8 w-full px-36 ">

<div class="grid gap-3">
    <p class="text-3xl font-semibold h-8 text-wrap">Tausyiah</p>
    <p>Setiap kontribusi sangat berarti bagi kami. Terima kasih kepada semua pihak yang telah berkontribusi.</p>
</div>

<div class="w-full h-max flex gap-5 mt-4">
    <div class="h-80 w-64 bg-gray-300 rounded-md border-2 border-gray-100">
        <div class="bg-[url('../images/background/donasi1.jpg')] bg-no-repeat bg-cover w-full h-1/2 rounded-t-lg"></div>
        <div class="bg-white w-full h-1/2 grid gap-2">
            <div class="p-2 grid">
            <p class="text-sm h-4">03 Maret 2024</p>
            <div class="grid gap-1"> 
            <p class="font-semibold text-xl truncate">Rp1.000.000.000</p>
            <p class="w-full h-max line-clamp-3 overflow-hidden">Pemberian bantuan bencana alam di daaerah maluku utara Indonesia</p></div>
           
            </div>
        </div>
    </div>
    <div class="h-80 w-64 bg-gray-300 rounded-md border-2 border-gray-100">
    <div class="bg-[url('../images/background/donasi1.jpg')] bg-no-repeat bg-cover w-full h-1/2 rounded-t-lg"></div>
        <div class="bg-white w-full h-1/2 grid gap-2">
            <div class="p-2 grid">
            <p class="text-sm h-4">03 Maret 2024</p>
            <div class="grid gap-1"> 
            <p class="font-semibold text-xl truncate">Rp1.000.000.000</p>
            <p class="w-full h-max line-clamp-3 overflow-hidden">Pemberian bantuan bencana alam di daaerah maluku utara Indonesia</p></div>
           
            </div>
        </div>
    </div>
    <div class="h-80 w-64 bg-gray-300 rounded-md border-2 border-gray-100">
    <div class="bg-[url('../images/background/donasi1.jpg')] bg-no-repeat bg-cover w-full h-1/2 rounded-t-lg"></div>
        <div class="bg-white w-full h-1/2 grid gap-2">
            <div class="p-2 grid">
            <p class="text-sm h-4">03 Maret 2024</p>
            <div class="grid gap-1"> 
            <p class="font-semibold text-xl truncate">Rp1.000.000.000</p>
            <p class="w-full h-max line-clamp-3 overflow-hidden">Pemberian bantuan bencana alam di daaerah maluku utara Indonesia</p></div>
           
            </div>
        </div>
    </div>
    <div class="h-80 w-64 bg-gray-300 rounded-md border-2 border-gray-100">
    <div class="bg-[url('../images/background/donasi1.jpg')] bg-no-repeat bg-cover w-full h-1/2 rounded-t-lg"></div>
        <div class="bg-white w-full h-1/2 grid gap-2">
            <div class="p-2 grid">
            <p class="text-sm h-4">03 Maret 2024</p>
            <div class="grid gap-1"> 
            <p class="font-semibold text-xl truncate">Rp1.000.000.000</p>
            <p class="w-full h-max line-clamp-3 overflow-hidden">Pemberian bantuan bencana alam di daaerah maluku utara Indonesia</p></div>
           
            </div>
        </div>
    </div>
    <div class="h-80 w-64 bg-gray-300 rounded-md border-2 border-gray-100">
    <div class="bg-[url('../images/background/donasi1.jpg')] bg-no-repeat bg-cover w-full h-1/2 rounded-t-lg"></div>
        <div class="bg-white w-full h-1/2 grid gap-2">
            <div class="p-2 grid">
            <p class="text-sm h-4">03 Maret 2024</p>
            <div class="grid gap-1"> 
            <p class="font-semibold text-xl truncate">Rp1.000.000.000</p>
            <p class="w-full h-max line-clamp-3 overflow-hidden">Pemberian bantuan bencana alam di daaerah maluku utara Indonesia</p></div>
           
            </div>
        </div>
    </div>
</div>

</section>
@endsection


</body>
</html>