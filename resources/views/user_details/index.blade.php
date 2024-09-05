@extends('layouts.web')
@section('content')
<h2>User Detail</h2>

<div class="card my-2">
    <div class="card-body">
        <h3>{{$detail->fullname}} - {{$detail->email}}</h3>
        <h5>{{$detail->phone}}</h5>
        <p>{{$detail->address}}</p>
        <a href="{{route('user-detail.edit',$detail)}}" class="btn btn-primary">Edit</a>
        <form action="{{route('user-detail.destroy',$detail)}}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
</div>
@endsection