<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/@coreui/coreui@5.1.2/dist/css/coreui.min.css" rel="stylesheet"
        integrity="sha384-lBISJVJ49zh34fnUuAaSAyuYzQ2ioGvhm4As4Z1JFde0kVpaC1FFWD3f9adpZrdD" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />
    <style>
        .active {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        @if(auth()->user())
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb p-3">
                <button class="btn btn-primary">Preview</button>
                <li class="breadcrumb-item {{request()->is('user-detail') ? 'active':''}} "><a
                        href="{{route('user-detail.index')}}">User Detail</a></li>
                <li class="breadcrumb-item {{request()->is('education') ? 'active':''}}"><a
                        href="{{route('education.index')}}">Education</a></li>
                <li class="breadcrumb-item {{request()->is('experience') ? 'active':''}}"><a
                        href="{{route('experience.index')}}">Work History</a></li>
                <li class="breadcrumb-item {{request()->is('skill') ? 'active':''}}"><a
                        href="{{route('skill.index')}}">Skills</a></li>
            </ol>
        </nav>
        @endif
        @yield('content')
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@coreui/coreui@5.1.2/dist/js/coreui.bundle.min.js"
        integrity="sha384-yoEOGIfJg9mO8eOS9dgSYBXwb2hCCE+AMiJYavhAofzm8AoyVE241kjON695K1v5" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        $(document).ready(function(){
            @if(session('success'))
                toastr.success("{{session('success')}}");
            @endif

            @if(session('error'))
                toastr.error("{{session('error')}}");
            @endif
        });
    </script>
</body>

</html>