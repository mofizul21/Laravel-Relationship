<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <a href="{{route('product.create')}}" class="btn btn-success">Add New</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Category</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <th scope="row">{{$loop->index+1}}</th>
                            <td>{{$product->name}}</td>
                            <td>
                                @foreach ($product->categories as $category)
                                    <span class="badge bg-success">{{$category->name}}</span>
                                @endforeach    
                            </td>
                            <td>
                                <a href="{{route('product.edit', $product->id)}}" class="btn btn-info">Edit</a> 
                                <form action="{{route('product.destroy', $product->id)}}" method="post" style="display: inline-block">
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