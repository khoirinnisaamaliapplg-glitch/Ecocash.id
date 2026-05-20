<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>EcoCash - Kelola Sampah Jadi Uang</title>
    
    {{-- <link rel="stylesheet" href="{{ asset('css/globals.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styleguide.css') }}"> --}}
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        "turktoise": "var(--turktoise)",
                    },
                },
            },
        }
    </script>
</head>
<body class="bg-white">

    <nav class="bg-white shadow-sm w-full">
    <div class="max-w-7xl mx-auto flex items-center px-6 lg:px-10 py-4">
        
        <div class="flex items-center mr-12">
            <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" class="h-10">
        </div>

        <div class="flex items-center space-x-8">
            @foreach(['Cara Kerja', 'Solusi', 'Edukasi', 'Partner'] as $item)
                <div class="relative group">
                    <button class="flex items-center text-gray-700 hover:text-teal-500 font-medium transition">
                        {{ $item }}
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                </div>
            @endforeach
        </div>

        <div class="flex items-center space-x-6 ml-auto">
            <div class="flex items-center text-gray-600 cursor-pointer">
                <span>🌐 ID</span>
                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </div>
            
            <a href="https://wa.me/nomor-anda" class="bg-teal-500 hover:bg-teal-600 text-white px-5 py-2 rounded-lg flex items-center shadow-md transition font-semibold">
                <img src="{{ asset('assets/img/wa.png') }}" alt="WhatsApp" class="w-5 h-5 mr-2">
                WhatsApp kami
            </a>
        </div>
    </div>
</nav>
  <section class="relative w-full py-20 bg-cover bg-center" 
         style="background-image: linear-gradient(to right, rgba(255, 255, 255, 0.9) 0%, rgba(255, 255, 255, 0.4) 50%, transparent 100%), url('{{ asset('assets/img/br.jpeg') }}');">
    
    <div class="relative max-w-7xl mx-auto px-10 flex flex-col md:flex-row items-center">
        
        <div class="md:w-1/2 space-y-6">
            <h1 class="text-5xl font-bold text-gray-900 leading-tight">
                Ubah Sampah Jadi Uang
            </h1>
            <p class="text-lg text-gray-700">
                Platform pengelolaan sampah berbasis AI, IoT, dan ekonomi sirkular untuk menciptakan lingkungan yang lebih bersih dan bernilai ekonomi.
            </p>
            
            <div class="flex space-x-4 pt-4">
                <button class="bg-teal-500 hover:bg-teal-600 text-white px-8 py-3 rounded-lg font-semibold transition">
                    Mulai Sekarang
                </button>
                <button class="border border-teal-500 text-teal-500 hover:bg-teal-50 px-8 py-3 rounded-lg font-semibold transition">
                    Pelajari lebih lanjut
                </button>
            </div>

            <div class="pt-6 space-y-2">
                <div class="text-yellow-400 text-4xl flex items-center">
                    ★★★★★
                    <span class="text-gray-600 text-sm ml-3 font-medium"></span>
                </div>
                <div>
                    <img src="{{ asset('assets/img/logo.png') }}" alt="Logo Partner" class="h-8 opacity-70">
                </div>
            </div>
        </div>

        <div class="md:w-1/2"></div>

        <a href="https://wa.me/nomor-anda" class="absolute -bottom-8 -right-4">
            <img src="{{ asset('assets/img/WhatsApp.png') }}" alt="WhatsApp" class="w-12 h-12 hover:scale-110 transition">
        </a>
    </div>
</section>
<section class="max-w-7xl mx-auto px-10 py-8">
    <div class="flex flex-col space-y-6">
        
        <div class="text-gray-700 font-semibold">
            Solusi terbaik untuk Indonesia
        </div>

        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <img src="{{ asset('assets/img/logoDS.png') }}" class="h-10 grayscale hover:grayscale-0 transition" alt="Sponsor">
            </div>

            <a href="#" class="text-teal-500 font-bold flex items-center hover:text-teal-700 transition">
                Customer story 
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
        </div>
    </div>
