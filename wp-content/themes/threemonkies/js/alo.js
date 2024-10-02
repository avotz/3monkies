$('.woocommerce-tabs .book_wedding_tab a').attr('href', '#wedding-popup')
$('.woocommerce-tabs .book_wedding_tab a').attr('data-title', $('h1.product_title').text())
$('.woocommerce-tabs .book_wedding_tab a, .book-wedding').magnificPopup({
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
$('.woocommerce-tabs .book_wedding_tab a, .book-wedding').on('click', function (e) {

    $('#wedding-popup').find('input[name="wedding"]').val($(this).attr('data-title'));

});

var onlyRoundTrip = $('#wedding-popup').find('.only-round-trip');
    $('#wedding-popup').find('select[name="type"]').on('change', function (e){
        console.log($(this).val());
        if($(this).val() == 'Round Trip'){
            onlyRoundTrip.show();
        }else{
            onlyRoundTrip.hide();
        }
    });