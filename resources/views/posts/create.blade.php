@extends('layouts.app') 
@section('content') 
<h1>Tambah Post</h1> 
<form action="{{ route('posts.store') }}" method="POST"> 
@csrf 
<label>Judul</label><br> 
<input type="text" name="title"><br><br> 
<label>Konten</label><br> 
<textarea name="content"></textarea><br><br> 
<button type="submit">Simpan</button> 
</form> 
@endsection