<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row align-items-center">
            <div class="col">
                <div class="form-group">
                    {{ Form::label('name') }}
                    {{ Form::text('name', $race->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
                    {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('description') }}
                    {{ Form::text('description', $race->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
                    {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('ramp') }}
                    {{ Form::number('ramp', $race->ramp, ['class' => 'form-control' . ($errors->has('ramp') ? ' is-invalid' : ''), 'placeholder' => 'Ramp']) }}
                    {!! $errors->first('ramp', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('max_participants') }}
                    {{ Form::text('max_participants', $race->max_participants, ['class' => 'form-control' . ($errors->has('max_participants') ? ' is-invalid' : ''), 'placeholder' => 'Max Participants']) }}
                    {!! $errors->first('max_participants', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('race_price') }}
                    {{ Form::number('race_price', $race->race_price, ['class' => 'form-control' . ($errors->has('race_price') ? ' is-invalid' : ''), 'placeholder' => 'Sponsor Price']) }}
                    {!! $errors->first('race_price', '<div class="invalid-feedback">:message</div>') !!}
                </div>

            </div>
            <div class="col">
                <div class="form-group">
                    {{ Form::label('km') }}
                    {{ Form::number('km', $race->km, ['class' => 'form-control' . ($errors->has('km') ? ' is-invalid' : ''), 'placeholder' => 'Km']) }}
                    {!! $errors->first('km', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('date') }}
                    {{ Form::date('date', $race->date, ['class' => 'form-control' . ($errors->has('date') ? ' is-invalid' : ''), 'placeholder' => 'Date']) }}
                    {!! $errors->first('date', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                {{ Form::label('hour') }}
                {{ Form::time('hour', $race->hour, ['class' => 'form-control' . ($errors->has('hour') ? ' is-invalid' : ''), 'placeholder' => 'Hour']) }}
                {!! $errors->first('hour', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('starting_point') }}
                    {{ Form::text('starting_point', $race->starting_point, ['class' => 'form-control' . ($errors->has('starting_point') ? ' is-invalid' : ''), 'placeholder' => 'Starting Point']) }}
                    {!! $errors->first('starting_point', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('sponsor_price') }}
                    {{ Form::number('sponsor_price', $race->sponsor_price, ['class' => 'form-control' . ($errors->has('sponsor_price') ? ' is-invalid' : ''), 'placeholder' => 'Sponsor Price']) }}
                    {!! $errors->first('sponsor_price', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
    </div>
    <div class="box-footer mt20 pt-2">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
