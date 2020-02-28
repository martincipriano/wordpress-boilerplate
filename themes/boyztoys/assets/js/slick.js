jQuery( function($) {
  window.slick = {}

  window.slick.init = function() {
    let $slick = $('.slick')

    $.each( $slick, function () {
      $(this).slick()
    })
  }

  window.slick.init()
})