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
<br>
  <div class="container">
  <form  method="POST" action="{{route('encaisser.update',$encaisser)}}" >
    @csrf
    @method('patch')

    <select class="form-select" aria-label="Default select example" name="caisse_id">
            <option selected value="{{$encaisser->caisse_id}}">{{$encaisser->caisse_id}}</option>
                @foreach($caisse as $une_caisse)
            <option value="{{$une_caisse->id}}">{{$une_caisse->prenom_caisse}} {{$une_caisse->nom_caisse}}</option>
             @endforeach
          </select><br>

          <select class="form-select" aria-label="Default select example" name="etudiant_id">
            <option selected value="{{$encaisser->etudiant_id}}">{{$encaisser->etudiant_id}}</option>
                @foreach($etudiant as $un_etudiant)
            <option value="{{$un_etudiant->id}}">{{$un_etudiant->prenom}} {{$un_etudiant->nom}}</option>
             @endforeach
          </select><br>
    
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">date_debut:</label>
          <input type="date" name="date_debut" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$encaisser->date_debut}}">
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">date_fin:</label>
          <input type="date" name="date_fin" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$encaisser->date_fin}}">
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">heure_encaissement:</label>
          <input type="time" name="heure_encaisse" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$encaisser->heure_encaisse}}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form> 

  </div>
          
         

        
   
</body>
</html>