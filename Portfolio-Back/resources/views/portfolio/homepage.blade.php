@extends('layouts.public')
@section('title', 'Home')

@section('content')
    <div class="container">
        <h1>Benvenuto nel sito</h1>
        <a href="{{route ('dashboard')}}">vai alla dashboard</a>
        @foreach ($projects as $project)
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $project['titolo'] }}</h5>
                    <p class="card-text">{{ $project['descrizione'] }}</p>
                    @if ($project['link_git_hub'] != '')
                        <a href="{{ $project['link_git_hub'] }}">Link git Hub</a>
                    @endif
                    <h3>Techologie implementate</h3>
                    <ul class="list-group list-group-flush" > 
                        @foreach ( $project->technologies as $technology )
                            <li class="list-group-item " > <h5  class="{{ strtolower($technology['tecnologia'])}} label-tech ">{{ $technology['tecnologia'] }}</h5></li>
                        @endforeach
                        
                    </ul>
                    {{-- <a href="/{{ $project['id'] }}">Maggiori informazioni</a> --}}
                </div>
            </div>
        @endforeach
    </div>


@endsection
