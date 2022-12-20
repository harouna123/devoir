<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <div class="container">
    <form method="post" action="{{route('classe.update',$classe)}}">
        @csrf
        @method('patch')
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">nom_classe:</label>
    <input type="text" name="nom_class" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$classe->nom_class}}">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">frais_inscription:</label>
    <input type="number" name="frais_inscription" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$classe->frais_inscription}}">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">mensualite:</label>
    <input type="number" name="mensualite" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$classe->frais_inscription}}">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">frais_tenu:</label>
    <input type="number" name="frais_tenu" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$classe->frais_tenu}}">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">frais_amical:</label>
    <input type="number" name="frais_amical" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$classe->frais_amical}}">
  </div>

  

 
  <button type="submit" class="btn btn-primary">Submit</button>
</form> 

    </div>
   
</body>
</html>