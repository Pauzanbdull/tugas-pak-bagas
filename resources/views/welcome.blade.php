<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Website Modern</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
  </style>
</head>
<body class="bg-gradient-to-r from-gray-900 via-gray-800 to-gray-900 text-gray-200">
  <nav class="bg-gradient-to-r from-blue-900 to-blue-600 p-4 shadow-md text-center">
    <a onclick="showContent('home')" class="text-white mx-4 font-semibold hover:text-yellow-400 cursor-pointer">Home</a>
    <a onclick="showContent('about')" class="text-white mx-4 font-semibold hover:text-yellow-400 cursor-pointer">About</a>
    <a onclick="showContent('contact')" class="text-white mx-4 font-semibold hover:text-yellow-400 cursor-pointer">Contact</a>
  </nav>
  
  <div class="max-w-2xl mx-auto mt-10 p-6 bg-gray-800 shadow-lg rounded-lg text-center" id="content">
    <h2 class="text-2xl font-bold text-yellow-400">Selamat Datang di Home</h2>
    <p class="mt-2 text-gray-300">Ini adalah halaman utama dengan desain modern.</p>
  </div>

  <script>
    function showContent(page) {
      let content = document.getElementById("content");
      if (page === "home") {
        content.innerHTML = `
          <h2 class='text-2xl font-bold text-yellow-400'>Selamat Datang di Home</h2>
          <p class='mt-2 text-gray-300'>Ini adalah halaman utama dengan desain modern.</p>
        `;
      } else if (page === "about") {
        content.innerHTML = `
          <div class='flex items-center space-x-4 text-left'>
            <img src='kilua.jpg' alt='Foto Saya' class='w-32 h-32 rounded-lg shadow-lg'>
            <div>
              <h2 class='text-2xl font-bold text-yellow-400'>Tentang Saya</h2>
              <p class='text-gray-300'>Halo, saya kilua. Saya seorang pembunuhan dengan kecepatan yang dahsyat.</p>
            </div>
          </div>
        `;
      } else if (page === "contact") {
        content.innerHTML = `
          <h2 class='text-2xl font-bold text-yellow-400'>Kontak Kami</h2>
          <div class='mt-4'>
            <form class='space-y-4'>
              <div>
                <label for='name' class='block font-semibold'>Nama</label>
                <input type='text' id='name' class='w-full p-2 bg-gray-700 text-white border border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500'>
              </div>
              <div>
                <label for='email' class='block font-semibold'>Email</label>
                <input type='email' id='email' class='w-full p-2 bg-gray-700 text-white border border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500'>
              </div>
              <div>
                <label for='message' class='block font-semibold'>Pesan</label>
                <textarea id='message' class='w-full p-2 bg-gray-700 text-white border border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500'></textarea>
              </div>
              <button class='w-full p-3 bg-yellow-500 text-gray-900 font-bold rounded-lg hover:bg-yellow-400 transition'>Kirim</button>
            </form>
          </div>
        `;
      }
    }
  </script>
</body>
</html>
