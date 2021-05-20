@extends('movies.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Movie App</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-danger" href="/welcome">Back</a>
                <a href="{{ route('logout') }}" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                    Logout
                </a>  
                <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;" > 
                    {{ csrf_field() }}
                </form>
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
                <form action="" method="POST">
                    <a class="btn btn-primary" href="">Booking</a>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $movies->links() !!}
      
@endsection