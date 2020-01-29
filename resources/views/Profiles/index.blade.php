@extends('profiles.layout')
@section('content')
<div class="card">
   <div class="card text-center">
        <h1>Profiles Table</h1>
   </div> 
  <div class="card-body">
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
             <p>{{ $message }}</p>
         </div>
    @endif
    <table class="table table-bordered table-primary">
        <thead class = 'table-dark table-bordered'>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Gender</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">Nationality</th>
                <th scope="col">Dateofbirth</th>
                <th scope="col">education</th>
                <th scope="col">Contact</th>
            </tr>
        </thead>
        <tbody>
            @foreach($profiles as $profile)
                <tr>
                    <th scope="row">{{ $profile->id }}</th>
                    <td>{{$profile->name}}</td>
                    <td>{{$profile->gender}}</td>
                    <td>{{ $profile->phone}}</td>
                    <td>{{ $profile->email}}</td>
                    <td>{{ $profile->address }}</td>
                    <td>{{ $profile->nationality }}</td>
                    <td>{{ $profile->dateofbirth  }} </td>
                    <td>{{ $profile->education }} </td>
                    <td>{{ $profile->contact }} </td>
                </tr>
            @endforeach   
            </tr>

            
        </tbody>
    </table>
    <div>
        <a href="{{ route('profiles.create') }}" class="btn btn-primary" > Add Profile</a>
        <a href="{{ route('export') }}" class="btn btn-primary float-right" > Downlaod csv file</a>

    </div>
  </div>
</div>
    
@endsection