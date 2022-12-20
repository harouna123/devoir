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
  <form  method="POST" action="{{route('caisse.update',$caisse)}}" >
    @csrf
    @method('patch')
    
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">nom_caisse:</label>
          <input type="text" name="nom_caisse" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$caisse->nom_caisse}}">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">prenom_caisse:</label>
          <input type="text" name="prenom_caisse" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$caisse->prenom_caisse}}">
        </div>

        <select class="form-select" aria-label="Default select example" name="niveau">
            <option selected value="{{$caisse->niveau}}">{{$caisse->niveau}}</option> 
            <option value="plein">plein</option>
            <option value="intermediaire">intermediaire</option>
            <option value="debutant">debutant</option>
          </select>  
        <button type="submit" class="btn btn-primary">Submit</button>
      </form> 

  </div>
          
         

        
   
</body>
</html>