</section>
<section class="max-w-7xl mx-auto px-10 py-20">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
        
        <div class="space-y-6">
            <h2 class="text-4xl font-bold text-gray-900 leading-tight">
                Kelola Sampah Lebih Mudah <br> dengan EcoCash
            </h2>
            <p class="text-lg text-gray-600 leading-relaxed">
                Aplikasi EcoCash membantu pengguna mengelola sampah secara lebih praktis, modern, dan terintegrasi langsung dari smartphone. Mulai dari verifikasi penjemputan, hingga pengumpulan reward digital, semuanya dapat dilakukan dalam satu aplikasi.
            </p>
            <p class="text-lg text-gray-600 leading-relaxed">
                Dengan teknologi AI dan IoT, EcoCash memberikan pengalaman pengelolaan sampah yang lebih cepat, transparan, dan efisien untuk mendukung gaya hidup berkelanjutan serta ekonomi sirkular di Indonesia.
            </p>

            <div class="pt-4">
                <p class="text-teal-600 font-semibold mb-3">Dapatkan sekarang di</p>
                <div class="flex space-x-4">
                    <a href="#"><img src="{{ asset('assets/img/apk.png') }}" class="h-12" alt="Google Play"></a>
                </div>
            </div>
        </div>

        <div class="relative flex justify-center lg:justify-end">
            <img src="{{ asset('assets/img/cth.png') }}" alt="EcoCash App Mockup" class="w-full max-w-xl">
        </div>

    </div>
</section>
<section class="max-w-7xl mx-auto px-10 py-20">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        
        <div class="w-full">
            <img src="{{ asset('assets/img/rvm.png') }}" 
                 alt="Smart Reverse Vending Machine" 
                 class="w-full h-auto rounded-3xl shadow-lg object-cover">
        </div>

        <div class="space-y-6">
            <h2 class="text-4xl font-bold text-gray-900 leading-tight">
                Smart Reverse Vending Machine
            </h2>
            <h3 class="text-2xl font-semibold text-gray-800">
                Apa itu Smart Reverse Vending Machine?
            </h3>
            <p class="text-lg text-gray-600 leading-relaxed">
                Smart Reverse Vending Machine (RVM) adalah mesin pintar yang memungkinkan pengguna menukarkan sampah botol atau kemasan daur ulang menjadi reward digital secara otomatis.
            </p>
            <p class="text-lg text-gray-600 leading-relaxed">
                Pengguna hanya perlu memasukkan sampah yang sesuai, kemudian sistem AI EcoCash akan melakukan verifikasi jenis material sebelum reward diberikan ke akun pengguna.
            </p>
        </div>

    </div>
</section>
<section class="max-w-7xl mx-auto px-10 py-16">
    <h2 class="text-3xl font-bold text-gray-800 mb-8">Lokasi RVM EcoCash</h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        
        <div class="md:col-span-1 bg-white border border-gray-200 rounded-2xl p-6 shadow-sm h-[500px] overflow-y-auto">
            <div class="relative mb-6">
                <input type="text" placeholder="Cari Lokasi..." class="w-full pl-4 pr-10 py-2 border rounded-lg focus:ring-2 focus:ring-teal-500 outline-none">
                <span class="absolute right-3 top-2.5 text-gray-400">🔍</span>
            </div>

            <div class="space-y-6">
                @foreach([
                    ['name' => 'Jl. Asia Afrika No. 12, Bandung', 'status' => 'Closed', 'color' => 'text-red-500'],
                    ['name' => 'Jl. Braga No. 45, Bandung', 'status' => 'Open now', 'color' => 'text-green-500'],
                    ['name' => 'Jl. Dago No. 88, Bandung', 'status' => 'Closed', 'color' => 'text-red-500'],
                    ['name' => 'Jl. Setiabudi No. 101, Bandung', 'status' => 'Open now', 'color' => 'text-green-500']
                ] as $lokasi)
                <div>
                    <p class="font-bold {{ $lokasi['color'] }} flex items-center">
                        <span class="w-2 h-2 rounded-full bg-current mr-2"></span> {{ $lokasi['status'] }}
                    </p>
                    <p class="font-semibold text-gray-800">{{ $lokasi['name'] }}</p>
                    <p class="text-sm text-gray-500">Reverse vending machine</p>
                    <p class="text-sm text-gray-600 mt-1">🕒 Buka pukul 07.00–20.00</p>
                </div>
                <hr class="my-4">
                @endforeach
            </div>
        </div>

        <div class="md:col-span-2">
            <img src="{{ asset('assets/img/maps.png') }}" alt="Peta Lokasi RVM" class="w-full h-[500px] object-cover rounded-2xl shadow-md">
        </div>
    </div>
