<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">nom_caisse</th>
      <th scope="col">prenom_caisse</th>
      <th scope="col">niveau</th>
      
      <th scope="col">modifier</th>
      <th scope="col">suprimer</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($caisse as $une_caisse)
    <tr>
        <td>  {{$une_caisse->id}}</td>
        <td>  {{$une_caisse->nom_caisse}}</td>
        <td>  {{$une_caisse->prenom_caisse}}</td>
        <td>  {{$une_caisse->niveau}}</td>
       
       <td><a href="{{route('caisse.edit',$une_caisse)}}"><button type="button" class="btn btn-primary">modifier</button></a></td>
       <td>
          <form action="{{route('caisse.destroy',$une_caisse)}}" method="post">
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
