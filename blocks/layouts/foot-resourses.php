<script src="assets/js/jQuery3.4.1.js"></script>
<script src="assets/js/jquery.nicescroll.js"></script>

<script>
    $(document).ready(function () {

        $('.menu-icon').on('click', function () {
            $('.mobile-menu').toggleClass('d-block');
        });

        $('.videopannel .video-play-link').on('click', function(e){
            e.preventDefault();
            var $link = $(this).attr('href'),
                $parent = $(this).parents('.videopannel');

            $parent.find('.video-play').addClass('d-none');
            $parent.find('.video-player').removeClass('d-none').addClass('d-block');
            $parent.find('.video-player iframe').attr('src', $link);
        });


        $('.videomenu').niceScroll({
            cursorcolor: "#aaa",
            cursorborder: "none",
            cursorborderradius: "none",
            rtlmode: "auto"
        });


    });
</script>