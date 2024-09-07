<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body {
            font-size: 17px;
        }

        h2 {
            font-weight: 100;
            padding: 20px 0;
            border-top: 1px solid grey;
            border-bottom: 1px solid grey;
        }

        .container {
            width: 70%;
            margin: 0 auto
        }
    </style>
    <title>Resume</title>
</head>

<body>
    <div class="container">
        {{-- User Details --}}
        <section class="user-details">
            <h2>{{$user->detail->fullname}}</h2>
            <p>Email: {{$user->detail->email}}</p>
            <p>Phone: {{$user->detail->phone}}</p>
            <p>Address: {{$user->detail->address}}</p>
        </section>

        <section class="summary">
            <h2>Summary</h2>
            <p>
                <strong>{{$user->detail->summary}}</strong>
            </p>
        </section>

        {{-- Education --}}
        <section class="education">
            <h2>Education</h2>
            @foreach($user->education as $education)
            <h4>Degree: {{$education->degree}}</h4>
            <p>School: {{$education->school_name}}</p>
            <p>Start Date: {{$education->graduation_start_date}}</p>
            <p>Graduation Date: {{$education->graduation_end_date}}</p>
            @endforeach
        </section>

        {{-- Experience --}}
        <section class="experience">
            <h2>Work History</h2>
            @foreach ($user->experience as $experience)
            <h3>Job Title: {{$experience->job_title}}</h3>
            <p>Employeer: {{$experience->employer}}</p>
            <p>Start Date: {{$experience->start_date}}</p>
            <p>End Date: {{$experience->end_date}}</p>
            @endforeach
        </section>

        {{-- Skill --}}
        <section class="skill">
            <h2>Skills</h2>
            @foreach($user->skill as $skill)
            <h4>{{$skill->name}}({{$skill->rating}} out of 10)</h4>
            @endforeach
        </section>
    </div>

</body>

</html>