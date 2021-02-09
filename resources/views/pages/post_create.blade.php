<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-4">
                <a href="{{route('post.index')}}" class="btn btn-success">All Posts</a>
                <form action="{{route('post.store')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Post Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Add New</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>