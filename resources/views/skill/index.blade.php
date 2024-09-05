@extends('layouts.web')
@section('content')
<h2>Skill Summary</h2>

@foreach($skills as $skill)
<div class="card my-2">
    <div class="card-body">
        <h3>{{$skill->name}} - {{$skill->rating}}</h3>
        <a href="{{route('skill.edit',$skill)}}" class="btn btn-primary">Edit</a>
        <form action="{{route('skill.destroy',$skill)}}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
</div>
@endforeach
<a href="{{route('skill.create')}}" class="btn btn-primary mt-4">Add Another Skill</a>
@endsection