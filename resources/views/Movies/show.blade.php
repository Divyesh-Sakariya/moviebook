@extends('movies.layout')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Movie</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('movies.index') }}"> Back</a>
            </div>
        </div>
   </div>
    
    <div class="movie-info border-b border-gray-800 bg-gray-400 mt-10">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <div class="flex-none">
                <img src="/img/{{$movie ->image}}" alt="poster" class="w-64 lg:w-96">
            </div>
            <div class="md:ml-24">
                <h2 class="text-4xl mt-4 md:mt-0 font-semibold">{{ $movie->movie_name }}</h2>
                <div class="flex flex-wrap items-center text-black text-sm mt-5">
                                    
                    <span>{{ $movie->year }}</span>
                    <span class="mx-2">|</span>
                    <span>{{ $movie->runtime }}</span>
                </div>

                <p class="text-gray-800 mt-8">
                    {{ $movie->overview }}
                </p>

                <div class="mt-5">
                    <h4 class="text-black font-semibold">Cast Member</h4>
                    <div class="flex mt-2">
                       
                            <div class="mr-8">
                                <div>{{ $movie->cast }}</div>
                               
                            </div>
                        </div>
                            
                </div>
            </div>
        </div>
    </div>               

@endsection