
@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-pink-50 py-10">
    <div class="max-w-lg mx-auto bg-white rounded-xl shadow-lg p-8">
        <h1 class="text-2xl font-bold text-pink-500 mb-6">Tambah Post</h1>
        <form action="{{ route('posts.store') }}" method="POST" class="space-y-5">
            @csrf
            <div>
                <label class="block text-pink-700 font-semibold mb-1">Judul</label>
                <input type="text" name="title" class="w-full border border-pink-200 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-pink-300" required>
            </div>
            <div>
                <label class="block text-pink-700 font-semibold mb-1">Konten</label>
                <textarea name="content" class="w-full border border-pink-200 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-pink-300" rows="4" required></textarea>
            </div>
            <button type="submit" class="w-full bg-pink-400 hover:bg-pink-500 text-white font-semibold px-4 py-2 rounded transition">Simpan</button>
        </form>
    </div>
</div>
@endsection
