@extends('layouts.app')
@section('titolo', 'modifica')
    

@section('content')
    <form method="post" action="{{route('admin.posts.update', $post->id)}}">
        @csrf
        @method('PUT')
        <div class="mb-3">
        <label for="titolo" class="form-label">Titolo</label>
        <input type="text" class="form-control" id="titolo" aria-describedby="emailHelp" name="title" value="{{$post->title}}">
        <label for="descrizione" class="form-label">articolo</label>
        <textarea name="article" id="descrizione" cols="30" rows="10" class="form-control">{{$post->article}}</textarea>  
        </div>
        <button type="submit" class="btn btn-primary">crea</button>
    </form>
    
@endsection