</section>
<section class="max-w-7xl mx-auto px-10 py-20 bg-gray-50">
    <div class="text-center mb-12">
        <h2 class="text-4xl font-bold text-gray-900">Ekosistem EcoCash</h2>
    </div>

    <div class="flex justify-center items-center">
        <img src="{{ asset('assets/img/banner.png') }}" 
             alt="Ekosistem EcoCash" 
             class="w-full max-w-6xl rounded-2xl shadow-xl border border-gray-100 object-contain transition-transform duration-500 hover:scale-[1.01]">
    </div>
</section>
<section class="max-w-7xl mx-auto px-10 py-20">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        
        <div class="space-y-6">
            <h2 class="text-4xl font-bold text-gray-900 leading-tight">
                Komunitas & <br> Aksi Peduli Lingkungan
            </h2>
            <p class="text-lg text-gray-600 leading-relaxed">
                Bersama EcoCash.id, setiap botol yang didaur ulang menjadi langkah nyata untuk mendukung komunitas dan menciptakan lingkungan yang lebih bersih. Program ini membantu komunitas, sekolah, dan organisasi mendapatkan manfaat dari aktivitas daur ulang sehari-hari.
            </p>
            <p class="text-lg text-gray-600 leading-relaxed">
                Tidak hanya membantu mengurangi sampah plastik, EcoCash.id juga membuka peluang kolaborasi dan memberikan dampak positif bagi lingkungan sekitar. Ingin komunitas atau organisasi Anda ikut berkontribusi sekaligus mendapatkan manfaat dari program daur ulang bersama EcoCash.id?
            </p>
            <p class="text-lg font-medium text-gray-800">
                Hubungi kami dan mulai gerakan peduli lingkungan dari sekarang.
            </p>
            
            <a href="https://wa.me/nomor-anda" class="inline-flex items-center bg-teal-500 hover:bg-teal-600 text-white px-6 py-3 rounded-lg font-semibold transition shadow-md">
                <img src="{{ asset('assets/img/wa.png') }}" class="w-5 h-5 mr-2" alt="WA">
                WhatsApp kami
            </a>
        </div>

        <div class="w-full">
            <img src="{{ asset('assets/img/anak.png') }}" 
                 alt="Komunitas Peduli Lingkungan" 
                 class="w-full h-auto rounded-3xl shadow-lg">
        </div>

    </div>
</section>
<section class="max-w-7xl mx-auto px-10 py-20">
    <div class="mb-12">
        <h2 class="text-4xl font-bold text-gray-900 mb-4">Jenis Pengembalian EcoCash</h2>
        <p class="text-lg text-gray-600">
            Setiap botol atau kaleng yang kamu kembalikan bernilai eco-refund. 
            <span class="text-teal-500 font-semibold">Yuk, pilih metode pencairan EcoCash sesukamu!</span>
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        
        <div class="space-y-4">
            <div class="text-2xl">💳</div>
            <h3 class="text-xl font-bold">Dompet Digital</h3>
            <p class="text-gray-600 leading-relaxed">Transfer eco-refund secara instan ke e-wallet pilihanmu (Dana, OVO, GoPay, LinkAja) atau simpan sebagai saldo aplikasi.</p>
        </div>

        <div class="space-y-4">
            <div class="text-2xl">🏪</div>
            <h3 class="text-xl font-bold">Kredit Toko</h3>
            <p class="text-gray-600 leading-relaxed">Dapatkan voucher fisik dari mesin atau depo untuk belanja di ritel lokal atau ditukar tunai. Tanpa perlu daftar akun.</p>
        </div>

        <div class="space-y-4">
            <div class="text-2xl">🏦</div>
            <h3 class="text-xl font-bold">Tunai & Transfer Bank</h3>
            <p class="text-gray-600 leading-relaxed">Cairkan uang tunai lewat petugas depo, atau pilih transfer bank (EFT) dengan memasukkan kartu ATM ke terminal.</p>
        </div>

        <div class="space-y-4">
            <div class="text-2xl">👥</div>
            <h3 class="text-xl font-bold">Donasi Komunitas</h3>
            <p class="text-gray-600 leading-relaxed">Salurkan saldo EcoCash untuk mendukung sekolah, klub olahraga, dan lembaga sosial terdekat dengan metode donasi yang mudah.</p>
        </div>

    </div>
