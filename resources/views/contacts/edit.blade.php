@extends('layout.app')

@section('content')
    <form action="{{route('contacts.update', $contact->id)}}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" class="form-control" name="first_name" value="{{$contact->first_name}}">
        </div>
        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" class="form-control" name="last_name" value="{{$contact->last_name}}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection