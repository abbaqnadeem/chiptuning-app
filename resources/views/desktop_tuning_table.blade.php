<div id="desktop-tuning-table">
    <section class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="row text-center pl-3">
                    <h1 id="chiptuning_page_title" class="text-uppercase text-black mb-4">Meer power voor
                        je
                        {{ $brand->name }} {{ $engine->name }}</h1>
                </div>
            </div>
            <div class="col-md-6">
                <img class="img-fluid {{ isset($brand->image->url) ? 'car-brand-logo' : '' }} float-right mb-3"
                     src="{{ isset($brand->image->url) ? images_path($brand->image->url) : images_path('brand_logos/brand_placeholder.png') }}"
                     alt="">
            </div>
        </div>
    </section>
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav nav-tabs chiptuning-stages-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active text-uppercase" id="stage-1-tab" data-toggle="tab"
                               href="#stage-1"
                               role="tab" aria-controls="stage-1" aria-selected="true">Stage 1
                                @if(($tuning->hp_standard && $tuning->hp_standard > 0) && ($tuning->hp_tuning && $tuning->hp_tuning > 0))
                                    <div class="maroon-label text-white float-right">
                                                <span
                                                    class="plus">+</span>{{ $tuning->hp_tuning - $tuning->hp_standard }}
                                        HP
                                    </div>
                                @endif
                            </a>
                        </li>
                        @if(($tuning->hp_standard && $tuning->hp_stage_2) && ($tuning->nm_standard && $tuning->nm_stage_2))
                            <li class="nav-item">
                                <a class="nav-link text-uppercase" id="stage-2-tab" data-toggle="tab"
                                   href="#stage-2"
                                   role="tab" aria-controls="stage-2" aria-selected="false">Stage 2
                                    @if(($tuning->hp_standard && $tuning->hp_standard > 0) && ($tuning->hp_stage_2 && $tuning->hp_stage_2 > 0))
                                        <div class="maroon-label text-white float-right">
                                                    <span
                                                        class="plus">+</span>{{ $tuning->hp_stage_2 - $tuning->hp_standard }}
                                            HP
                                        </div>
                                    @endif
                                </a>
                            </li>
                        @endif
                        @if($tuning->price)
                            <li class="nav-item">
                                <a class="nav-link text-capatilize bold-fam disabled" id="stage-3-tab"
                                   data-toggle="tab"
                                   href="#stage-3"
                                   role="tab" aria-controls="stage-3" aria-selected="false">Prijs:
                                    <span style="font-size: 23px;">€ </span>
                                    <span id="stage_1_price"
                                          data-price="{{ $tuning->price }}">‎@money($tuning->price)</span>
                                    <span id="stage_2_price" data-price="{{ $tuning->price_stage_2 }}"
                                          class="d-none">‎@money($tuning->price_stage_2)</span>
                                </a>
                            </li>
                        @endif
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="stage-1" role="tabpanel"
                             aria-labelledby="stage-1-tab">
                            <table class="table chiptuning-stages-table">
                                <thead>
                                <tr class="bg-white">
                                    <th scope="col"></th>
                                    <th scope="col" class="stages-tab-first-col-1 text-capitalize">Standaard
                                    </th>
                                    <th scope="col" class="stages-tab-first-col-2 text-capitalize">Stage 1</th>
                                    <th scope="col" class="stages-tab-first-col-3 text-capitalize">verschil</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="bg-gray">
                                    <td>vermogen</td>
                                    <td>
                                        @if($tuning->hp_standard < 0)
                                            Inontwikkeling
                                        @else
                                            {{ $tuning->hp_standard }} pk
                                        @endif
                                    </td>
                                    <td>
                                        @if($tuning->hp_tuning < 0)
                                            Inontwikkeling
                                        @else
                                            {{ $tuning->hp_tuning }} pk
                                        @endif
                                    </td>
                                    <td>
                                        @if($tuning->hp_tuning < 0 || $tuning->hp_standard < 0)
                                            Inontwikkeling
                                        @else
                                            <span
                                                class="plus">+</span>{{ $tuning->hp_tuning - $tuning->hp_standard }}
                                            pk
                                        @endif
                                    </td>
                                </tr>
                                <tr class="bg-white">
                                    <td>koppel</td>
                                    <td>
                                        @if($tuning->nm_standard < 0)
                                            Inontwikkeling
                                        @else
                                            {{ $tuning->nm_standard }} NM
                                        @endif
                                    </td>
                                    <td>
                                        @if($tuning->nm_tuning < 0)
                                            Inontwikkeling
                                        @else
                                            {{ $tuning->nm_tuning }} NM
                                        @endif
                                    </td>
                                    <td>
                                        @if($tuning->nm_tuning < 0 || $tuning->nm_standard < 0)
                                            Inontwikkeling
                                        @else
                                            <span
                                                class="plus">+</span>{{ $tuning->nm_tuning - $tuning->nm_standard }}
                                            nm
                                        @endif
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        @if(($tuning->hp_stage_2 || $tuning->hp_stage_2 < 0) && ($tuning->nm_stage_2 || $tuning->nm_stage_2 < 0))
                            <div class="tab-pane fade" id="stage-2" role="tabpanel"
                                 aria-labelledby="stage-2-tab">
                                <table class="table chiptuning-stages-table">
                                    <thead>
                                    <tr class="bg-white">
                                        <th scope="col"></th>
                                        <th scope="col" class="stages-tab-first-col-1 text-capitalize">
                                            Standaard
                                        </th>
                                        <th scope="col" class="stages-tab-first-col-2 text-capitalize">Stage 2
                                        </th>
                                        <th scope="col" class="stages-tab-first-col-3 text-capitalize">
                                            verschil
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="bg-gray">
                                        <td>vermogen</td>
                                        <td>
                                            @if($tuning->hp_standard < 0)
                                                Inontwikkeling
                                            @else
                                                {{ $tuning->hp_standard }} pk
                                            @endif
                                        </td>
                                        <td>
                                            @if($tuning->hp_stage_2 < 0)
                                                Inontwikkeling
                                            @else
                                                {{ $tuning->hp_stage_2 }} pk
                                            @endif
                                        </td>
                                        <td>
                                            @if($tuning->hp_standard < 0 || $tuning->hp_stage_2 < 0)
                                                Inontwikkeling
                                            @else
                                                <span
                                                    class="plus">+</span>{{ $tuning->hp_stage_2 - $tuning->hp_standard }}
                                                pk
                                            @endif
                                        </td>
                                    </tr>
                                    <tr class="bg-white">
                                        <td>koppel</td>
                                        <td>
                                            @if($tuning->nm_standard < 0)
                                                Inontwikkeling
                                            @else
                                                {{ $tuning->nm_standard }} NM
                                            @endif
                                        </td>
                                        <td>
                                            @if($tuning->nm_stage_2 < 0)
                                                Inontwikkeling
                                            @else
                                                {{ $tuning->nm_stage_2 }} NM
                                            @endif
                                        </td>
                                        <td>
                                            @if($tuning->nm_stage_2 < 0 || $tuning->nm_standard < 0)
                                                Inontwikkeling
                                            @else
                                                <span
                                                    class="plus">+</span>{{ $tuning->nm_stage_2 - $tuning->nm_standard }}
                                                nm
                                            @endif
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
    </section>
</div>
