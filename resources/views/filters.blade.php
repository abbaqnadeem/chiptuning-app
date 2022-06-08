<div class="container mt-2" id="home_page_filters_original_position">
    <form method="POST" action="{{ url('save_filters') }}" class="row" id="home_page_filters">
        @csrf
        <div class="form-group mt-2 d-none" id="filter_arrow">
            <h2 class="fs-18 bold"><i class="fa arrow"></i></h2>
        </div>
        <div class="form-group">
            <input type="hidden" id="model_name" name="model_name">
            <select id="brand_id" name="brand_id" class="selectpicker"
                    data-live-search="true" data-style="btn-primary"
                    title="Kies merk">
                @foreach($car_brands as $car_brand)
                    <option
                        value="{{ $car_brand->id }}" {{ session('brand_id') == $car_brand->id ? 'selected' : '' }}>{{ $car_brand->name }}</option>
                @endforeach
            </select>
            <i class="fa fa-angle-down dropdown-icon d-none" data-id="0"></i>
        </div>

        <div class="form-group">
            <select id="model_id" name="model_id" class="selectpicker" data-live-search="true"
                    data-style="btn-primary"
                    title="Kies model">
                @foreach($car_models as $car_model)
                    <option
                        value="{{ $car_model->id }}" {{ session('model_id') == $car_model->id ? 'selected' : '' }}>{{ $car_model->name }}</option>
                @endforeach
            </select>
            <i class="fa fa-angle-down dropdown-icon d-none" data-id="1"></i>
        </div>
        <div class="form-group">
            <select id="generation_id" name="generation_id" class="selectpicker" data-live-search="true"
                    data-style="btn-primary"
                    title="Kies generatie">
                @foreach($car_generations as $car_generation)
                    <option
                        value="{{ $car_generation->id }}" {{ session('generation_id') == $car_generation->id ? 'selected' : '' }}>{{ $car_generation->name ? $car_generation->name : $model_name  }}</option>
                @endforeach
            </select>
            <i class="fa fa-angle-down dropdown-icon d-none" data-id="2"></i>
        </div>
        <div class="form-group">
            <select id="engine_id" name="engine_id" class="selectpicker" data-live-search="true"
                    data-style="btn-primary"
                    title="Kies motor">
                @foreach($car_engines as $car_engine)
                    <option
                        value="{{ $car_engine->id }}" {{ session('engine_id') == $car_engine->id ? 'selected' : '' }}>{{ $car_engine->name }}</option>
                @endforeach
            </select>
            <i class="fa fa-angle-down dropdown-icon d-none" data-id="3"></i>
        </div>
    </form>
</div>
