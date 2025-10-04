@extends('layouts.app') 
@section('content') 
<h1>Edit Post</h1> 
<form action="{{ route('posts.update', $post->id) }}" method="POST"> 
@csrf 
@method('PUT') 
<label>Judul</label><br> 
<input type="text" name="title" value="{{ $post->title }}"><br><br> 
<label>Konten</label><br> 
<textarea name="content">{{ $post->content }}</textarea><br><br> 
<button type="submit">Update</button> 
</form> 
@endsection