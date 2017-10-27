@if($effect->type == 'stamina')
    <div class="ui basic {{ $effect->isPositive() ? 'green' : 'red' }} label" data-tooltip="Quantidade de energia que você irá {{ $effect->isPositive() ? 'ganhar' : 'perder' }}" data-position="top right">{{ $effect->allInformation() }}</div>
@endif

@if($effect->type == 'tensao')
    <div class="ui basic {{ $effect->isPositive() ? 'green' : 'red' }} label" data-tooltip="Cuidado para não ficar muito tenso" data-position="top right">{{ $effect->allInformation() }}</div>
@endif

@if($effect->type == 'embriaguez')
    <div class="ui basic yellow label" data-tooltip="Yohoho mais uma caneca de rum!!!" data-position="top right"><i class="fa fa-beer" aria-hidden="true"></i> {{ $effect->allInformation() }}</div>
@endif

@if($effect->type == 'energia')
    <div class="ui basic orange label" data-tooltip="Com energia você consegue fazer mais" data-position="top right"><i class="fa fa-bolt" aria-hidden="true"></i> {{ $effect->allInformation() }}</div>
@endif

@if($effect->type == 'glicose')
    <div class="ui basic pink label" data-tooltip="Glicose é boa para a concentração mas em excesso é prejudicial! Muito cuidado" data-position="top right"><i class="fa fa-birthday-cake" aria-hidden="true"></i> {{ $effect->allInformation() }}</div>
@endif

