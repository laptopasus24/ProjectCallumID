<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="icon" type="icon" href="assets/images/favicon.png" />
    <title>Beranda</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">    
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="node_modules/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="assets/css/custom.css">
</head>

<body>
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
                                    <p class="font-semibold"><a href="{{route('profile')}}">Akun Saya</p></a>
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

    <!-- Slider -->
    <section id="product-slider">
        <div class="main-slider swiper-container">
            <div class="swiper-wrapper">
                
                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <img src="assets/images/main-slider/4.jpg" alt="Product 3">
                    <div class="swiper-slide-content">
                        <h2 class="text-3xl md:text-7xl font-bold text-white mb-2 md:mb-4">Segar Sepanjang Hari,
                            Tanpa Kompromi</h2>
                        <p class="mb-4 text-white md:text-2xl">Temukan deodorant yang menjaga Anda tetap segar, <br> percaya diri, dan nyaman – tanpa bahan kimia keras.</p>
                        <a href="/"
                            class="bg-primary hover:bg-transparent text-white hover:text-white border border-transparent hover:border-white font-semibold px-4 py-2 rounded-full inline-block">Beli
                            Sekarang</a>
                    </div>
                </div>

            </div>
        </div>
        <!-- Slider Pagination -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </section>

    

    <!-- Popular product section -->
    <section id="popular-products">
        <div class="container mx-auto px-4 mt-10">
            <h2 class="text-2xl font-bold mb-8">Jelajahi Produk Kami</h2>
            <div class="flex flex-wrap -mx-4">
                <!-- Product 1 -->
                <div class="w-full sm:w-1/2 lg:w-1/4 px-4 mb-8">
                  <div class="bg-white p-3 rounded-lg shadow-lg">
                    <img src="assets/images/products/11.png" alt="Product 1" class="w-full object-cover mb-4 rounded-lg">
                    <a href="/detailproduk" class="text-lg font-semibold mb-2">Callum Deodorant spray Tawas 100ml Baby Powder</a>
                    <p class="my-2">Tawas 100ml</p>
                    <div class="flex items-center mb-4">
                      <span class="text-lg font-bold text-primary">Rp.9.000</span>
                      <span class="text-sm line-through ml-2">Rp.10.000</span>
                    </div>
                    <button class="bg-primary border border-transparent hover:bg-transparent hover:border-primary text-white hover:text-primary font-semibold py-2 px-4 rounded-full w-full">Add to Cart</button>
                  </div>
                </div>
                <!-- Product 2 -->
                <div class="w-full sm:w-1/2 lg:w-1/4 px-4 mb-8">
                  <div class="bg-white p-3 rounded-lg shadow-lg">
                    <img src="assets/images/products/22.jpg" alt="Product 2" class="w-full object-cover mb-4 rounded-lg">
                    <a href="#" class="text-lg font-semibold mb-2">Callum Deodorant spray Tawas 100ml For Men</a>
                    <p class=" my-2">Tawas 100ml</p>
                    <div class="flex items-center mb-4">
                      <span class="text-lg font-bold text-gray-900">Rp.10.000</span>
                    </div>
                    <button class="bg-primary border border-transparent hover:bg-transparent hover:border-primary text-white hover:text-primary font-semibold py-2 px-4 rounded-full w-full">Add to Cart</button>
                  </div>
                </div>
                <!-- Product 3 -->
                <div class="w-full sm:w-1/2 lg:w-1/4 px-4 mb-8">
                  <div class="bg-white p-3 rounded-lg shadow-lg">
                    <img src="assets/images/products/33.jpg" alt="Product 3" class="w-full object-cover mb-4 rounded-lg">
                    <a href="#" class="text-lg font-semibold mb-2">Callum Deodorant spray Tawas 100ml Vanilla </a>
                    <p class=" my-2">Tawas 100ml</p>
                    <div class="flex items-center mb-4">
                      <span class="text-lg font-bold text-primary">Rp.9.000</span>
                      <span class="text-sm line-through  ml-2">Rp.10.000</span>
                    </div>
                    <button class="bg-primary border border-transparent hover:bg-transparent hover:border-primary text-white hover:text-primary font-semibold py-2 px-4 rounded-full w-full">Add to Cart</button>
                  </div>
                </div>
                <!-- Product 4 -->
                <div class="w-full sm:w-1/2 lg:w-1/4 px-4 mb-8">
                  <div class="bg-white p-3 rounded-lg shadow-lg">
                    <img src="assets/images/products/44.jpg" alt="Product 4" class="w-full object-cover mb-4 rounded-lg">
                    <a href="#" class="text-lg font-semibold">Callum Deodorant spray Tawas 100ml Original</a>
                    <p class="my-2">Tawas 100ml</p>
                    <div class="flex items-center mb-4">
                        <span class="text-lg font-bold text-primary">Rp.9.000</span>
                        <span class="text-sm line-through ml-2">Rp.10.000</span>
                    </div>
                    <button class="bg-primary border border-transparent hover:bg-transparent hover:border-primary text-white hover:text-primary font-semibold py-2 px-4 rounded-full w-full">Add to Cart</button>
                  </div>
                </div>
              </div>
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