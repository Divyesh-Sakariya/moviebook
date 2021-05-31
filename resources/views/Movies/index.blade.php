@extends('movies.layout')
 
@section('content')
<header class="text-gray-600 body-font bg-gray-400">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
      <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
          <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
        </svg>
        <span class="ml-3 text-xl">Movie Application</span>
      </a>
      <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
        <a href="{{ route('movies.create') }}" class="btn btn-success">Add Movie</a>
        {{-- <a href="{{ route('actors.create') }}" class="btn btn-success ml-6">Add Actor</a> --}}
        <a href="{{ route('actors.index') }}" class="btn btn-success ml-6">Show Actor</a>
        <a href="{{ route('theatre.index') }}" class="btn btn-success ml-6">Show Theatre</a>
        <a href="/" class="btn btn-primary ml-6">Back</a>
        
      </nav>
      </div>
  </header>
       
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Movie Name</th>
            <th>Overview</th>
            <th>Release year</th>
            <th>Runtime</th>
            <th>Cast</th>
            <th>Image</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($movies as $movie)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $movie->movie_name }}</td>
            <td>{{ $movie->overview }}</td>
            <td>{{ $movie->year }}</td>
            <td>{{ $movie->runtime }}</td>
            <td>{{ $movie->cast }}</td>
            <td><img width="100" src="/img/{{$movie ->image}}" /></td>
            <td>
                <form action="{{ route('movies.destroy',$movie->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('movies.show',$movie->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('movies.edit',$movie->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $movies->links() !!}
      
@endsection