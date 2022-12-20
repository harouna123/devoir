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
  <form  method="POST" action="{{route('etudiant.update',$etudiant)}}" >
    @csrf
    @method('patch')
    
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">nom:</label>
          <input type="text" name="nom" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$etudiant->nom}}">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">prenom:</label>
          <input type="text" name="prenom" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$etudiant->prenom}}">
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">naissance:</label>
          <input type="date" name="naissance" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$etudiant->naissance}}">
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">lieu:</label>
          <input type="text" name="lieu" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$etudiant->lieu}}">
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">sexe:</label>
          <input type="text" name="sexe" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$etudiant->lieu}}">
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">diplome:</label>
          <input type="text" name="diplome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$etudiant->diplome}}">
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">nom_tuteur:</label>
          <input type="text" name="nom_tuteur" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$etudiant->nom_tuteur}}">
        </div>

        <select class="form-select" aria-label="Default select example" name="classe_id">
            <option selected value="{{$etudiant->classe->id}}">{{$etudiant->classe->nom_class}}</option>
                @foreach($classe as $une_classe)
            <option value="{{$une_classe->id}}">{{$une_classe->nom_class}}</option>
             @endforeach
          </select>

        

      
        <button type="submit" class="btn btn-primary">Submit</button>
      </form> 

  </div>
          
         

        
   
</body>
</html>