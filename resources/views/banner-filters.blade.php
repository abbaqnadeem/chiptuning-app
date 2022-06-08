<div class="container mt-2 soft-bg banner-filters-box bold-fam mt-5" id="home_page_filters_original_position">
    <h4 class="mb-3 text-center">Zoek specificaties</h4>
    <form method="POST" action="{{ url('save_filters') }}" class="row" id="home_page_filters">
        @csrf
        <div class="col-lg-12">
            <div class="form-group">
                <div class="ios-selector-parent">
                    @php
                        $car_brand_id = '';
                        $car_brand_label = 'Kies merk';

                    foreach($car_brands as $car_brand) {
                        if(session('brand_id') == $car_brand->id) {
                            $car_brand_label = $car_brand->name;
                            $car_brand_id = $car_brand->id;
                        }
                    }
                    @endphp
                    <div class="ios-selector"
                         id="car_brands">{{ $car_brand_label }}</div>
                    <input type="hidden" id="brand_id" name="brand_id"
                           value="{{ $car_brand_id }}">
                </div>
                <input type="hidden" id="model_name" name="model_name">
                <i id="brand_icon" class="fa fa-angle-down dropdown-icon d-none"></i>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="form-group">

                <div class="ios-selector-parent">
                    @php
                        $car_model_id = '';
                        $car_model_label = 'Kies model';

                    foreach($car_models as $car_model) {
                        if(session('model_id') == $car_model->id) {
                            $car_model_label = $car_model->name;
                            $car_model_id = $car_model->id;
                        }
                    }
                    @endphp
                    <div class="ios-selector"
                         id="car_models">{{ $car_model_label }}</div>
                    <input type="hidden" id="model_id" name="model_id"
                           value="{{ $car_model_id }}">
                </div>
                <i id="model_icon" class="fa fa-angle-down dropdown-icon d-none"></i>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="form-group">

                <div class="ios-selector-parent">
                    @php
                        $car_generation_id = '';
                        $car_generation_label = 'Kies generatie';

                    foreach($car_generations as $car_generation) {
                        if(session('generation_id') == $car_generation->id) {
                            $car_generation_label = $car_generation->name;
                            $car_generation_id = $car_generation->id;
                        }
                    }
                    @endphp
                    <div class="ios-selector"
                         id="car_generations">{{ $car_generation_label }}</div>
                    <input type="hidden" id="generation_id" name="generation_id"
                           value="{{ $car_generation_id }}">
                </div>
                <i id="generation_icon" class="fa fa-angle-down dropdown-icon d-none"></i>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="form-group">

                <div class="ios-selector-parent">
                    @php
                        $car_engine_id = '';
                        $car_engine_label = 'Kies motor';

                    foreach($car_engines as $car_engine) {
                        if(session('engine_id') == $car_engine->id) {
                            $car_engine_label = $car_engine->name;
                            $car_engine_id = $car_engine->id;
                        }
                    }
                    @endphp
                    <div class="ios-selector"
                         id="car_engines">{{ $car_engine_label }}</div>
                    <input type="hidden" id="engine_id" name="engine_id"
                           value="{{ $car_engine_id }}">
                </div>
                <i id="engine_icon" class="fa fa-angle-down dropdown-icon d-none"></i>
            </div>
        </div>
    </form>
</div>
