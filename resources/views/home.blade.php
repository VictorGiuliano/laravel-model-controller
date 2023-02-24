<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/js/app.js')
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-between">
        @foreach ($movies as $movie)
      <div class="col-3 mx-2">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{$movie['title']}}</h5>
          <h6 class="card-subtitle mb-2 text-muted">{{$movie['original_title']}}</h6>
          <p class="card-text">{{$movie['nationality']}}</p>
          <span href="#" class="card-link">{{$movie['date']}}</span>
          <span href="#" class="card-link">{{$movie['vote']}}</span>
        </div>
      </div>
      </div>
      @endforeach
        </div>
    </div>
</body>
</html>