<form method="POST"  action="{{ route('runnerCheckRegister')}}" onsubmit="registerByRegister();" role="form" enctype="multipart/form-data" class="row g-3">
@csrf
    <h4>Register Runner</h4>
    <div class="col-md-12">
      <label for="dni" class="form-label">DNI</label>
      <input type="text" class="form-control" id="dni" name="dni" maxlength="9" required>
    </div>
    <div class="col-md-12">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" id="name" name="name" maxlength="40" required>
    </div>
    <div class="col-md-12">
        <label for="sex" class="form-label">Sex</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="sex" id="sex_male" value="male" checked >
            <label class="form-check-label" for="sex_male">
              Male
            </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="sex" id="sex_female" value="female" >
          <label class="form-check-label" for="sex_female">
            Female
        </label>
        </div>
    </div>
    <div class="col-md-12">
      <label for="address" class="form-label">Address</label>
      <input type="text" class="form-control" id="address" name="address" maxlength="100" required>
    </div>
    <div class="col-md-12">
      <label for="birth_date" class="form-label">Birth date</label>
      <?php
        echo "<input type='date' class='form-control' id='birth_date' name='birth_date' min='".date('Y-m-d', strtotime ('-65 year' , strtotime(date('Y-m-d'))))."' max='".date('Y-m-d', strtotime ('-18 year' , strtotime(date('Y-m-d'))))."' required>";
      ?>
      <!--<input type="date" class="form-control" id="birth_date" name="birth_date" required>-->
    </div>
    <div class="col-md-12">
        <label for="federation" class="form-label">Federation</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="federation" id="federation0_register" value="0" onchange="federationOffRegister()" checked>
            <label class="form-check-label" for="federation0">
              No
            </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="federation" id="federation1_register" value="1" onchange="federationOnRegister()">
          <label class="form-check-label" for="federation1">
            Yes
        </label>
        </div>
    </div>
    <div class="col-md-12" style="display:none">
      <label for="num_federation" class="form-label">Num Federation</label>
      <input type="number" class="form-control" id="num_federation_register" name="num_federation" min="00000000000" max="99999999999"  disabled required>
    </div>
    <h4>Insurer to Race</h4>
    <div class="col-md-12">
        <label for="insurer_cif_register" class="form-label">Insurer</label>
        <select onchange="insurerPriceRegister()" class="form-select" id="insurer_cif_register" name="insurer_cif" required>
            <option selected disabled value="">Choose...</option>
            @foreach ($race[0]->raceInsurer as $insurer)
                <option value="{{$insurer->insurer_cif}},{{$insurer->price}}">{{$insurer->insurer_cif .' '.$insurer->price.'€'}}</option>
            @endforeach
        </select>

    </div>
    <input type="hidden" id="dorsal" name="dorsal" value="{{$dorsal}}">
    <input type="hidden" id="race_id" name="race_id" value="{{$id}}">
    <input type="hidden" id="amount_register" name="amount" value="{{$race_price}}">
    <div class="col-12">
      <p>Race Price: <b>{{$race[0]->race_price}} €</b></p>
      <p>Insurer Price: <b></b></p>
      <p>Total Price: <b>{{$race[0]->race_price}} €</b></p>
    </div>
    <div class="col-12">
      <button class="btn btn-primary" type="submit">Register</button>


    </div>


</form>
