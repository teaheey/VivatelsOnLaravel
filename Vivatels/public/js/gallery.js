$( document ).ready(function() {  


    $( ".menu label" ).mouseenter(function() {
        $(this).css('color', 'white');
     });

     $( ".menu label" ).mouseleave(function() {
        $(this).css('color', 'black');
     });

    $( ".menu label" ).click(function() {

       /*
            making transitions between gallery sections responsive
       */
        //all photos selected
       if($(this).data('type') == 'all')
       {
        $('.menu label').css('text-decoration', 'none');
        $('.menu label').css('font-size', '18px');
        $(this).css('text-decoration', 'underline white 3px');
        $(this).css('font-size', '20px');
        //show all photos
        $('.gallery .pic').fadeOut();
        $('.gallery .pic').fadeIn("slow");
       } else {
        //hide all photos
        $('.gallery .pic').fadeOut("slow");
        //show selected category photos (by class and data-type attributes)
        $('.gallery').find('.' + $(this).data('type')).fadeIn("slow");
        //style selected gallery section
        $('.menu label').css('text-decoration', 'none');
        $('.menu label').css('font-size', '18px');
        $(this).css('text-decoration', 'underline white 3px');
        $(this).css('font-size', '20px');
       }

    });

    //not using modal form
    var modal = document.getElementById('myModal');

      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
      if (event.target == modal) {
         modal.style.display = "none";
      }
      }
});

