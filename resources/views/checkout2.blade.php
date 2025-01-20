<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Checkout</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <div class="container mx-auto py-10">
    <h1 class="text-2xl font-bold text-gray-800 mb-5">Checkout</h1>

    <!-- Bagian Keranjang -->
    <div class="bg-white p-6 rounded-lg shadow-md mb-6">
      <h2 class="text-xl font-semibold text-gray-700 mb-4">Rincian Produk</h2>
      <div class="flex justify-between items-center border-b pb-4 mb-4">
        <div>
          <p class="text-gray-800 font-medium">Produk 1</p>
          <p class="text-gray-600 text-sm">Kuantitas: 1</p>
        </div>
        <p class="text-gray-800 font-bold">Rp100.000</p>
      </div>
      <div class="flex justify-between items-center">
        <div>
          <p class="text-gray-800 font-medium">Produk 2</p>
          <p class="text-gray-600 text-sm">Kuantitas: 2</p>
        </div>
        <p class="text-gray-800 font-bold">Rp200.000</p>
      </div>
    </div>

    <!-- Form Checkout -->
    <div class="bg-white p-6 rounded-lg shadow-md">
      <h2 class="text-xl font-semibold text-gray-700 mb-4">Informasi Pembayaran</h2>
      <form action="#" method="POST">
        <div class="mb-4">
          <label for="name" class="block text-gray-600 font-medium">Nama Lengkap</label>
          <input type="text" id="name" name="name" class="w-full p-2 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="mb-4">
          <label for="email" class="block text-gray-600 font-medium">Email</label>
          <input type="email" id="email" name="email" class="w-full p-2 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="mb-4">
          <label for="address" class="block text-gray-600 font-medium">Alamat</label>
          <textarea id="address" name="address" rows="3" class="w-full p-2 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
        </div>
        <div class="mb-4">
          <label for="payment" class="block text-gray-600 font-medium">Metode Pembayaran</label>
          <select id="payment" name="payment" class="w-full p-2 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            <option value="transfer">Transfer Bank</option>
            <option value="cod">Cash on Delivery</option>
            <option value="credit_card">Kartu Kredit</option>
          </select>
        </div>
        <div class="flex justify-between items-center mt-6">
          <p class="text-gray-700 font-semibold">Total: <span class="text-xl font-bold">Rp300.000</span></p>
          <button type="submit" class="px-6 py-2 bg-blue-500 text-white font-medium rounded-lg hover:bg-blue-600 transition duration-200">Bayar Sekarang</button>
        </div>
      </form>
    </div>
  </div>

</body>
</html>
