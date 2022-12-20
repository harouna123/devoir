<div class="container">
<form method="post" action="{{route('marque.store')}}">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">libelle</label>
    <input type="text" class="form-control" name="libelle" id="exampleInputEmail1" >
   </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>