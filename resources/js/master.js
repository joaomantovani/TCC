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