</section>
<section class="max-w-7xl mx-auto px-10 py-20">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-stretch">
        
        <div class="space-y-8 flex flex-col justify-center">
            <div>
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Panduan Kelayakan Barang Daur Ulang EcoCash.id</h2>
                <p class="text-gray-600 text-lg">
                    Ubah sampah jadi saldo! Biar proses pemindaian lancar dan poinmu berhasil masuk, 
                    <span class="text-teal-500 font-semibold">yuk perhatikan kategori barang berikut sebelum disetor:</span>
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <div class="flex items-center mb-4">
                        <span class="text-green-500 mr-2">✅</span>
                        <h3 class="font-bold text-lg">Barang yang BISA</h3>
                    </div>
                    <ul class="list-disc list-inside text-gray-600 space-y-2">
                        <li>Botol Plastik (150ml - 3L)</li>
                        <li>Kaleng minuman/makanan</li>
                        <li>Karton Minuman (UHT)</li>
                        <li>Botol Kaca (sirup/kecap)</li>
                    </ul>
                </div>

                <div>
                    <div class="flex items-center mb-4">
                        <span class="text-red-500 mr-2">❌</span>
                        <h3 class="font-bold text-lg">Barang yang TIDAK BISA</h3>
                    </div>
                    <ul class="list-disc list-inside text-gray-600 space-y-2">
                        <li>Botol kaca minuman keras</li>
                        <li>Jeriken plastik > 3L</li>
                        <li>Plastik mika/kresek/saset</li>
                        <li>Wadah kotor/berminyak</li>
                    </ul>
                </div>
            </div>

            <div class="bg-amber-50 border-l-4 border-amber-400 p-4 text-amber-800 text-sm rounded-r-lg">
                <p><strong>⚠️ PENTING:</strong> Jangan diremukkan dan jangan lepas label/tutupnya! Pemindai kami perlu membaca kode batang (barcode) untuk mencairkan saldo Anda.</p>
            </div>
        </div>

        <div class="w-full h-full flex items-center">
             <img src="{{ asset('assets/img/panduan.png') }}" 
                alt="Panduan Barang Daur Ulang" 
         >
        </div>

    </div>
</section>
<section class="max-w-7xl mx-auto px-10 py-20">
    <div class="text-center mb-16">
        <h2 class="text-4xl font-bold text-gray-900">Berita tentang <span class="text-teal-500">Ecocash.id</span></h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        
        <div class="bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-lg transition duration-300 overflow-hidden">
            <img src="{{ asset('assets/img/berita-1.png') }}" alt="Berita 1" class="w-full h-48 object-cover">
            <div class="p-6">
                <h3 class="text-lg font-bold mb-3 text-gray-900">Sampah Plastik Jadi Rupiah</h3>
                <p class="text-sm text-gray-600 leading-relaxed">Ecocash.id resmi meluncurkan aplikasi inovatif yang memungkinkan masyarakat menukarkan sampah plastik langsung menjadi saldo digital...</p>
            </div>
        </div>

        <div class="bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-lg transition duration-300 overflow-hidden">
            <img src="{{ asset('assets/img/berita-2.png') }}" alt="Berita 2" class="w-full h-48 object-cover">
            <div class="p-6">
                <h3 class="text-lg font-bold mb-3 text-gray-900">Aplikasi Ecocash.id Resmi Rilis</h3>
                <p class="text-sm text-gray-600 leading-relaxed">Ecocash.id resmi meluncurkan aplikasi seluler pertamanya di Indonesia untuk mempermudah masyarakat dalam mengelola sampah...</p>
            </div>
        </div>

        <div class="bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-lg transition duration-300 overflow-hidden">
            <img src="{{ asset('assets/img/berita-3.png') }}" alt="Berita 3" class="w-full h-48 object-cover">
            <div class="p-6">
                <h3 class="text-lg font-bold mb-3 text-gray-900">Ecocash.id Gandeng Bank Sampah</h3>
                <p class="text-sm text-gray-600 leading-relaxed">Ecocash.id mengumumkan kolaborasi strategis dengan jaringan bank sampah lokal guna memperluas jangkauan layanan...</p>
            </div>
        </div>
         <div class="bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-lg transition duration-300 overflow-hidden">
            <img src="{{ asset('assets/img/berita-4.png') }}" alt="Berita 4" class="w-full h-48 object-cover">
            <div class="p-6">
                <h3 class="text-lg font-bold mb-3 text-gray-900">Ecocash.id Perluas Jangkauan di Pulau Jawa</h3>
                <p class="text-sm text-gray-600 leading-relaxed">Ecocash.id kini hadir di lebih dari 100 titik di Pulau Jawa, memperluas akses masyarakat untuk menukarkan sampah menjadi saldo digital...</p>
            </div>
        </div>
         <div class="bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-lg transition duration-300 overflow-hidden">
            <img src="{{ asset('assets/img/berita-5.png') }}" alt="Berita 5" class="w-full h-48 object-cover">
            <div class="p-6">
                <h3 class="text-lg font-bold mb-3 text-gray-900">Ecocash.id Hadir di Kota Bandung</h3>
                <p class="text-sm text-gray-600 leading-relaxed">Ecocash.id kini hadir di Kota Bandung, memberikan kemudahan bagi masyarakat untuk menukarkan sampah menjadi saldo digital...</p>
            </div>
        </div>
         <div class="bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-lg transition duration-300 overflow-hidden">
            <img src="{{ asset('assets/img/berita-6.png') }}" alt="Berita 6" class="w-full h-48 object-cover">
            <div class="p-6">
                <h3 class="text-lg font-bold mb-3 text-gray-900">Ecocash.id Hadir di Kota Surabaya</h3>
                <p class="text-sm text-gray-600 leading-relaxed">Ecocash.id kini hadir di Kota Surabaya, memberikan kemudahan bagi masyarakat untuk menukarkan sampah menjadi saldo digital...</p>
            </div>
        </div>

        </div>

    <div class="text-center mt-12">
        <a href="#" class="text-teal-500 font-bold flex items-center justify-center hover:text-teal-700 transition">
            Tampilkan lebih banyak <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
        </a>
    </div>
