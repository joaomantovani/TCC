<div class="ui left fixed vertical inverted labeled sidebar menu" id="main-sidebar">
    <span class="item">
        <img src="http://placehold.it/600x600" class="ui fluid image">
        <h3>
            {{ Auth::user()->nickname }} <br>
            @if (isset(Auth::user()->info->class))
            <small>{{ Auth::user()->info->class()->first()->name }}</small>
            @endif
        </h3>
    </span>
    <span class="item">
        <p>Stamina {{ Auth::user()->stats->stamina }}%</p>
        <div class="ui inverted indicating progress" data-percent="100" id="example2">
            <div class="bar"></div>
            <div class="label stamina-status-init" style="display: none">{{ Auth::user()->stats->stamina }}</div>
        </div>
        <p>Tensão {{ Auth::user()->stats->pression }}%</p>
        <div class="ui inverted indicating progress" data-percent="100" id="example3">
            <div class="bar"></div>
            <div class="label stamina-status-init" style="display: none">{{ Auth::user()->stats->pression }}</div>
        </div>
    </span>
    {{-- 
    <span class="item">
        --}}
        {{-- 
        <div class="ui fluid teal large label">
            <i class="money icon"></i> {{ Auth::user()->wallet->getMoney() }}
        </div>
        --}}
        {{-- 
    </span>
    --}}
    <span class="item">
        <table class="ui inverted very basic collapsing celled table">
            <thead>
                <tr>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <h4 class="ui inverted image header">
                            <img src="http://placehold.it/45x45" class="ui mini rounded image">
                            <div class="content">
                                Inteligência
                                {{-- 
                                <div class="sub header">Inteligência  --}}
                                </div>
                            </div>
                        </h4>
                    </td>
                    <td>
                        {{ Auth::user()->stats->inteligence }}
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4 class="ui inverted image header">
                            <img src="http://placehold.it/45x45" class="ui mini rounded image">
                            <div class="content">
                                Carisma
                            </div>
                        </h4>
                    </td>
                    <td>
                        {{ Auth::user()->stats->charisma }}
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4 class="ui inverted image header">
                            <img src="http://placehold.it/45x45" class="ui mini rounded image">
                            <div class="content">
                                Audácia
                                {{-- 
                                <div class="sub header">Entertainment --}}</div>
                            </div>
                        </h4>
                    </td>
                    <td>
                        {{ Auth::user()->stats->audacity }}
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4 class="ui inverted image header">
                            <img src="http://placehold.it/45x45" class="ui mini rounded image">
                            <div class="content">
                                Sorte
                                {{-- 
                                <div class="sub header">Executive --}}</div>
                            </div>
                        </h4>
                    </td>
                    <td>
                        {{ Auth::user()->stats->luck }}
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="ui fluid teal large label">
            Dinheiro
            <div class="detail"> <i class="money icon"></i> {{ Auth::user()->wallet->getMoney() }}</div>
        </div>
        <br><br>
    </span>
    <span class="item">
    Equipamento <br>
    <div class="ui middle aligned divided list">
        <div class="item">
            <div class="right floated content">
                <button class="ui tiny inverted button" data-tooltip="Estado do seu equipamento" data-position="top right">43%</button>
            </div>
            {{-- <img class="ui avatar image" src="http://placehold.it/45x45"> --}}
            <div class="content">
                Teclado luminoso
            </div>
        </div>
        <div class="item">
            <div class="right floated content">
                {{-- 
                <div class="ui button">Add</div>
                --}}
                <button class="ui tiny teal inverted button" data-tooltip="Estado do seu equipamento" data-position="top right">65%</button>
            </div>
            {{-- <img class="ui avatar image" src="http://placehold.it/45x45"> --}}
            <div class="content">
                Monitor Ultrawide
            </div>
        </div>
        <div class="item">
            <div class="right floated content">
                {{-- 
                <div class="ui button">Add</div>
                --}}
                <button class="ui tiny red inverted button" data-tooltip="Estado do seu equipamento" data-position="top right">10%</button>
            </div>
            {{-- <img class="ui avatar image" src="http://placehold.it/45x45"> --}}
            <div class="content">
                Intel Core
            </div>
        </div>
        <div class="item">
            <div class="right floated content">
                {{-- 
                <div class="ui button">Add</div>
                --}}
                <button class="ui tiny green inverted button" data-tooltip="Estado do seu equipamento" data-position="top right">95%</button>
            </div>
            {{-- <img class="ui avatar image" src="http://placehold.it/45x45"> --}}
            <div class="content">
                Placa de vídeo
            </div>
        </div>
    </div>
</div>