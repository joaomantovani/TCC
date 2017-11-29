$('#example2').progress({
  percent: parseInt( $('.stamina-status-init').text()),
  text : {
    active  : false,
    error   : false,
    success : false,
    warning : false,
    percent : '{percent}%',
    ratio   : '{value} of {total}'
  }
});

$('#main-sidebar').sidebar({
    // Overlay will mean the sidebar sits on top of your content
    transition: 'push'
});

// Do the toggling
$('#btn-menu-sidebar').on('click', function() {
    $('#main-sidebar').sidebar('toggle');
});

function changeStamina(stamina) {
  $('.stamina .progress').attr('data-percent', stamina + '%');
  $('.stamina .bar').css('width', stamina + '%');
  $('.stamina .label.progress').text(stamina + '%');
}

function changeTensao(stamina) {
  $('.tensao .progress').attr('data-percent', stamina + '%');
  $('.tensao .bar').css('width', stamina + '%');
  $('.tensao .label.progress').text(stamina + '%');
}

function changeMoney(money) {
  $('.money-count').text(money);
}