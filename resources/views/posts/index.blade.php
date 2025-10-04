
@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-pink-50 py-10">
    <div class="max-w-2xl mx-auto bg-white rounded-xl shadow-lg p-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-pink-500">Daftar Post</h1>
            <a href="{{ route('posts.create') }}" class="bg-pink-400 hover:bg-pink-500 text-white font-semibold px-4 py-2 rounded transition">Tambah Post</a>
        </div>
        <ul class="space-y-4">
            @foreach ($posts as $post)
                <li class="bg-pink-100 rounded-lg p-4 flex flex-col md:flex-row md:items-center justify-between shadow">
                    <div>
                        <span class="block text-lg font-semibold text-pink-700 underline">{{ $post->title }}</span>
                        <span class="block text-gray-700">{{ $post->content }}</span>
                    </div>
                    <div class="flex space-x-2 mt-2 md:mt-0">
                        <a href="{{ route('posts.edit', $post->id) }}" class="bg-pink-300 hover:bg-pink-400 text-white px-3 py-1 rounded transition">Edit</a>
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-pink-200 hover:bg-pink-400 text-pink-800 hover:text-white px-3 py-1 rounded transition">Hapus</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
