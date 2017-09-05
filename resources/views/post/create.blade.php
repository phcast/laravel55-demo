<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{--<link rel="stylesheet" href="css/app.css">--}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="padding-top:50px">
    <div class="container">
        <form method="post" action="/posts">
            {{ csrf_field()  }}
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>

            <div class="form-group">
                <label for="body">Body:</label>
                <textarea class="form-control" id="body" name="body"></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Post</button>
            </div>

            @if(count($errors))
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </form>
    </div>
</body>
</html>