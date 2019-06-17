@extends('layout.app')

@section('content')
    <form action="{{route('games.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" placeholder="Title">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="" cols="20" rows="5" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="rate">Rated</label>
            <input type="text" class="form-control" name="rate">
        </div>
        <div class="form-group">
            <input type="file" name="image">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection