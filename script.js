/*
The hover state of the shop page 
*/
$(".item").hover(
  function () {
    $(this).addClass('hover');
  	console.log('Hovered!');
  },
  function () {
    $(this).removeClass('hover');
    console.log('Unhovered!');
  }
);


// The animation of the sidebar page. If the URL contains the string 'shop' anywhere in it
// you don't get an error constaintly looking for the variable 'top'.
 if(document.URL.indexOf("shop") >= 0){ 
        $(function sideBar() {

            var $shoppingMenu   = $('.shoppingMenu'), // Creating a shorthand way of saying $('shoppingMenu')
                $window    = $(window), // Defines variable $(window) to be called $window
                offset     = $shoppingMenu.offset(), // setting variable offset to be equal to the top most pixel of class shoppingMenu
                topPadding = 200; // Top padding is set to 150 since that's how many pixels it was originally
            $window.scroll(function() {
                if ($window.scrollTop() > offset.top) {
                        	console.log('Going down!');
                        $shoppingMenu.stop().animate({
                            marginTop: $window.scrollTop() - offset.top + topPadding
                        } ,0);
                    } else {
                        	console.log('Going up!');
                        $shoppingMenu.stop().animate({
                            marginTop: 155
                        }, 0);     
                }
            }); 
        });
}