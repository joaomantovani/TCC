<div class="ui inverted menu">
    <div class="ui container">
        <a href="#" class="header item">
            <img class="logo" src="http://placehold.it/45x45" style="margin-right: 10px"> TCC
        </a>
        <a href="#" class="item">Home</a>
        <div class="ui simple dropdown item">
            Dropdown <i class="dropdown icon"></i>
            <div class="menu">
                <a class="item" href="#">Link Item</a>
                <a class="item" href="#">Link Item</a>
                <div class="divider"></div>
                <div class="header">Header Item</div>
                <div class="item">
                    <i class="dropdown icon"></i>
                    Sub Menu
                    <div class="menu">
                        <a class="item" href="#">Link Item</a>
                        <a class="item" href="#">Link Item</a>
                    </div>
                </div>
                <a class="item" href="#">Link Item</a>
            </div>
        </div>

        <div class="item">
            Stamina <span id="stamina-status" style="margin-left: 5px"> {{ Auth::user()->stats->stamina }}</span>
        </div>

        <div class="item">
            Dinheiro <span id="money-status" style="margin-left: 5px"> {{ Auth::user()->wallet->getMoney() }}</span>
        </div>
    </div>
</div>