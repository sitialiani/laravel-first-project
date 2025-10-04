<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>Demo Upgrading CRUD Laravel</title> 
@vite(['resources/css/app.css', 'resources/js/app.js'])  
<style>
    .container {
        box-shadow: 0 4px 16px rgba(0,0,0,0.08);
        border-radius: 12px;
        background: #bfdbfe; 
        margin-top: 40px;
        padding: 32px;
    }
</style>
</head> 
<body class="bg-gray-100 min-h-screen flex items-center justify-center"> 
<div class="container">
    {{-- Form demo langsung --}}
    <form method="POST" action="#" class="space-y-6">
        @csrf
        <h2 class="text-2xl font-bold mb-4 text-black">Tambah Post</h2>
        <div>
            <label for="judul" class="block text-sm font-medium text-black">Judul</label>
            <input type="text" name="judul" id="judul" 
                class="mt-1 block w-full rounded-md border-2 border-gray-400 bg-white text-black placeholder-gray-400 shadow-lg focus:border-blue-500 focus:ring-blue-500" 
                placeholder="Masukkan judul" required>
        </div>
        <div>
            <label for="konten" class="block text-sm font-medium text-black">Konten</label>
            <textarea name="konten" id="konten" rows="4" 
                class="mt-1 block w-full rounded-md border-2 border-gray-400 bg-white text-black placeholder-gray-400 shadow-lg focus:border-blue-500 focus:ring-blue-500" 
                placeholder="Masukkan konten" required></textarea>
        </div>
        <button type="submit" class="bg-black text-white px-6 py-2 rounded hover:bg-gray-800">Simpan</button>
    </form>
</div> 
</body>