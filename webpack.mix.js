const { mix } = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

/*




 |--------------------------------------------------------------------------
 | Css Master
 |--------------------------------------------------------------------------
 | 
 | Css que são necessários em todas as páginas
 |
 */
mix.styles([    
    'resources/assets/semantic/semantic.min.css',
    'resources/assets/semantic/icon.min.css',
    'resources/assets/semantic/button.min.css',
    'resources/assets/semantic/transition.min.css',

    //Achievement
    'resources/assets/css/achievement_alert.css',

    //Custom
    'resources/css/master.css',
], 'public/css/master.css');

/*
 |--------------------------------------------------------------------------
 | Js da página de seleção
 |--------------------------------------------------------------------------
 |
 | Js que são necessários em todas as páginas
 |
 */
mix.scripts([
    //slick
    'resources/assets/js/jquery-3.1.1.min.js',   
    'resources/assets/js/vue.js',
    'resources/assets/semantic/semantic.min.js',
    'resources/assets/semantic/transition.min.js',

    //Achievement
    'resources/assets/js/achievement_alert.js',

    //Custom
    'resources/js/master.js',
], 'public/js/master.js');

/*
 |--------------------------------------------------------------------------
 | Css da página de seleção
 |--------------------------------------------------------------------------
 |
 */
mix.styles([
    //slick
    'resources/assets/slick/slick-theme.css',
    'resources/assets/slick/slick.css',
    'resources/assets/css/escolher.css',

], 'public/css/escolher.css');

/*
 |--------------------------------------------------------------------------
 | Js da página de seleção
 |--------------------------------------------------------------------------
 |
 */
mix.scripts([
    //slick
    'resources/assets/slick/slick.min.js',   
    'resources/assets/js/escolher.js',

], 'public/js/escolher.js');





/*
 |--------------------------------------------------------------------------
 | Css Tutorial
 |--------------------------------------------------------------------------
 |
 */
mix.styles([

    'resources/assets/page-piling/jquery.pagepiling.css',
    'resources/assets/css/tutorial.css',

], 'public/css/tutorial.css');

/*
 |--------------------------------------------------------------------------
 | Js da página de seleção
 |--------------------------------------------------------------------------
 |
 */
mix.scripts([
	'resources/assets/page-piling/jquery.pagepiling.min.js',
	'resources/assets/js/tutorial.js',

], 'public/js/tutorial.js');





/*
 |--------------------------------------------------------------------------
 | Css Tutorial
 |--------------------------------------------------------------------------
 |
 */
mix.styles([

    'resources/assets/page-piling/jquery.pagepiling.css',
    'resources/assets/semantic/message.css',
    'resources/assets/css/tutorial.css',

], 'public/css/tutorial.css');

/*
 |--------------------------------------------------------------------------
 | Js da página de seleção
 |--------------------------------------------------------------------------
 |
 */
mix.scripts([
    'resources/assets/page-piling/jquery.pagepiling.min.js',
    'resources/assets/semantic/message.js',
    'resources/assets/js/tutorial.js',

], 'public/js/tutorial.js');




/*
 |--------------------------------------------------------------------------
 | Css Account (banco)
 |--------------------------------------------------------------------------
 |
 */
mix.styles([
    'resources/assets/semantic/custom/range.css',

    //Custom
    'resources/assets/css/account.css',

], 'public/css/account.css');

/*
 |--------------------------------------------------------------------------
 | Js Account
 |--------------------------------------------------------------------------
 |
 */
mix.scripts([
    'resources/assets/semantic/custom/range.js',

    //Custom
    // 'resources/assets/jogo',

], 'public/js/account.js');





/*
 |--------------------------------------------------------------------------
 | Css personal
 |--------------------------------------------------------------------------
 | Página de perfil do jogo
mix.styles([
    //Custom
    'resources/assets/css/personal.css',

], 'public/css/personal.css');

/*
 |--------------------------------------------------------------------------
 | Js personal
 |--------------------------------------------------------------------------
 | Página de perfil do jogador
 */
mix.scripts([
    //Custom
    'resources/assets/js/personal.js',

], 'public/js/personal.js');

/*
 |--------------------------------------------------------------------------
 | Css action
 |--------------------------------------------------------------------------
 | Página de jogo
 */
mix.styles([
    //Custom
    'resources/assets/css/action.css',
    'resources/assets/semantic/dropdown.css',
    'resources/assets/semantic/progress.css',

    //Toast
    'resources/assets/css/jquery.toast.css',

], 'public/css/action.css');

/*
 |--------------------------------------------------------------------------
 | Js action
 |--------------------------------------------------------------------------
 | Página de jogo
 */
mix.scripts([
    //Custom
    'resources/assets/js/action.js',
    'resources/assets/semantic/dropdown.js',
    'resources/assets/semantic/progress.js',

    //Toast
    'resources/assets/js/jquery.toast.js'

], 'public/js/action.js');