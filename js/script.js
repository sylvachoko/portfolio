// Shrink nav on scroll
$(window).scroll(function(event){
    var s = $(window).scrollTop();
    if (s > 0){
        $('.nav').addClass('nav-scrolled');
    } else {
        $('.nav').removeClass('nav-scrolled');
    }
  });

  // Nav toggle
  $('.nav-toggle').click(function(){
    $(this).toggleClass('nav-toggled');
    $('.nav-links').toggleClass('nav-links-show');
  });