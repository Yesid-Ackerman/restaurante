<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="capacity" class="form-label">{{ __('Capacity') }}</label>
            <input type="text" name="capacity" class="form-control @error('capacity') is-invalid @enderror" value="{{ old('capacity', $table?->capacity) }}" id="capacity" placeholder="Capacity">
            {!! $errors->first('capacity', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="dish_id" class="form-label">{{ __('Dish Id') }}</label>
            <input type="text" name="dish_id" class="form-control @error('dish_id') is-invalid @enderror" value="{{ old('dish_id', $table?->dish_id) }}" id="dish_id" placeholder="Dish Id">
            {!! $errors->first('dish_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="category_id" class="form-label">{{ __('Category Id') }}</label>
            <input type="text" name="category_id" class="form-control @error('category_id') is-invalid @enderror" value="{{ old('category_id', $table?->category_id) }}" id="category_id" placeholder="Category Id">
            {!! $errors->first('category_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>