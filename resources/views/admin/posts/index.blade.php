@extends('layouts.app');
@section('titolo', 'homepage|ADMIN')
    
@section('content')

    <div class="list-group ">

        @foreach ($posts as $post)
        
        <a href="{{route('admin.posts.show', $post->id)}}" class="list-group-item list-group-item-action d-flex justify-content-between text-center">{{$post->title}}
        </a>
        <div class="btn_box d-flex justify-content-start align-items-center">
            <a href="" class="btn btn-warning">edit</a>
            <form action="" class="d-flex mt-3">
                @csrf
                @method('DELETE')
                <input type="submit" value='delete' class="btn btn-danger">
            </form>
        </div>


        @endforeach


    </div>
@endsection