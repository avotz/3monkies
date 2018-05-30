if ('serviceWorker' in navigator) {
    window.addEventListener('load', function () {
        navigator.serviceWorker.register('/sw-monkiescr.js').then(function (registration) {
            // Registration was successful
          // console.log('ServiceWorker registration successful with scope: ', registration.scope);
        }).catch(function (err) {
            // registration failed :(
            console.log('ServiceWorker registration failed: ', err);
        });
    });
}

;(function($){
  

    $('.wpcf7-select').select2();

  $('.map')
  .click(function(){
      $(this).find('iframe').addClass('clicked')})
  .mouseleave(function(){
      $(this).find('iframe').removeClass('clicked')});

  function isHome(){
      return $('body').hasClass('home');
    }





    //temporalmente para no hacer booking //////
    $('.woocommerce-tabs .book_tab a').attr('href', '#tour-popup')
    $('.woocommerce-tabs .book_tab a').attr('data-title', $('h1.product_title').data('product-slug'))
    $('.woocommerce-tabs .book_tab a').magnificPopup({
        type: 'inline',
        midClick: true,
        removalDelay: 500, //delay removal by X to allow out-animation
        callbacks: {
            beforeOpen: function () {

                this.st.mainClass = 'mfp-zoom-out';
                $('body').addClass('mfp-open');
            },
            beforeClose: function () {


                $('body').removeClass('mfp-open');
            }

        }


    });
    $('.woocommerce-tabs .book_tab a').on('click', function (e) {

        $('#tour-popup').find('select[name="tours[]"] option[value="' + $(this).attr('data-title') + '"]').attr("selected", true).change();

    });

    $('.woocommerce-tabs .book_shuttle_tab a').attr('href', '#transportation-popup')
    $('.woocommerce-tabs .book_shuttle_tab a').attr('data-title', $('h1.product_title').text())
    $('.woocommerce-tabs .book_shuttle_tab a').magnificPopup({
        type: 'inline',
        midClick: true,
        removalDelay: 500, //delay removal by X to allow out-animation
        callbacks: {
            beforeOpen: function () {

                this.st.mainClass = 'mfp-zoom-out';
                $('body').addClass('mfp-open');
            },
            beforeClose: function () {


                $('body').removeClass('mfp-open');
            }

        }


    });
    $('.woocommerce-tabs .book_shuttle_tab a').on('click', function (e) {

        $('#transportation-popup').find('input[name="destination"]').val($(this).attr('data-title'));

    });
    //////////////////////////////////////////////////////////

    $('.tour-popup-link').magnificPopup({
        type: 'inline',
        midClick: true,
        removalDelay: 500, //delay removal by X to allow out-animation
        callbacks: {
            beforeOpen: function () {

                this.st.mainClass = 'mfp-zoom-out';
                $('body').addClass('mfp-open');
            },
            beforeClose: function () {


                $('body').removeClass('mfp-open');
            }

        }


    });
    $('.transportation-popup-link').magnificPopup({
        type: 'inline',
        midClick: true,
        removalDelay: 500, //delay removal by X to allow out-animation
        callbacks: {
            beforeOpen: function () {

                this.st.mainClass = 'mfp-zoom-out';
                $('body').addClass('mfp-open');
            },
            beforeClose: function () {


                $('body').removeClass('mfp-open');
            }

        }


    });
    $('.contact-popup-link').magnificPopup({
        type: 'inline',
        midClick: true,
        removalDelay: 500, //delay removal by X to allow out-animation
        callbacks: {
            beforeOpen: function () {

                this.st.mainClass = 'mfp-zoom-out';
                $('body').addClass('mfp-open');
            },
            beforeClose: function () {


                $('body').removeClass('mfp-open');
            }

        }


    });

    $(".date").flatpickr({
        minDate: "today",
        onChange: function (selectedDates, dateStr, instance) {
            //$('.filters').find('form').submit();
        },
    });



    fillSelectTour();

    function fillSelectTour() {


        $.ajax({
            type: 'GET',
            url: '/api/get_posts/?post_type=product&count=-1',//'/api/get_post/?id='+ post_id +'&post_type=tour',

            success: function (data) {
                //console.log(data)

                var items = [];

                var select = $('select[name="tours[]"]').empty();
                $.each(data.posts, function (i, item) {
                    select.append('<option value="'
                        + $.trim(item.slug) + '">'
                        + item.title
                        + '</option>');



                });


                //select.prepend('<option value="" selected><span style="color:red;">--</span></option>');

            },
            error: function () {
                console.log('error cargando los tours')
            }
        });

    }

    //accordion
    $('.accordion-title').on('click', function (e) {

      
        if ($('#' + e.currentTarget.id + ' + div.accordion-description').css("display") == "none") {
            $('.accordion-description').hide();
            $('#' + e.currentTarget.id + ' + div.accordion-description').fadeIn(500);
        } else
            $('#'+ e.currentTarget.id + ' + div.accordion-description').hide();


    });



    
    
    $(window).scroll(function () {

          if(isHome()){
            
              if ($(this).scrollTop() > 0) {
                  $('body').addClass("header--fixed");
              } else {
                  $('body').removeClass("header--fixed");
              }
        }

      });







 
    $(window).on('load', function() {
      
        resize();
        

    });


$(window).resize(resize);

function resize () {
   responsive();
}

function responsive() {
           
               /* var isResponsive = $('.main').hasClass('fp-responsive');
                if (getWindowWidth() < 1000) {
                    if (!isResponsive) {
                        $.fn.fullpage.setAutoScrolling(false, 'internal');
                        $.fn.fullpage.setFitToSection(false, 'internal');
                        $('.main').addClass('fp-responsive');
                    }
                } else if (isResponsive) {
                     $.fn.fullpage.setAutoScrolling(true, 'internal');
                     $.fn.fullpage.setFitToSection(true, 'internal');
                     $('.main').removeClass('fp-responsive');
                }
*/
               
            
        }


    
})(jQuery);

