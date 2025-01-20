<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tentang Kami | Callum ID Deodoran Spray</title>
  <!-- Mengimpor Font Poppins dari Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">    
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="node_modules/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="assets/css/custom.css">
</head>

<body class="bg-white font-sans text-black" style="font-family: 'Poppins', sans-serif;">

    <!-- Header -->
    <header class="bg-gray-dark sticky top-0 z-50">
        <div class="container mx-auto flex justify-between items-center py-4">
            <!-- Left section: Logo -->
            <a href="{{route('home')}}" class="flex items-center">
              <div class="text-white">
                <h1>CallumID</h1>
              </div>
            </a>

            <!-- Hamburger menu (for mobile) -->
            <div class="flex lg:hidden">
                <button id="hamburger" class="text-white focus:outline-none">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>

            <!-- Center section: Menu -->
            <nav class="hidden lg:flex md:flex-grow justify-center">
              <ul class="flex justify-center space-x-4 text-white">
                  <li><a href="{{route('home')}}" class="hover:text-secondary font-semibold">Beranda</a></li>
                  <li><a href="/produk" class="hover:text-secondary font-semibold">Produk</a></li>
                  <li><a href="/tentang" class="hover:text-secondary font-semibold">Tentang</a></li>
                  <li><a href="/kontak" class="hover:text-secondary font-semibold">Kontak</a></li>
              </ul>
            </nav>

            <div class="relative group cart-wrapper">
                <a href="/cart.html" >
                    <img src="assets/images/cart-shopping.svg" alt="Cart" class="h-6 w-6 group-hover:scale-120">
                </a>
            </div>

            <div class="relative group cart-wrapper">
                    <img src="assets/images/user.svg" alt="icon-user" class="h-6 w-6 group-hover:scale-120">
                <!-- Cart dropdown -->
                <div class="absolute right-0 mt-1 w-80 bg-white shadow-lg p-4 rounded hidden group-hover:block">
                    <div class="space-y-4">
                        <!-- product item -->
                        <div class="flex items-center justify-between pb-4 border-b border-gray-line">
                            <div class="flex items-center">
                                <img src="assets/images/user.svg" alt="icon-user" class="h-6 w-6 group-hover:scale-120">
                                <div>
                                    <p class="font-semibold"><a href="#"></a>Akun Saya</p>
                                </div>
                            </div>
                        </div>
                    <div class="space-y-4">
                        <!-- product item -->
                        <div class="flex items-center justify-between pb-4 border-b border-gray-line">
                            <div class="flex items-center">
                                <img src="assets/images/user.svg" alt="icon-user" class="h-6 w-6 group-hover:scale-120">
                                <div>
                                    <p class="font-semibold"><a href="#"></a>Pesanan Saya</p>
                                </div>
                            </div>
                        </div>
                              </div>
                          </div>
                          <a href="{{Route('logout')}}" class="block text-center mt-4 border border-primary bg-primary hover:bg-transparent text-white hover:text-primary py-2 rounded-full font-semibold">Logout</a>
                        </div>
                    </div>
                    <a id="search-icon" href="javascript:void(0);" class="text-white hover:text-secondary group">
                        <img src="assets/images/search-icon.svg" alt="Search"
                            class="h-6 w-6 transition-transform transform group-hover:scale-120">
                    </a>
                </div>
            </div>
                <!-- Search field -->
                <div id="search-field" class="hidden absolute top-full right-0 mt-2 w-full bg-white shadow-lg p-2 rounded">
                          <input type="text" class="w-full p-2 border border-gray-300 rounded"
                              placeholder="Search for products...">
                </div>
        </div>
    </header>

  <!-- Hero Section -->
  <section class="flex items-center justify-between py-20 px-8 md:px-20 bg-white text-black">
    <div class="w-full md:w-1/2 px-6">
      <h1 class="text-4xl font-extrabold mb-6">Tentang Kami</h1>
      <p class="text-lg mb-6">Callum ID adalah sebuah merek deodoran spray yang dirancang untuk memenuhi kebutuhan gaya hidup modern dengan fokus pada kesegaran, kenyamanan, dan aroma yang tahan lama. Produk ini sering dipilih karena kualitasnya yang dapat diandalkan untuk melawan bau badan sepanjang hari.</p>
      <h2 class="text-2xl font-semibold mb-4">Keunggulan Callum ID Deodoran Spray:</h2>
      <ul class="list-inside list-disc text-lg">
        <li><strong>Aroma Menarik:</strong> Callum ID menawarkan berbagai pilihan aroma yang segar dan maskulin, cocok untuk berbagai aktivitas, baik formal maupun santai.</li>
        <li><strong>Tahan Lama:</strong> Formulanya dirancang untuk memberikan perlindungan hingga 24 jam, sehingga pengguna tetap percaya diri sepanjang hari.</li>
        <li><strong>Cepat Kering:</strong> Sebagai deodoran spray, Callum ID tidak meninggalkan residu lengket di kulit dan cepat mengering setelah disemprotkan.</li>
      </ul>
    </div>
    <div class="w-full md:w-1/2 mt-12 md:mt-0">
      <img src="https://via.placeholder.com/500" alt="Callum ID Deodorant" class="rounded-lg shadow-lg w-full object-cover">
    </div>
  </section>

  <!-- Additional Sections (Optional) -->
  <section class="py-16 px-8 md:px-20 bg-white">
    <div class="container mx-auto text-center">
      <h2 class="text-3xl font-semibold text-black mb-8">Kenapa Pilih Callum ID?</h2>
      <p class="text-lg text-black max-w-3xl mx-auto">Dengan teknologi terbaru dan formula yang sudah terbukti efektif, Callum ID hadir untuk memberikan pengalaman baru dalam menjaga kesegaran Anda sepanjang hari. Kami berkomitmen untuk kualitas dan kenyamanan yang tak tertandingi.</p>
    </div>
  </section>

  <!-- Footer -->
  <footer class="border-t border-gray-line">
    <!-- Top part -->
    <div class="container mx-auto px-4 py-10">
      <div class="flex flex-wrap -mx-4">
        
        <!-- Menu 2 -->
        <div class="w-full sm:w-1/6 px-4 mb-8">
          <h3 class="text-lg font-semibold mb-4">Pages</h3>
          <ul>
            <li><a href="/shop.html" class="hover:text-primary">Beranda</a></li>
            <li><a href="/single-product-page.html" class="hover:text-primary">Produk</a></li>
            <li><a href="/checkout.html" class="hover:text-primary">Tentang</a></li>
            <li><a href="/404.html" class="hover:text-primary">Kontak</a></li>
          </ul>
        </div>
        <!-- Menu 3 -->
        <div class="w-full sm:w-1/6 px-4 mb-8">
          <h3 class="text-lg font-semibold mb-4">Akun</h3>
          <ul>
            <li><a href="/cart.html" class="hover:text-primary">Keranjang</a></li>
            <li><a href="{{route('register')}}" class="hover:text-primary">Registrasi</a></li>
            <li><a href="{{route('login')}}" class="hover:text-primary">Login</a></li>
          </ul>
        </div>
        <!-- Social Media -->
        <div class="w-full sm:w-1/6 px-4 mb-8">
          <h3 class="text-lg font-semibold mb-4">Sosial Media</h3>
          <ul>
            <li class="flex items-center mb-2">
              <img src="/assets/images/social_icons/facebook.svg" alt="Facebook" class="w-4 h-4 transition-transform transform hover:scale-110 mr-2">
              <a href="#" class="hover:text-primary">Facebook</a>
            </li>
            <li class="flex items-center mb-2">
              <img src="/assets/images/social_icons/twitter.svg" alt="Twitter" class="w-4 h-4 transition-transform transform hover:scale-110 mr-2">
              <a href="#" class="hover:text-primary">Twitter</a>
            </li>
            <li class="flex items-center mb-2">
              <img src="/assets/images/social_icons/instagram.svg" alt="Instagram" class="w-4 h-4 transition-transform transform hover:scale-110 mr-2">
              <a href="#" class="hover:text-primary">Instagram</a>
            </li>
          </ul>
        </div>
        <!-- Contact Information -->
        <div class="w-full sm:w-2/6 px-4 mb-8">
          <h3 class="text-lg font-semibold mb-4">Contact Us</h3>
          <p>CallumID</p>
          {{-- <p><img src="assets/images/template-logo.png" alt="Logo" class="h-[60px] mb-4"></p> --}}
          <p>Jl.Universitas Bina sarana informatika</p>
          <p class="text-xl font-bold my-4">Telepon: (+62) 8099-9999</p>
          <a href="#" class="underline">Email: CallumID@gmail.com</a>
        </div>
      </div>
    </div>
  
    <!-- Bottom part -->
    <div class="py-6 border-t border-gray-line">
      <div class="container mx-auto px-4 flex flex-wrap justify-between items-center">
        <!-- Copyright and Links -->
        <div class="w-full lg:w-3/4 text-center lg:text-left mb-4 lg:mb-0">
          <p class="mb-2 font-bold">&copy; 2024 CallumID. All rights reserved.</p>
        </div>
        <!-- Payment Icons -->
        {{-- <div class="w-full lg:w-1/4 text-center lg:text-right">
          <img src="/assets/images/social_icons/paypal.svg" alt="PayPal" class="inline-block h-8 mr-2">
          <img src="/assets/images/social_icons/stripe.svg" alt="Stripe" class="inline-block h-8 mr-2">
          <img src="/assets/images/social_icons/visa.svg" alt="Visa" class="inline-block h-8">
        </div>
      </div>
    </div> --}}

</footer>



<script src="node_modules/swiper/swiper-bundle.js"></script>
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
<script src="assets/js/script.js"></script>

</body>
</html>
