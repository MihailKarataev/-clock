
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


<div class="container">
    <div class="watch">
        <div class="hours"><div class="hours-color"></div></div>
        <div class="minutes"><div class="minutes-color"></div></div>
        <div class="seconds"><div class="seconds-color"></div></div>
        <div class="point"></div>
    </div>
</div>

<script>
    $ = jQuery;    
    setInterval( function() {
        var seconds = new Date().getSeconds();
        var sdegree = seconds * 6;
        var srotate = "rotate(" + sdegree + "deg)";
        $(".seconds").css({"-moz-transform" : srotate, "-webkit-transform" : srotate});
    }, 1000 );

    setInterval( function() {
        var seconds = new Date().getMinutes();
        var sdegree = seconds * 6;
        var srotate = "rotate(" + sdegree + "deg)";
        $(".minutes").css({"-moz-transform" : srotate, "-webkit-transform" : srotate});
    }, 1000 );

    setInterval( function() {
        var seconds = new Date().getHours();
        var sdegree = seconds * 6;
        var srotate = "rotate(" + sdegree + "deg)";
        $(".hours").css({"-moz-transform" : srotate, "-webkit-transform" : srotate});
    }, 1000 );
</script>
