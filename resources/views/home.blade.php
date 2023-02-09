@extends('layouts/app')

@section('main-content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>
          Movies
        </h1>
      </div>
    </div>
    <div class="row">
      @foreach ($movies as $movie)
      {{-- @dd($movie) --}}
      <div class="col-3">
        <div class="card">
          <img src="{{ $movie->cover }}" alt="{{ $movie->title }}" class="img-fluid">
          <h2>
            {{ $movie->title }}
          </h2>
          <h4>
            {{ $movie->original_title }}
          </h4>
          <p>
            {{ $movie->date }}
          </p>
        </div>
      </div>
      
      @endforeach
    </div>
  </div>


@endsection