<span class="item">
    <img class="ui centered tiny circular image" src="{{ Auth::user()->getAvatar() }}">
        <h3 class="no-margin">
            {{ Auth::user()->nickname }} <br>
            @if (isset(Auth::user()->info->class))
            <small>{{ Auth::user()->info->class()->first()->name }}</small>
            @endif
        </h3>
    </span>
    <div class="item">
        <div class="ui fluid teal large label">
            Dinheiro
            <div class="detail"> <i class="money icon"></i> {{ Auth::user()->wallet->getMoney() }}</div>
        </div>
        <h6></h6>
    </div>
    <span class="item">
        {{-- <p>Stamina {{ Auth::user()->stats->stamina }}%</p> --}}
        <div class="ui inverted indicating progress" data-percent="100" id="example2">
            <div class="bar">
                <div class="progress">{{ Auth::user()->stats->stamina }}</div>
            </div>
            {{-- <div class="label stamina-status-init" style="display: none">{{ Auth::user()->stats->stamina }}</div> --}}
            <div class="label white-text">Stamina</div>
        </div>
        {{-- <p>Tensão {{ Auth::user()->stats->pression }}%</p>
        <div class="ui inverted indicating progress" data-percent="100" id="example3">
            <div class="bar"></div>
            <div class="label stamina-status-init" style="display: none">{{ Auth::user()->stats->pression }}</div>
        </div> --}}
        <div class="ui inverted indicating progress" data-percent="100" id="example3">
            <div class="bar">
                <div class="progress">{{ Auth::user()->stats->pression }}</div>
            </div>
            {{-- <div class="label stamina-status-init" style="display: none">{{ Auth::user()->stats->stamina }}</div> --}}
            <div class="label white-text">Tensão</div>
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
        <div class="ui grid lvl-buttons">
            <div class="eight wide column">
                <span class="ui tiny white fluid inverted button" data-tooltip="Inteligência" data-position="top right"> INT: 23 </span>
            </div>

            <div class="eight wide column">
                <span class="ui tiny white fluid inverted button" data-tooltip="Carisma" data-position="top right"> CAR: 23 </span>
            </div>

            <div class="eight wide column">
                <span class="ui tiny white fluid inverted button" data-tooltip="Audácia" data-position="top right"> AUD: 23 </span>
            </div>

            <div class="eight wide column">
                <span class="ui tiny white fluid inverted button" data-tooltip="Sorte" data-position="top right"> SOR: 23 </span>
            </div>
        </div>
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
    </span>

    <span class="item">
        <div class="ui grid menu-buttons">
            <div class="{{-- eight --}} sixteen wide column">
                <a href="{{ url('home') }}" class="ui tiny white fluid inverted button" data-tooltip="Ir para a home" data-position="top right"> <i class="home icon"></i> Home </a>
                <a href="{{ url('acao') }}" class="ui tiny white fluid inverted button" data-tooltip="Fazer uma ação" data-position="top right"> <i class="crosshairs red icon"></i> Ação </a>
                <a href="{{ url('banco') }}" class="ui tiny white fluid inverted button" data-tooltip="Ir para o banco" data-position="top right"> <i class="bitcoin icon"></i> Banco </a>
                <a href="{{ url('loja') }}" class="ui tiny white fluid inverted button" data-tooltip="Ir para a loja" data-position="top right"> <i class="shop icon"></i> Loja </a>
            </div>
        </div>
    </span>