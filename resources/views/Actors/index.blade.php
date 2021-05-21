@extends('movies.layout')
 
@section('content')
<div class="row bg-gray-400">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 class=" text-5xl text-gray-900">Actor </h2>
        </div>

        <br>
        <br>
        <div class="pull-right mb-3">
            <a class="btn btn-success" href="{{ route('actors.create') }}"> Create New Actor
                </a>
                <a class="btn btn-primary" href="{{ route('movies.index') }}">Back</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>successfully</p>
    </div>
@endif

<table class="table table-bordered table-responsive-lg">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Bio</th>
        <th>Birthdate</th>
        <th>Listmovies</th>
        <th>Image</th>

        <th width="280px">Action</th>
    </tr>
    @foreach ($actors as $actor)
        <tr>
            <td>{{++$i}}</td>
            <td>{{$actor->name}}</td>
            <td>{{$actor->bio}}</td>
            <td>{{$actor->birthdate}}</td>
            <td>{{$actor->listmovies}}</td>
           <td><img width="100" src="/img/{{$actor->image}}" /></td>
            

            <td>
                <form action="{{route('actors.destroy',$actor->id)}}" method="POST">
                    <button class="btn btn-success">
                   <a href="{{route('actors.edit',$actor->id)}}" title="show">
                        Edit</a>
</button>
                    
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger ml-3">
                        Delete
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

@endsection