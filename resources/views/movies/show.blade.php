@extends('layouts.app')

@section('page-title', 'Home')

@section('main')
<div class="d-flex justify-content-center">
    <h1>
        {{ $movie->title }}
    </h1>
</div>
    
    
    <div class="row ">

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
                  <a href="{{ route('movies.index')}}" class="card-link">Torna a tutti film</a>
                </div>

    </div>
@endsection


