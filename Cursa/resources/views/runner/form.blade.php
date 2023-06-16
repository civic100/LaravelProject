<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $runner->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sex') }}
            {{ Form::select('sex', $runner->sex, ['class' => 'form-control' . ($errors->has('sex') ? ' is-invalid' : ''), 'placeholder' => 'Sex']) }}
            {!! $errors->first('address', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('address') }}
            {{ Form::text('address', $runner->address, ['class' => 'form-control' . ($errors->has('address') ? ' is-invalid' : ''), 'placeholder' => 'Address']) }}
            {!! $errors->first('address', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('birth_date') }}
            {{ Form::text('birth_date', $runner->birth_date, ['class' => 'form-control' . ($errors->has('birth_date') ? ' is-invalid' : ''), 'placeholder' => 'Birth Date']) }}
            {!! $errors->first('birth_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('federation') }}
            {{ Form::text('federation', $runner->federation, ['class' => 'form-control' . ($errors->has('federation') ? ' is-invalid' : ''), 'placeholder' => 'Federation']) }}
            {!! $errors->first('federation', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('num_federation') }}
            {{ Form::text('num_federation', $runner->num_federation, ['class' => 'form-control' . ($errors->has('num_federation') ? ' is-invalid' : ''), 'placeholder' => 'Num Federation']) }}
            {!! $errors->first('num_federation', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
