<div id="mobile-tuning-table">
    <section class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <img class="img-fluid {{ isset($brand->image->url) ? 'car-brand-logo' : '' }}"
                     src="{{ isset($brand->image->url) ? images_path($brand->image->url) : images_path('brand_logos/brand_placeholder.png') }}"
                     alt="">
            </div>
            <div class="col-sm-6">
                <div class="text-center">
                    <h1 id="chiptuning_page_title" class="text-uppercase text-black mb-4">Meer power voor
                        je
                        {{ $brand->name }} {{ $engine->name }}</h1>
                </div>
            </div>
        </div>
    </section>

    @php
        $stage_1_filter = ($tuning->hp_standard && $tuning->hp_standard > 0) && ($tuning->hp_tuning && $tuning->hp_tuning > 0);
        $stage_2_filter = ($tuning->hp_standard && $tuning->hp_stage_2) && ($tuning->nm_standard && $tuning->nm_stage_2);
    @endphp

    <section class="">
        <div class="container">
            <nav class="col-sm-12">
                <div class="chiptuning-stages-tab nav nav-pills row" role="tablist">
                    <a class="mobile-tab-link nav-link active text-capitalize {{ $stage_2_filter ? 'col-sm-6 no-border-right-radius' : 'col-sm-12 w-100' }}"
                       id="stage-1-tab" data-toggle="tab"
                       href="#stage-1"
                       data-toggle="tab"
                       role="tab" aria-controls="stage-1" aria-selected="true">Stage 1
                    </a>
                    @if($stage_2_filter)
                        <a class="mobile-tab-link nav-link text-capitalize col-sm-6" id="stage-2-tab" data-toggle="tab"
                           href="#stage-2"
                           data-toggle="tab"
                           role="tab" aria-controls="stage-2" aria-selected="false">Stage 2
                        </a>
                    @endif
                </div>
            </nav>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="stage-1" role="tabpanel"
                     aria-labelledby="stage-1-tab">
                    <fieldset>
                        <legend class="w-auto staging-legend">vermogen</legend>
                        <table class="table mobile-staging-table">
                            <thead>
                            <tr class="bg-white">
                                <th scope="col" class="stages-tab-col">Standaard
                                </th>
                                <th scope="col" class="stages-tab-col">Stage 1</th>
                                <th scope="col" class="stages-tab-col">verschil</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="bg-gray">
                                <td>
                                    @if($tuning->hp_standard < 0)
                                        Inontwikkeling
                                    @else
                                        {{ $tuning->hp_standard }} pk
                                    @endif
                                </td>
                                <td class="{{ $tuning->hp_tuning > 0 ? "bold" : "" }}">
                                    @if($tuning->hp_tuning < 0)
                                        Inontwikkeling
                                    @else
                                        {{ $tuning->hp_tuning }} pk
                                    @endif
                                </td>
                                <td class="{{ $tuning->hp_tuning > 0  || $tuning->hp_standard > 0 ? "bold text-maroon" : "" }}">
                                    @if($tuning->hp_tuning < 0 || $tuning->hp_standard < 0)
                                        Inontwikkeling
                                    @else
                                        <span
                                            class="plus">+</span>{{ $tuning->hp_tuning - $tuning->hp_standard }}
                                        pk
                                    @endif
                                </td>
                            </tr>
                            </tbody>
                        </table>

                    </fieldset>
                    <fieldset>
                        <legend class="w-auto staging-legend">koppel</legend>
                        <table class="table mobile-staging-table">
                            <thead>
                            <tr class="bg-white">
                                <th scope="col" class="stages-tab-col">Standaard
                                </th>
                                <th scope="col" class="stages-tab-col">Stage 1</th>
                                <th scope="col" class="stages-tab-col">verschil</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="bg-gray">
                                <td>
                                    @if($tuning->nm_standard < 0)
                                        Inontwikkeling
                                    @else
                                        {{ $tuning->nm_standard }} NM
                                    @endif
                                </td>
                                <td class="{{ $tuning->nm_tuning > 0 ? "bold" : "" }}">
                                    @if($tuning->nm_tuning < 0)
                                        Inontwikkeling
                                    @else
                                        {{ $tuning->nm_tuning }} NM
                                    @endif
                                </td>
                                <td class="{{ $tuning->nm_tuning > 0  || $tuning->nm_standard > 0 ? "bold text-maroon" : "" }}">
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
                    </fieldset>
                </div>

                @if(($tuning->hp_stage_2 || $tuning->hp_stage_2 < 0) && ($tuning->nm_stage_2 || $tuning->nm_stage_2 < 0))
                    <div class="tab-pane fade" id="stage-2" role="tabpanel"
                         aria-labelledby="stage-1-tab">
                        <fieldset>
                            <legend class="w-auto staging-legend">vermogen</legend>
                            <table class="table mobile-staging-table">
                                <thead>
                                <tr class="bg-white">
                                    <th scope="col" class="stages-tab-col">Standaard
                                    </th>
                                    <th scope="col" class="stages-tab-col">Stage 2</th>
                                    <th scope="col" class="stages-tab-col">verschil</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="bg-gray">
                                    <td>
                                        @if($tuning->hp_standard < 0)
                                            Inontwikkeling
                                        @else
                                            {{ $tuning->hp_standard }} pk
                                        @endif
                                    </td>
                                    <td class="{{ $tuning->hp_stage_2 > 0 ? "bold" : "" }}">
                                        @if($tuning->hp_stage_2 < 0)
                                            Inontwikkeling
                                        @else
                                            {{ $tuning->hp_stage_2 }} pk
                                        @endif
                                    </td>
                                    <td class="{{ $tuning->hp_standard > 0  || $tuning->hp_stage_2 > 0 ? "bold text-maroon" : "" }}">
                                        @if($tuning->hp_standard < 0 || $tuning->hp_stage_2 < 0)
                                            Inontwikkeling
                                        @else
                                            <span
                                                class="plus">+</span>{{ $tuning->hp_stage_2 - $tuning->hp_standard }}
                                            pk
                                        @endif
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                        </fieldset>
                        <fieldset>
                            <legend class="w-auto staging-legend">koppel</legend>
                            <table class="table mobile-staging-table">
                                <thead>
                                <tr class="bg-white">
                                    <th scope="col" class="stages-tab-col">Standaard
                                    </th>
                                    <th scope="col" class="stages-tab-col">Stage 2</th>
                                    <th scope="col" class="stages-tab-col">verschil</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="bg-gray">
                                    <td>
                                        @if($tuning->nm_standard < 0)
                                            Inontwikkeling
                                        @else
                                            {{ $tuning->nm_standard }} NM
                                        @endif
                                    </td>
                                    <td class="{{ $tuning->nm_stage_2 > 0 ? "bold" : "" }}">
                                        @if($tuning->nm_stage_2 < 0)
                                            Inontwikkeling
                                        @else
                                            {{ $tuning->nm_stage_2 }} NM
                                        @endif
                                    </td>
                                    <td class="{{ $tuning->nm_stage_2 > 0  || $tuning->nm_standard > 0 ? "bold text-maroon" : "" }}">
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
                        </fieldset>
                    </div>
                @endif
            </div>
    </section>
</div>
