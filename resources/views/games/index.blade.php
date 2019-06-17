@extends('layout.app')

@section('content')
    <h1>Best GBA Games based on Digital Trends</h1>
    <p>Steven Petite &nbsp;&nbsp; <small>Posted on April 11, 2019</small></p>

    <h5>The Game Boy Advance brought Nintendo’s iconic platform of handhelds to the 32-bit era. Its massive library of original games and its stellar selection of Super Nintendo classics make it one of, if not the, greatest Nintendo handheld of all time. The best GBA games have cemented the console’s place in history.</h5>

    @if(count($games) > 0)
      @foreach($games as $game)
        <div class="card my-4">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="{{URL::to('/')}}/images/{{$game->image}}" class="card-img" alt="{{$game->title}}">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h3 class="card-title"><a href="games/{{$game->id}}">{{$game->title}}</a></h3>
                  <p class="card-text">
                     @if(strlen($desc = $game->description) > 200)
                        {{ substr($desc, 0, 300) }} <small><a href="games/{{$game->id}}">Read more</a></small>
                     @else
                        {{ $desc }}
                     @endif
                  </p>
                  <p class="card-text" style="font-size: 14px">Rated by {{$game->rate}} <small class="text-muted"> {{$game->created_at}}</small></p>
                </div>
              </div>
            </div>
        </div>
        @endforeach
    @else 
        <p>No data</p>
    @endif

@endsection