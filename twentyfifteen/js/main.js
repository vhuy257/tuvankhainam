var semantic = function() {
  $('.browse.item')
    .popup({
      popup     : '.admission.popup',
      hoverable : true,
      position  : 'bottom left',
      delay     : {
        show: 300,
        hide: 800
      }
    });
};

// attach ready event
$(document)
  .ready(semantic)
;
