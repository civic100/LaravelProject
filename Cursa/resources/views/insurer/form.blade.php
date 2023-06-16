<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('cif') }}
            {{ Form::text('cif', $insurer->cif, ['class' => 'form-control' . ($errors->has('cif') ? ' is-invalid' : ''), 'placeholder' => 'Cif']) }}
            {!! $errors->first('cif', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $insurer->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('address') }}
            {{ Form::text('address', $insurer->address, ['class' => 'form-control' . ($errors->has('address') ? ' is-invalid' : ''), 'placeholder' => 'Address']) }}
            {!! $errors->first('address', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="box-body">
        <div>Register in Races...</div>
        <div class="form-group row row-cols-5">
            @foreach ($races as $race)
                <div class="form-check form-switch col">
                    <input class="form-check-input" type="checkbox" id="check{{$race->id}}" name="race[{{$race->id}}][]" onchange="(document.getElementById('{{$race->id}}').disabled == true) ? document.getElementById('{{$race->id}}').disabled = false: document.getElementById('{{$race->id}}').disabled = true;">
                    <label class="form-check-label" for="check{{$race->id}}">Race - {{$race->id}}</label>
                    <br>
                    <label for="{{$race->id}}" class="form-label">Price</label>
                    <input type="number" class="form-control" id="{{$race->id}}" name="race[{{$race->id}}][]" disabled required>
                </div>
            @endforeach
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary mt-2">Submit</button>
    </div>
</div>