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
                Edit
            </div>
            <div class="card-body">
            <form action="/posts/{{$date->id}}" method="post">
                @csrf
                @method('PUT')
                   <div class="mb-3">
                       <label  class="form-label">Name</label>
                       <input type="text" class="form-control" name="name" value="{{$date->name}}"  placeholder="Name">
                 </div>
                 <div class="mb-3">
                     <label  class="form-label">Description</label>
                     <textarea class="form-control" rows="3" name="description" >{{$date->description}}</textarea>
                 </div>
                 <div>
                    <button type="submit" class="btn btn-primary" >Sudmit</button>
                    <a href="/posts" type="button"  class="btn btn-warning"> Back</a>
                 </div>
             </form>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>