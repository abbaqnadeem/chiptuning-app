<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chiptuning Email</title>
</head>
<body style="color: black;">

<div style="color: black;font-family: Verdana !important;">
    <p>Beste {{ $name }},</p>
    <p>Vriendelijk dank voor uw aanvraag.</p>
    @if(!empty($tuning->brand) && !empty($tuning->model) && !empty($tuning->engine))
        <p>Wij kunnen voor uw
            <strong>{{ $tuning->brand->name }} {{ $tuning->model->name }} {{ $tuning->engine->name }}</strong> de
            volgende optimalisatie aanbieden:</p>
    @else
        <p>Wij kunnen voor uw <strong>Brand Name (Model, Engine)</strong> de volgende optimalisatie aanbieden:</p>
    @endif
    <p style="margin-top: 0 !important;"><strong style="text-decoration: underline !important;">Optimalisatie</strong>
    </p>

    @if(!empty($tuning))
        <p style="margin-bottom: 0 !important;margin-top: 0 !important;">Het vermogen zal toenemen van
            <strong>{{ $tuning->hp_standard < 0 ? 'Inontwikkeling' : $tuning->hp_standard . ' pk' }}</strong> naar circa
            <strong>{{ $tuning->hp_tuning < 0 ? 'Inontwikkeling' : $tuning->hp_tuning . ' pk' }}</strong> en het koppel
            van <strong>{{ $tuning->nm_standard < 0 ? 'Inontwikkeling' : $tuning->nm_standard . ' nm' }}</strong> naar
            <strong>{{ $tuning->nm_tuning < 0 ? 'Inontwikkeling' : $tuning->nm_tuning . ' nm' }}. (Stage 1)</strong></p>
    @else
        <p style="margin-bottom: 0 !important;margin-top: 0 !important;">Het vermogen zal toenemen van 0 pk naar circa 0
            pk en het koppel van 0 nm naar 0 nm. <strong>(Stage 1)</strong></p>
    @endif

    @if(!empty($tuning))
        @if(($tuning->hp_stage_2 != 0 || $tuning->hp_stage_2 < 0) && ($tuning->nm_standard != 0 || $tuning->nm_standard < 0) && ($tuning->nm_stage_2 != 0 || $tuning->nm_stage_2 < 0))
            <p style="margin-bottom: 0 !important;margin-top: 0 !important;">Het vermogen zal toenemen van
                <strong>{{ $tuning->hp_standard < 0 ? 'Inontwikkeling' : $tuning->hp_standard . ' pk' }}</strong> naar
                circa <strong>{{ $tuning->hp_stage_2 < 0 ? 'Inontwikkeling' : $tuning->hp_stage_2 . ' pk' }}</strong> en
                het koppel van
                <strong>{{ $tuning->nm_standard < 0 ? 'Inontwikkeling' : $tuning->nm_standard . ' nm' }}</strong> naar
                <strong>{{ $tuning->nm_stage_2 < 0 ? 'Inontwikkeling' : $tuning->nm_stage_2 . ' nm' }}. (Stage
                    2)</strong></p>
        @endif
    @endif

    <p style="margin-bottom: 0 !important;">Het koppel is met name belangrijk voor de trekkracht, dit verschil zult u
        dus gelijk ervaren zodra u met de auto gaat rijden.</p>
    <p style="margin-bottom: 0 !important;margin-top: 0 !important;">Bovendien zal de auto tijdens het rijden soepeler
        aanvoelen door een efficiënter verbrandingsproces (hoger rendement).</p>
    <p style="margin-top: 0 !important;">Onze software is ontwikkeld op een vermogenstestbank en ook geschikt voor
        automatische versnellingsbakken.</p>
    <strong style="text-decoration: underline !important;">Tuning Proces</strong>
    <ol style="padding-left: 15px;">
        <li>Voordat we met de tuning beginnen gaan we eventuele in het geheugen aanwezige foutcodes uitlezen en
            wissen.
        </li>
        <li>Vervolgens wordt er met de auto proefgereden met diagnose apparatuur.</li>
        <li>Na afronding van de diagnose wordt de software uitgelezen uit de ECU en een backup gemaakt.</li>
        <li>Software wordt gemodificeerd en op maat herschreven voor uw auto</li>
        <li>Software wordt op de auto geprogrammeerd</li>
        <li>Proefrit met de nieuwe tunings software</li>
        <li>Na alle checks wordt de auto afgeleverd en ontvangt u een certificaat van de tuning.</li>
    </ol>

    <p><strong style="text-decoration: underline !important;">Brandstofbesparing</strong></p>
    <p style="margin-bottom: 0 !important;margin-top: 0 !important;">Bij een standaard tuning kunnen sommige auto’s ook
        iets zuiniger worden dit is wel afhankelijk van uw rijstijl.</p>
    <p style="margin-top: 0 !important;">Auto’s worden zuiniger omdat het max koppel eerder bereikt wordt (bij een lager
        toerental).</p>

    <p><strong style="text-decoration: underline !important;">Garantie</strong></p>
    <p style="margin-bottom: 0 !important;margin-top: 0 !important;">Wij geven standaard 5-jaar garantie op de door ons
        ontwikkelde software. </p>
    <p style="margin-bottom: 0 !important;margin-top: 0 !important;">Elke tuning is maatwerk, de software wordt dus
        specifiek voor uw auto geschreven.</p>
    <p style="margin-top: 0 !important;">Bovendien blijft de tuning altijd binnen de marges van de fabrikant.</p>

    <p><strong style="text-decoration: underline !important;">Prijs Chiptuning: (incl. btw)</strong></p>
    <table style="border: 1px solid black;">
        <tr>
            <td>Normaal</td>
            <td>€ 499,-</td>
        </tr>
        <tr style="font-weight: bold !important;">
            <td>Nu aanbieding</td>
            <td>€ 299,-</td>
        </tr>
    </table>

    <p>Heeft u nog vragen of wilt u een afspraak maken, dan kunt u contact met ons opnemen op tel: <strong>010-53 000
            10</strong></p>
    <br>
    <p>Met vriendelijke groeten,</p>
    <br>
    <p style="font-size: 12px;margin-top: 0 !important;margin-bottom: 0 !important;">Jakub</p>
    <i style="font-size: 12px;margin-top: 0 !important;margin-bottom: 0 !important;">Software Engineer</i>
    <br><br>
    <img src="{{ env('APP_URL') }}/images/logo-dark.png" alt="Chiptuning Logo">
    <div style="font-size: 12px;">
        <div style="float: left; margin-right: 30px; margin-top: -10.6px;">
            {{--            <p style="margin-bottom: 0 !important;text-decoration: underline">Hoofd Kantoor:</p>--}}
            <p style="margin-top: 0 !important;margin-bottom: 0 !important;">Rhijnspoor 255</p>
            <p style="margin-top: 0 !important;margin-bottom: 0 !important;">2901 LB</p>
            <p style="margin-top: 0 !important;margin-bottom: 0 !important;">Capelle aan den IJssel</p>
        </div>
        {{--<div>
            <p style="padding-top: 10.5px !important;margin-bottom: 0 !important;text-decoration: underline">
                Werkplaats:</p>
            <p style="margin-top: 0 !important;margin-bottom: 0 !important;">Breeweg 9</p>
            <p style="margin-top: 0 !important;margin-bottom: 0 !important;">3075 LJ</p>
            <p style="margin-top: 0 !important;margin-bottom: 0 !important;">Rotterdam</p>
        </div>--}}
    </div>
    <div style="clear: both;"></div>
    <p style="font-size: 12px !important;margin-top: 25px !important;margin-bottom: 0 !important;">Tel: 010-53 000
        10</p>
    <p style="font-size: 12px;margin-top: 0 !important;">www.chiptuningrotterdam.nl</p>
    <p style="font-size: 12px;margin-bottom: 0 !important;margin-top: 25px !important;text-decoration: underline;"><i>Wij
            werken op afspraak:</i>
    </p>
    <p style="font-size: 12px;margin-bottom: 0 !important;margin-top: 0 !important;">Maandag t/m vrijdag:
        <span>Van 09.00 tot 17.00</span></p>
    <p style="font-size: 12px;margin-bottom: 0 !important;margin-top: 0 !important;">Zaterdag:
        <span style="padding-left: 83px;">Van 08.00 tot 13.00</span></p>
    <p style="font-size: 12px;margin-bottom: 0 !important;margin-top: 0 !important;">Zondag:<span
            style="padding-left: 96px;">Gesloten</span></p>

    <hr>

    <p><strong>Name: </strong> {{ $name }}</p>
    <p><strong>Email adres:</strong> {{ $email }}</p>
    <p><strong>Kenteken:</strong> {{ $license_plate }}</p>
    <p><strong>Telefoonumer:</strong> {{ $phone_number }}</p>
    @if(!empty($tuning->brand) && !empty($tuning->model) && !empty($tuning->engine))
        <p><strong>Filters:</strong> <strong>{{ $tuning->brand->name }}, {{ $tuning->model->name }}
                , {{ $tuning->engine->name }}</strong></p>
    @endif
    <p>
        <strong>Message</strong>:
        {!! nl2br(e($message)) !!}
    </p>
</div>
</body>
</html>
