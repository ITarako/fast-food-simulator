<div class="row">
    <div class="col-sm-12 col-md-6">
        <div class="form-group">
            <label for="name">Название</label>
            <input id="name" name="name" type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{old('name', $category->name ?? null)}}">
            @if ($errors->has('name'))
                <span class="invalid-feedback"><strong>{{ $errors->first('name') }}</strong></span>
            @endif
        </div>
    </div>
    @if($category ?? null)
        <div class="col-sm-12 col-md-6">
            <div class="form-check mt-4 pt-3">
                <input id="is_active" name="is_active" type="checkbox" class="form-check-input" {{$category->is_active ? 'checked' : ''}}>
                <label for="is_active" class="form-check-label">Активность</label>
            </div>
        </div>
    @endif
</div>
