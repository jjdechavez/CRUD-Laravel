@extends('layout.app')

@section('content')
<div class="row">
    <div class="col-sm col-md-3">
        <form action="{{route('contacts.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="first_name">First Name:</label>
                <input type="text" class="form-control" name="first_name">
                </div>
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control" name="last_name">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email">
            </div>
                <input type="submit" class="btn btn-primary btn-block mb-3" value="Add Contact">
        </form>
    </div>

        <div class="col-sm col-md-9">
            <table class="table table-stripe table-responsive">
                <thead class="thead-dark">
                    <tr>
                        <th class="col">#</th>
                        <th class="col">Name</th>
                        <th class="col">Email</th>
                        <th class="col">Option</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($contacts as $contact)
                        @if($contact->count() > 0)
                        <tr>
                            <td class="w-25">{{$contact->id}}</th>
                            <td class="w-25">{{$contact->first_name}} {{$contact->last_name}}</td>
                            <td class="w-25">{{$contact->email}}</td>
                            <td class="w-25 d-flex">
                                <a href="{{route('contacts.edit', $contact->id)}}" class="btn btn-success mr-1"><i class="fas fa-edit"></i></a>
                                <form action="{{route('contacts.destroy', $contact->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger mr-1" type="submit"><i class="fas fa-trash"></i></button>
                                </form>
                                <a href="{{route('contacts.show', $contact->id)}}" class="btn btn-primary"><i class="far fa-eye"></i></a>
                            </td>
                        @else
                            <td>No Data</td>
                        @endif
                        @endforeach
                        </tr>
                    </tbody>
            </table>
        </div>
    </div>
</div>

@endsection