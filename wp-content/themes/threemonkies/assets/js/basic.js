;(function($){

    var isMobile = {
        Android: function() {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function() {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function() {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function() {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function() {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function() {
            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
        }
    };

  var $btnMenu = $('#btn-menu'),
      $btnInfo = $('#btn-info'),
      $menu = $('.menu-right');
      $body = $('body');



      $btnMenu.on('click', function (e) {
        $body.removeClass('info-is-open');
          $body.toggleClass('nav-is-open');

      });

  $btnInfo.on('click', function (e) {
      $body.removeClass('nav-is-open');
      $body.toggleClass('info-is-open');

    });

  //ADD CLASS LI MENU FOR JOOMLA

  $menu.find('.menu-right-ul > li:nth-child(3n+1)').addClass('orange');
  $menu.find('.menu-right-ul > li:nth-child(3n+2)').addClass('lime');
  $menu.find('.menu-right-ul > li:nth-child(3n)').addClass('green');

    $menu.find(".menu-item-has-children").hoverIntent({
        over: function() {

                $(this).find(">.sub-menu").slideDown(200 );
            },
        out:  function() {
                
                $(this).find(">.sub-menu").slideUp(200);
            },
        timeout: 200

            });

     
})(jQuery);


function getWindowHeight() {
  var windowHeight=0;
  if (typeof(window.innerHeight)=='number') {
    windowHeight=window.innerHeight;
  } else {
    if (document.documentElement && document.documentElement.clientHeight) {
      windowHeight = document.documentElement.clientHeight;
    } else {
      if (document.body && document.body.clientHeight) {
        windowHeight=document.body.clientHeight;
      }
    }
  }
  return windowHeight;
}

function getWindowWidth() {
  var windowWidth=0;
  if (typeof(window.innerWidth)=='number') {
    windowWidth=window.innerWidth;
  } else {
    if (document.documentElement && document.documentElement.clientWidth) {
      windowWidth = document.documentElement.clientWidth;
    } else {
      if (document.body && document.body.clientWidth) {
        windowWidth=document.body.clientWidth;
      }
    }
  }
  return windowWidth;
}





