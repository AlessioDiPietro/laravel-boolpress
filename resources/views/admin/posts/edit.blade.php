@extends('layouts.app')
@section('titolo', 'modifica')
    

@section('content')
    <form>
        <div class="mb-3">
        <label for="titolo" class="form-label">Titolo</label>
        <input type="text" class="form-control" id="titolo" aria-describedby="emailHelp" name="title">
        <label for="descrizione" class="form-label">articolo</label>
        <textarea name="article" id="descrizione" cols="30" rows="10" class="form-control"></textarea>  
        </div>
        <button type="submit" class="btn btn-primary">crea</button>
    </form>
    
@endsection