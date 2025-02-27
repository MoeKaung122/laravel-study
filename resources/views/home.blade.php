<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="card">
           
            <div class="card-header" style="text-align:center">
                Content
               
            </div>
            <br>
            <div class="container"> <a href="/posts/create" type="button" class="btn btn-success">Create New</a></div>
            <br>
            <div class="card-body">
                
                 @foreach ($date as $post)
                     <div class="">
                    <h5>{{$post->name}}</h5>
                    <p>{{$post->description}}</p>
                    <div class="btn-group">
                          <a href="/posts/{{$post->id}}" class="btn btn-primary" >View</a>
                          <a href="/posts/{{$post->id}}/edit" class="btn btn-warning" >Edit</a>
                          <form action="/posts/{{$post->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                             </form>
                    </div>
                 </div><hr>
                @endforeach
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>