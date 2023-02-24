<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Game Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    
<div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col-md-12">

                <h2>GAME LIST</h2>
                <div style="margin: right 10%;float: right;">
                    <a href="{{url('add-game')}}" class="btn btn-primary" >Add Students</a>
                  </div>
                <table class="table">

                <thead>
                        <tr>
                            <th>Game ID</th>
                            <th>Name</th>
                            <th>Descriptions</th>
                            <th>Date Created</th>
                            <th>Action</th>
                        </tr>
                        
                    </thead>
                 
                    <tbody>
                        @php
                        $i = 1; 
                        @endphp
                    @foreach ($data as $gm)
                        <tr>
                             <td>{{$i++}}</td>
                             <td>{{$gm->name}}</td>
                             <td> {{$gm->description}}</td>
                             <td>{{$gm->created_at}}</td>
                             <td><a href="{{url('edit-game/'.$gm->id)}}" class="btn btn-primary" >Edit</a> || 
<a href="{{url('delete-game/'.$gm->id)}}" class="btn btn-danger" >Delete</a></td>
                         </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</body>
</html>