<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('cif') }}
            {{ Form::text('cif', $sponsor->cif, ['class' => 'form-control' . ($errors->has('cif') ? ' is-invalid' : ''), 'placeholder' => 'Cif']) }}
            {!! $errors->first('cif', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $sponsor->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('address') }}
            {{ Form::text('address', $sponsor->address, ['class' => 'form-control' . ($errors->has('address') ? ' is-invalid' : ''), 'placeholder' => 'Address']) }}
            {!! $errors->first('address', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::email('email', $sponsor->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Appear on Home:') }}<br>
            {{ Form::label('yes') }}
            {{ Form::radio('home', '1', ['class' => 'form-control' . ($errors->has('home') ? ' is-invalid' : ''), 'placeholder' => 'Home']) }}
            {{ Form::label('no') }}
            {{ Form::radio('home', '0', ['class' => 'form-control' . ($errors->has('home') ? ' is-invalid' : ''), 'placeholder' => 'Home']) }}
            {!! $errors->first('home', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('logo') }}
            {{ Form::file('logo', $sponsor->logo, ['class' => 'form-control' . ($errors->has('logo') ? ' is-invalid' : ''), 'placeholder' => 'Logo']) }}
            {!! $errors->first('logo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="box-body">
            <div>Register in Races...</div>
            <div class="form-group row row-cols-5">
                @foreach ($races as $race)
                    <div class="form-check form-switch col">
                        <input class="form-check-input" type="checkbox" id="check{{$race->id}}" name="race[{{$race->id}}][]" onchange="(document.getElementById('{{$race->id}}').disabled == true) ? document.getElementById('{{$race->id}}').disabled = false: document.getElementById('{{$race->id}}').disabled = true;">
                        <label class="form-check-label" for="check{{$race->id}}">Race - {{$race->id}}</label>
                        <br>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
