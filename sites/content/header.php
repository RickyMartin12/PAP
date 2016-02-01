     <meta charset="utf-8">
     <meta name = "format-detection" content = "telephone=no" />
     <link rel="icon" href="images/12.ico" >
     <link rel="shortcut icon" href="images/12.ico"  />
     <script src="magicslideshow/magicslideshow.js" type="text/javascript"></script>
     <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.pack.min.js"></script>
     <script type="text/javascript">
    $(function($){
        var addToAll = false;
        var gallery = true;
        var titlePosition = 'inside';
        $(addToAll ? 'img' : 'img.fancybox').each(function(){
            var $this = $(this);
            var title = $this.attr('title');
            var src = $this.attr('data-big') || $this.attr('src');
            var a = $('<a href="#" class="fancybox"></a>').attr('href', src).attr('title', title);
            $this.wrap(a);
        });
        if (gallery)
            $('a.fancybox').attr('rel', 'fancyboxgallery');
        $('a.fancybox').fancybox({
            titlePosition: titlePosition
        });
    });
    $.noConflict();
    </script>
    <link rel="stylesheet" type="text/css" href="magicslideshow/magicslideshow.css"/>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
     <link rel="stylesheet" type="text/css" media="screen" href="http://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.css" />
    <style type="text/css">
    a.fancybox img {
        border: none;
        box-shadow: 0 1px 7px rgba(0,0,0,0.6);
        -o-transform: scale(1,1); -ms-transform: scale(1,1); -moz-transform: scale(1,1); -webkit-transform: scale(1,1); transform: scale(1,1); -o-transition: all 0.2s ease-in-out; -ms-transition: all 0.2s ease-in-out; -moz-transition: all 0.2s ease-in-out; -webkit-transition: all 0.2s ease-in-out; transition: all 0.2s ease-in-out;
    } 
    a.fancybox:hover img {
        position: relative; z-index: 999; -o-transform: scale(1.03,1.03); -ms-transform: scale(1.03,1.03); -moz-transform: scale(1.03,1.03); -webkit-transform: scale(1.03,1.03); transform: scale(1.03,1.03);
    }
    </style>
     <link rel="stylesheet" href="css/touchTouch.css">
     <link  rel="stylesheet" media="screen" href="css/style.css">
     <link  rel="stylesheet" href="css/camera.css">
     <link  rel="stylesheet" href="css/carousel.css">
     <link  rel="stylesheet" href="css/font-awesome.css">
     <link rel="stylesheet" type="text/css" media="screen" href="css/form.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
     <script type="text/javascript" src="http://arrow.scrolltotop.com/arrow86.js"></script>
     <script src="js/jquery.js"></script>
     <script src="js/jquery-migrate-1.1.1.js"></script>
     <script src="js/script.js"></script> 
     <script src="js/jquery.equalheights.js"></script>
     <script src="js/superfish.js"></script>
     <script type="text/javascript" src="js/forms.js"></script>
     <script  src="js/jquery.responsivemenu.js"></script>
     <script  src="js/jquery.mobilemenu.js"></script>
     <script  src="js/jquery.easing.1.3.js"></script>
     <script src="js/camera.js"></script>
     <script  src="js/jquery.mobile.customized.min.js"></script>
     <script src="js/jquery.carouFredSel-6.1.0-packed.js"></script>
     <script  src="js/jquery.touchSwipe.min.js"></script>
     <script src="js/touchTouch.jquery.js"></script>



     <script>
     	$(document).ready(function(){
      jQuery('#camera_wrap').camera({
        loader: false,
        pagination: false,
        thumbnails: false,
        height: '45%',
        caption: false,
        navigation: true,
        fx: 'simpleFade'
      });   
			});

        $(document).ready(function(){
      jQuery('#camera').camera({
        loader: false,
        pagination: false,
        thumbnails: false,
        height: '1100px',
        caption: false,
        navigation: true,
        fx: 'simpleFade'
      });   
            });


   
          $(window).load (
    function(){$('.carousel1').carouFredSel({auto: false, prev: '.prev1',next: '.next1', width: 940, items: {
      visible : {min: 1,
       max: 1
},
height: 'auto',
 width: 940,

    }, responsive: true, 
    
    scroll: 1, 
    
    mousewheel: false,
    
    swipe: {onMouse: true, onTouch: true}});
    
    } ); 

  
     </script>

     <script>
            $(document).ready(function(){
                $().UItoTop({ easingType: 'easeOutQuart' });
                $('.gallery a.gal').touchTouch();
            });
        </script>

