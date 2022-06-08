@if(isset($models))
    @foreach($models as $car_model)
        <option value="{{ $car_model->id }}">{{ $car_model->value  }}</option>
    @endforeach
@endif
@if(isset($generations))
    @foreach($generations as $car_generation)
        <option
            value="{{ $car_generation->id }}">{{ $car_generation->value ? $car_generation->value : $model  }}</option>
    @endforeach
@endif
@if(isset($engines))
    @foreach($engines as $car_engine)
        <option value="{{ $car_engine->id }}">{{ $car_engine->value }}</option>
    @endforeach
@endif
