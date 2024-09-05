@extends('layouts.web')
@section('content')
<h2>Experience Summary</h2>

@foreach($experiences as $experience)
<div class="card my-2">
    <div class="card-body">
        <h3>{{$experience->job_title}}</h3>
        <h4 class="card-title">
            {{$experience->employer}}
            ({{\Carbon\Carbon::parse($experience->start_date)->format('Y')}} -
            {{\Carbon\Carbon::parse($experience->end_date)->format('Y')}})
        </h4>
        <h5>{{$experience->city}}, {{$experience->state}}</h5>
        <a href="{{route('experience.edit',$experience)}}" class="btn btn-primary">Edit</a>
        <form action="{{route('experience.destroy',$experience)}}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
</div>
@endforeach
<a href="{{route('experience.create')}}" class="btn btn-primary mt-4">Add Another Experience</a>
<a href="{{route('skill.index')}}" class="btn btn-primary mt-4">Skills</a>
@endsection