<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">nom</th>
      <th scope="col">prenom</th>
      <th scope="col">naissance</th>
      <th scope="col">sexe</th>
      <th scope="col">lieu</th>
      <th scope="col">diplome</th>
      <th scope="col">nom_tuteur</th>
      <th scope="col">classe_id</th>
      <th scope="col">modifier</th>
      <th scope="col">suprimer</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($etudiant as $un_etudiant)
    <tr>
        <td>  {{$un_etudiant->id}}</td>
        <td>  {{$un_etudiant->nom}}</td>
        <td>  {{$un_etudiant->prenom}}</td>
        <td>  {{$un_etudiant->naissance}}</td>
        <td>  {{$un_etudiant->sexe}}</td>
        <td>  {{$un_etudiant->lieu}}</td>
        <td>  {{$un_etudiant->diplome}}</td>
        <td>  {{$un_etudiant->nom_tuteur}}</td>
        <td>  {{$un_etudiant->classe->nom_class}}</td>
        <td>  {{$un_etudiant->frais_amical}}</td>

  <td><a href="{{route('etudiant.edit',$un_etudiant)}}"><button type="button" class="btn btn-primary">modifier</button></a></td>
       <td>
          <form action="{{route('etudiant.destroy',$un_etudiant)}}" method="post">
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