</section>
<section class="max-w-7xl mx-auto px-10 py-20">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
        
        <div class="space-y-6">
            <h3 class="text-sm font-bold text-teal-600 uppercase tracking-wider">Frequently Asked Questions</h3>
            <h2 class="text-4xl font-bold text-gray-900">Apa itu EcoCash.id</h2>
            <p class="text-lg text-gray-600 leading-relaxed">
                EcoCash membantu masyarakat, sekolah, industri, dan pemerintah mengelola sampah secara modern, transparan, dan berkelanjutan.
            </p>
            <p class="text-lg text-gray-600 leading-relaxed">
                Dengan sistem digital terintegrasi, EcoCash mengubah sampah menjadi sumber daya yang memiliki nilai ekonomi sekaligus mendukung lingkungan yang lebih baik.
            </p>
        </div>

        <div class="space-y-4">
            
            <div class="bg-white border border-gray-200 rounded-2xl p-6 shadow-sm">
                <div class="flex justify-between items-center cursor-pointer">
                    <h4 class="font-bold text-gray-900">Bagaimana cara mendapatkan reward?</h4>
                    <span class="text-xl font-bold text-gray-500">-</span>
                </div>
                <p class="text-gray-600 mt-4 leading-relaxed">
                    Pengguna akan mendapatkan reward setelah sampah berhasil dipilah, dikirim, dan diverifikasi oleh sistem AI EcoCash. Reward akan otomatis masuk ke akun pengguna dalam bentuk poin atau saldo digital sesuai jenis dan jumlah sampah yang berhasil didaur ulang.
                </p>
            </div>

            <div class="bg-white border border-gray-200 rounded-2xl p-6 hover:shadow-md transition">
                <div class="flex justify-between items-center cursor-pointer">
                    <h4 class="font-bold text-gray-900">Apakah semua jenis sampah diterima?</h4>
                    <span class="text-xl font-bold text-gray-500">+</span>
                </div>
            </div>

            <div class="bg-white border border-gray-200 rounded-2xl p-6 hover:shadow-md transition">
                <div class="flex justify-between items-center cursor-pointer">
                    <h4 class="font-bold text-gray-900">Bagaimana proses penjemputan sampah?</h4>
                    <span class="text-xl font-bold text-gray-500">+</span>
                </div>
            </div>

            <div class="bg-white border border-gray-200 rounded-2xl p-6 hover:shadow-md transition">
                <div class="flex justify-between items-center cursor-pointer">
                    <h4 class="font-bold text-gray-900">Apakah EcoCash tersedia untuk perusahaan?</h4>
                    <span class="text-xl font-bold text-gray-500">+</span>
                </div>
            </div>

        </div>

    </div>
