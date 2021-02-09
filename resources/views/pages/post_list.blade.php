<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <a href="{{route('post.create')}}" class="btn btn-success">Add New</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Image</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                        <tr>
                            <th scope="row">{{$loop->index+1}}</th>
                            <td>{{$post->name}}</td>
                            <td>{{$post->image->path}}</td>
                            <td>
                                <a href="{{route('post.edit', $post->id)}}" class="btn btn-info">Edit</a>
                                <form action="{{route('post.destroy', $post->id)}}" method="post"
                                    style="display: inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>