<div class="row">
    <div class="col-sm-12 col-md-6">
        <div class="form-group">
            <label for="name">Название</label>
            <input id="name" name="name" type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{old('name', $unit->name)}}">
            @if ($errors->has('name'))
                <span class="invalid-feedback"><strong>{{ $errors->first('name') }}</strong></span>
            @endif
        </div>
    </div>
</div>
