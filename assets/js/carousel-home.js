document.getElementById("btn-title").disabled = true;

    //navbar
    $(document).ready(function() {
            $(".menu-icon").on("click", function() {
                  $("nav ul").toggleClass("showing");  
            });
      });

    //carousel click
    var myCarousel= $('#myCarousel');
    var myNav = myCarousel.prev();

    myNav.find('li > a').click(function(){
      var newIndex = $(this).parent().index();
      myCarousel.carousel(newIndex);
    });

    myCarousel.on('slid.bs.carousel',function(){
      var newIndex = $(this).find('.carousel-inner>active').index();
      var newLI = myNav.children().eq(newIndex);
        if(!newLI.hassClass('active')){
          myNav.find('li.active').renoveclass('active');
          newLI.addClass('active');
        }
    });

    //responsive caption
     $(document).ready(function() {
        $('.carousel .carousel-caption').css('zoom', $('.carousel').width()/1366);
      });
        $(window).resize(function(){
         $('.carousel .carousel-caption').css('zoom', $('.carousel').width()/1366);
        });

    // password
    function tick(el){
      $("#input").attr('type', el.checked ? 'text':'password');
      }  