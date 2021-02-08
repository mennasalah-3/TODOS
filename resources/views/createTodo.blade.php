<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Create</title>
</head>
<body>
    <div class="row justify-content-center">
    <div class="col-md-8">
    <div class="card card-default">
    <div class="card-header">Create Todo</div>
    <div class="card-header">
   <form action="/store-todo" method="POST">
     @csrf
     <div class="form-group">
    <label for="title">Title</label>
    </div>
    <div class="form-group">
    <input type="text" id="title" name="title"><br>
    </div>
    <div class="form-group">
    <textarea name="discription" id="discription"  rows="10"></textarea>
    </div>
    <div class="form-group text-center">
    <button type="submit" class="btn btn-success">Submit</button>
    </div>
</form> 
</div>
</div>
</div>
</div>
</body>
</html>