</section>
<footer class="bg-gray-50 border-t border-gray-200 py-16">
    <div class="max-w-7xl mx-auto px-10">
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
            
            <div class="space-y-4">
                <img src="{{ asset('assets/img/logo.png') }}" alt="Ideas Edvolution" class="h-12">
                <p class="text-gray-600 text-sm leading-relaxed">
                    EcoCash: Solusi Modern untuk Pengelolaan Sampah yang Transparan dan Berkelanjutan!
                </p>
            </div>

            <div>
                <h4 class="font-bold text-gray-900 mb-6 uppercase tracking-wider text-sm">Layanan</h4>
                <ul class="space-y-3 text-gray-600 text-sm">
                    <li><a href="#" class="hover:text-teal-600">Aplikasi Mobi;e</a></li>
                    <li><a href="#" class="hover:text-teal-600">Smart RVM</a></li>
                    <li><a href="#" class="hover:text-teal-600">Lokasi Drop Point</a></li>
                    <li><a href="#" class="hover:text-teal-600">Ecocash Bisinis</a></li>
                </ul>
            </div>

            <div>
                <h4 class="font-bold text-gray-900 mb-6 uppercase tracking-wider text-sm">Perusahaan</h4>
                <ul class="space-y-3 text-gray-600 text-sm">
                    <li><a href="#" class="hover:text-teal-600">Tentang Kami</a></li>
                    <li><a href="#" class="hover:text-teal-600">Edukasi & Berita</a></li>
                    <li><a href="#" class="hover:text-teal-600">Hubungi Kami</a></li>
                    <li><a href="#" class="hover:text-teal-600">Karir</a></li>
                </ul>
            </div>

            <div>
                <h4 class="font-bold text-gray-900 mb-6 uppercase tracking-wider text-sm">Kontak</h4>
                <ul class="space-y-3 text-gray-600 text-sm">
                    <li>WhatsApp: 08128829993</li>
                    <li>email: ideasedvolution@gmail.com</li>
                </ul>
            </div>
        </div>

        <div class="flex flex-col md:flex-row justify-between items-start md:items-center pt-8 border-t border-gray-200 gap-8">
            
            <div class="space-y-4">
                <h4 class="font-bold text-gray-900 text-sm uppercase">Sosial Media</h4>
                <div class="flex space-x-3">
                    <a href="#" class="hover:opacity-80 transition">
                        <img src="{{ asset('assets/img/link.png') }}" class="w-8 h-8" alt="LinkedIn">
                    </a>
                    <a href="#" class="hover:opacity-80 transition">
                        <img src="{{ asset('assets/img/Instagram.png') }}" class="w-8 h-8" alt="Instagram">
                    </a>
                    <a href="#" class="hover:opacity-80 transition">
                        <img src="{{ asset('assets/img/Twitter.png') }}" class="w-8 h-8" alt="Twitter">
                    </a>
                    <a href="#" class="hover:opacity-80 transition">
                        <img src="{{ asset('assets/img/Facebook.png') }}" class="w-8 h-8" alt="Facebook">
                    </a>
                    <a href="#" class="hover:opacity-80 transition">
                        <img src="{{ asset('assets/img/TikTok.png') }}" class="w-8 h-8" alt="TikTok">
                    </a>
                    <a href="#" class="hover:opacity-80 transition">
                        <img src="{{ asset('assets/img/YouTube.png') }}" class="w-8 h-8" alt="TikTok">
                    </a>
                </div>
                <p class="text-gray-500 text-xs">
                    Bandung<br>Jl. A. Yani No.271A, Cihapit, Kec. Bandung Wetan, Kota Bandung, Jawa Barat 40114
                </p>
            </div>

            <div class="space-y-4">
                <h4 class="font-bold text-gray-900 text-sm uppercase">Unduh Sekarang</h4>
                <div class="flex space-x-4">
                    <img src="{{ asset('assets/img/apk.png') }}" class="h-10" alt="Google Play">

                </div>
            </div>
        </div>

        <div class="mt-16 text-center text-gray-500 text-sm border-t border-gray-200 pt-8">
            © Copyright 2026 - PT Ideas Edvolution Technology
        </div>
    </div>
</footer>
</body>
</html>