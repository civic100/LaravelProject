<form method="POST" action="{{ route('runnerCheckDni')}}" onsubmit="registerByDni();"  role="form" id="formDni" enctype="multipart/form-data" class="row g-3">
  @csrf
      <div class="col-md-12">
        <label for="runner_dni" class="form-label">DNI</label>
        <input type="text" class="form-control" id="runner_dni" name="runner_dni" onclick="registerByDni();" required>
      </div>
      <div class="col-md-12">
        <label for="federation" class="form-label">Federation</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="federation" id="federation0" value="0" onchange="federationOffDni()" checked>
            <label class="form-check-label" for="federation0">
              No
            </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="federation" id="federation1" value="1" onchange="federationOnDni()">
          <label class="form-check-label" for="federation1">
            Yes
          </label>
        </div>
      </div>
      <div class="col-md-12" style="display:none">
        <label for="num_federation" class="form-label">Num Federation</label>
        <input type="number" class="form-control" id="num_federation" name="num_federation" disabled required>
      </div>
      <h4>Insurer to Race</h4>
      <div class="col-md-12">
          <label for="insurer_cif_dni" class="form-label">Insurer</label>
          <select onchange="insurerPriceDni()" class="form-select" id="insurer_cif_dni" name="insurer_cif" required>
              <option selected disabled value="">Choose...</option>
              @foreach ($race[0]->raceInsurer as $insurer)
                  <option value="{{$insurer->insurer_cif}},{{$insurer->price}}">{{$insurer->insurer_cif .' '.$insurer->price.'€'}}</option>
              @endforeach
          </select>
      </div>
      <input type="hidden" id="dorsal" name="dorsal" value="{{$dorsal}}">
      <input type="hidden" id="race_id" name="race_id" value="{{$id}}">
      <input type="hidden" id="race_price" name="race_price" value="{{$race_price}}">
      <input type="hidden" id="amount" name="amount" value="{{$race_price}}">
      <div class="col-12">
        <p>Race Price: <b>{{$race[0]->race_price}} €</b></p>
        <p>Insurer Price: <b></b></p>
        <p>Total Price: <b>{{$race[0]->race_price}} €</b></p>
      </div>
      <div class="col-12">
        <button class="btn btn-primary" type="submit" >Register</button>
      </div>
</form>