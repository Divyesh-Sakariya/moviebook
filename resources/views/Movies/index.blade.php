@extends('movies.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Movie App</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('movies.create') }}">Add Movie</a>
                <a class="btn btn-primary" href="/">Back</a>
            </div>
        </div>
    </div>
   
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