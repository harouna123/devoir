<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">nom_class</th>
      <th scope="col">frais_inscription</th>
      <th scope="col">mensualite</th>
      <th scope="col">frais_tenu</th>
      <th scope="col">frais_amical</th>
      <th scope="col">modifier</th>
      <th scope="col">suprimer</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($classe as $une_classe)
    <tr>
        <td>  {{$une_classe->id}}</td>
        <td>  {{$une_classe->nom_class}}</td>
        <td>  {{$une_classe->frais_inscription}}</td>
        <td>  {{$une_classe->mensualite}}</td>
        <td>  {{$une_classe->frais_tenu}}</td>
        <td>  {{$une_classe->frais_amical}}</td>
       <td><a href="{{route('classe.edit',$une_classe)}}"><button type="button" class="btn btn-primary">modifier</button></a></td>
       <td>
          <form action="{{route('classe.destroy',$une_classe)}}" method="post">
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
