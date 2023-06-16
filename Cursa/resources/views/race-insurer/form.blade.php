<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('race_id') }}
            {{ Form::text('race_id', $raceInsurer->race_id, ['class' => 'form-control' . ($errors->has('race_id') ? ' is-invalid' : ''), 'placeholder' => 'Race Id']) }}
            {!! $errors->first('race_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('insurer_cif') }}
            {{ Form::text('insurer_cif', $raceInsurer->insurer_cif, ['class' => 'form-control' . ($errors->has('insurer_cif') ? ' is-invalid' : ''), 'placeholder' => 'Insurer Cif']) }}
            {!! $errors->first('insurer_cif', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('price') }}
            {{ Form::text('price', $raceInsurer->price, ['class' => 'form-control' . ($errors->has('price') ? ' is-invalid' : ''), 'placeholder' => 'Price']) }}
            {!! $errors->first('price', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>