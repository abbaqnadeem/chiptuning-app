<div class="container mt-2 soft-bg banner-filters-box bold-fam mt-5" id="home_page_filters_original_position">
    <h4 class="mb-3">Zoek specificaties</h4>
    <form method="POST" action="{{ url('save_filters') }}" class="row" id="home_page_filters">
        @csrf
        <div class="col-lg-12">
            <div class="form-group">
                <input type="hidden" id="model_name" name="model_name">
                <select id="brand_id" name="brand_id" class="selectpicker banner-select"
                        data-live-search="true" data-style="btn-primary"
                        title="Kies merk">
                    @foreach($car_brands as $car_brand)
                        <option
                            value="{{ $car_brand->id }}" {{ session('brand_id') == $car_brand->id ? 'selected' : '' }}>{{ $car_brand->name }}</option>
                    @endforeach
                </select>
                <i class="fa fa-angle-down dropdown-icon d-none"></i>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="form-group">
                <select id="model_id" name="model_id" class="selectpicker banner-select" data-live-search="true"
                        data-style="btn-primary"
                        title="Kies model">
                    @foreach($car_models as $car_model)
                        <option
                            value="{{ $car_model->id }}" {{ session('model_id') == $car_model->id ? 'selected' : '' }}>{{ $car_model->name }}</option>
                    @endforeach
                </select>
                <i class="fa fa-angle-down dropdown-icon d-none"></i>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <select id="generation_id" name="generation_id" class="selectpicker banner-select"
                        data-live-search="true"
                        data-style="btn-primary"
                        title="Kies generatie">
                    @foreach($car_generations as $car_generation)
                        <option
                            value="{{ $car_generation->id }}" {{ session('generation_id') == $car_generation->id ? 'selected' : '' }}>{{ $car_generation->name ? $car_generation->name : $model_name  }}</option>
                    @endforeach
                </select>
                <i class="fa fa-angle-down dropdown-icon d-none"></i>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <select id="engine_id" name="engine_id" class="selectpicker banner-select" data-live-search="true"
                        data-style="btn-primary"
                        title="Kies motor">
                    @foreach($car_engines as $car_engine)
                        <option
                            value="{{ $car_engine->id }}" {{ session('engine_id') == $car_engine->id ? 'selected' : '' }}>{{ $car_engine->name }}</option>
                    @endforeach
                </select>
                <i class="fa fa-angle-down dropdown-icon d-none"></i>
            </div>
        </div>
    </form>
</div>
