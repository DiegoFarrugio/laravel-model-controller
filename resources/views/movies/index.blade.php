@extends('layouts.app')

@section('page-title', 'Home')

@section('main')
    <div class="container">
        <h1 class="text-center">
            Movie
        </h1>
    </div>
    
    <div class="container">
        <div class="row">
            @foreach ($movies  as $movie)

                        <div class="card-body h-100 ">
                          <h5 class="card-title">{{ $movie->title }}</h5>
                            <p class="card-text">
                                <ul>
                                    <li>
                                        Titolo originale:{{ $movie->original_title }}
                                    </li>
                                    <li>
                                        Data di uscita:{{ $movie->date }}
                                    </li>
                                    <li>
                                        Voto: {{ $movie->vote }}
                                    </li>
                                </ul>
                            </p>
                          <a href="{{ route('movies.show',['id'=> $movie->id]) }}" class="card-link">Vai al film</a>
                        <hr>
                </div>

                
            @endforeach
        </div>
    </div>
@endsection

