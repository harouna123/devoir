<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">nom_caisse</th>
      <th scope="col">nom_etudiant</th>
      <th scope="col">date_debut</th>
      <th scope="col">date_fin</th>
      <th scope="col">heure_encaissement</th>
      <th scope="col">modifier</th>
      <th scope="col">suprimer</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($encaisser as $un_encaissement)
    <tr>
        <td>  {{$un_encaissement->id}}</td>
        <td>  {{$un_encaissement->caisse_id}}</td>
        <td>  {{$un_encaissement->etudiant_id}}</td>
        <td>  {{$un_encaissement->date_debut}}</td>
        <td>  {{$un_encaissement->date_fin}}</td>
        <td>  {{$un_encaissement->heure_encaisse}}</td>
       <td><a href="{{route('encaisser.edit',$un_encaissement)}}"><button type="button" class="btn btn-primary">modifier</button></a></td>
       <td>
          <form action="{{route('encaisser.destroy',$un_encaissement)}}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">supprimer</button>
          </form>
       </td>

    </tr>
    @endforeach
  
  
  </tbody>
</table>
    
</div>
