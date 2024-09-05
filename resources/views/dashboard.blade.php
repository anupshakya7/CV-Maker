@extends('layouts.web')
@section('content')
<div class="container">
    <h2>Welcome to CV Builder</h2>
    <a href="{{route('user-detail.create')}}" class="btn btn-primary">Build your Resume Now</a>
</div>
@endsection