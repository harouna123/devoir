   <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   <div class="row">
                <div class="col-xl">
                  <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">voiture</h5>
                      <small class="text-muted float-end">Default label</small>
                    </div>
                    <div class="card-body">
                      <form action="{{route(voiture.store)}}" methode="post">
                       
                      <div class="mb-3">
                          <label class="form-label" for="basic-default-company">matricule</label>
                          <input type="text" name="matricule" class="form-control" id="basic-default-company" placeholder="ACME Inc." />
                        </div>
                       
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-company">prix</label>
                          <input type="text" name="prix" class="form-control" id="basic-default-company" placeholder="ACME Inc." />
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-company">marque</label>
                          <select name="libelle" id="">
                            @foreach($marque as $une_marque)
                            <option value="{{$une_marque->id}}">
                                {{une_marque->libelle}}
                            </option>
                            @endforeach
                            
                          </select>
                            </div>
            
                        <button type="submit" class="btn btn-primary">envoyer</button>
                      </form>
                    </div>
                  </div>
                </div>
             
              </div>