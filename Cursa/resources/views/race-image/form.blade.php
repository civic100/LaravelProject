<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('race_id') }}
            {{ Form::text('race_id', $raceImage->race_id, ['class' => 'form-control' . ($errors->has('race_id') ? ' is-invalid' : ''), 'placeholder' => 'Race Id']) }}
            {!! $errors->first('race_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('race_image') }}
            {{ Form::text('race_image', $raceImage->race_image, ['class' => 'form-control' . ($errors->has('race_image') ? ' is-invalid' : ''), 'placeholder' => 'Race Image']) }}
            {!! $errors->first('race_image', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>