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
      <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
    </nav>
        <div class="pull-right">
            <a class="btn btn-primary" href="/view_movies">Back</a>
            {{-- <a class="btn btn-primary" href="/view_actor">Actors</a> --}}
                   
        </div>
    </div>
  </header>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>successfully</p>
    </div>
@endif

<table class="table table-bordered table-responsive-lg">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Number Seat</th>
        <th>Seat NO.</th>
        
    </tr>
    @foreach ($tickets as $ticket)
        <tr>
            <td>{{++$i}}</td>
            <td>{{$ticket->name}}</td>
            <td>{{$ticket->number}}</td>
            <td>{{$ticket->seats}}</td>
                    

        </tr>
    @endforeach
</table>

@endsection