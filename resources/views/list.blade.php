<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css
">
</head>
<body>
<div class="card-tools">
    <form action="{{url("/list")}}" method="get">

        <div class="input-group input-group-sm" style="width: 550px;">

            <input type="text" value="{{app("request")->input("search")}}" name="search" class="form-control float-right" placeholder="Search">

            <div class="input-group-append">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </div>

    </form>

</div>



<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Author</th>
        <th scope="col">ISBN</th>
        <th scope="col">Pub_year</th>
        <th scope="col">Available</th>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $item)


    <tr>

        <th scope="row">{{$item->id}}</th>
        <td>{{$item->title}}</td>
        <td>{{$item->author_id}}</td>
        <td>{{$item->ISBN}}</td>
        <td>{{$item->pub_year}}</td>
        <td>{{$item->available}}</td>
    </tr>
    @endforeach
    </tbody>
</table>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js
"></script>
</body>


</html>
