<!DOCTYPE html>
<html lang="en">
  <head>
		<title>Eyeopeners - Wij maken online applicaties en Websites</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
      
        <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
      
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
		

		<link rel="stylesheet" type="text/css" href="css/slicknav.css">
		<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="css/style.css">
		
		
		

		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700|Open+Sans:700' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="js/jquery.mobile.customized.min.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script> 
		
		<script type="text/javascript" src="js/myscript.js"></script>
		<script src="js/sorting.js" type="text/javascript"></script>
		<script src="js/jquery.isotope.js" type="text/javascript"></script>
		<!--script type="text/javascript" src="js/jquery.nav.js"></script-->
      
      
      <link rel='stylesheet' id='camera-css'  href='css/camera.css' type='text/css' media='all'>
      <script type="text/javascript" src="js/camera.min.js"></script>
		

		<script>
			jQuery(function(){
					jQuery('#camera_wrap_1').camera({
					transPeriod: 500,
					time: 3000,
					height: '490px',
					thumbnails: false,
					pagination: true,
					playPause: false,
					loader: false,
					navigation: false,
					hover: false
				});
			});
		</script>
		
	</head>
	<body>
    
    <!--home start-->
    
    <div id="home">
        <div class="headerLine">
            <div id="menuF" class="default">
                <div class="container">
                    <div class="row">
                        <div class="logo col-md-4">
                            <div>
                                <a href="http://eyeopenersbranding.nl/">
                                    <img src="images/logo.png">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="navmenu"style="text-align: center;">
                                <ul id="menu">
                                    <li class="active" ><a href="index.php">Home</a></li>
                                    <li><a href="http://eyeopenersbranding.nl/#about">Onze trots</a></li>
                                    <li><a href="http://eyeopenersbranding.nl/#project">Wie wij zijn</a></li>
                                    <li><a href="http://eyeopenersbranding.nl/#news">Nieuws</a></li>
                                    <li class="last"><a href="#contact">Contact</a></li>
                                    <!--li><a href="#features">Features</a></li-->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row wrap">
                    <div class="col-md-12 gallery"> 
                            <div class="camera_wrap camera_white_skin" id="camera_wrap_1">
                                <div data-thumb="" data-src="images/slides/blank.gif">
                                    <div class="img-responsive camera_caption fadeFromBottom">
                                        <h2>You ask.</h2>
                                    </div>
                                </div>
                                <div data-thumb="" data-src="images/slides/blank.gif">
                                    <div class="img-responsive camera_caption fadeFromBottom">
                                        <h2>We make.</h2>
                                    </div>
                                </div>
                                <div data-thumb="" data-src="images/slides/blank.gif">
                                    <div class="img-responsive camera_caption fadeFromBottom">
                                        <h2>You smile.</h2>
                                    </div>
                                </div>
                            </div><!-- #camera_wrap_1 -->
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container items">
            <div class="col-md-6">
                <img class="img-responsive picsGall" src="images/prettyPhotoImages/111/pic2.jpg"/>
            </div>
            <div class="col-md-6">
                <p>
                    Leads, het nieuwe online goud.
					Wij hebben ontzettend veel ervaring met leads in de automotive sector. Mede hierdoor hebben wij een van de meest krachtige lead-management applicatie kunnen maken.<br /><br />
					Deze applicatie heeft zich al bewezen voor verschillende grote en kleine ondernemingen. Haal ook meer uit uw online kanaal en start vandaag nog met Triple-A-Leads.	
                </p>
            </div>        
        </div>
    
		<div class="line7">
			<div class="container">
				<div class="row footer">
					<div class="soc col-md-12">
						<ul>
							<li class="soc1"><a href="#"></a></li>
							<li class="soc2"><a href="#"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="lineBlack">
			<div class="container">
				<div class="row downLine">
					<div class="col-md-6 text-left copy">
					</div>
					<div class="col-md-6 text-right dm">
						<ul id="downMenu">
							<li class="active"><a href="#home">Home</a></li>
							<li><a href="#about">Onze trots</a></li>
							<li><a href="#project1">Wie wij zijn</a></li>
							<li><a href="#news">Nieuws</a></li>
							<li class="last"><a href="#contact">Contact</a></li>
							<!--li><a href="#features">Features</a></li-->
						</ul>
					</div>
				</div>
			</div>
		</div>
    </div>		

	<script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.js"></script>
	<script>
			$(document).ready(function(){
			$(".bhide").click(function(){
				$(".hideObj").slideDown();
				$(this).hide(); //.attr()
				return false;
			});
			$(".bhide2").click(function(){
				$(".container.hideObj2").slideDown();
				$(this).hide(); // .attr()
				return false;
			});
				
			$('.heart').mouseover(function(){
					$(this).find('i').removeClass('fa-heart-o').addClass('fa-heart');
				}).mouseout(function(){
					$(this).find('i').removeClass('fa-heart').addClass('fa-heart-o');
				});
				
				function sdf_FTS(_number,_decimal,_separator)
				{
				var decimal=(typeof(_decimal)!='undefined')?_decimal:2;
				var separator=(typeof(_separator)!='undefined')?_separator:'';
				var r=parseFloat(_number)
				var exp10=Math.pow(10,decimal);
				r=Math.round(r*exp10)/exp10;
				rr=Number(r).toFixed(decimal).toString().split('.');
				b=rr[0].replace(/(\d{1,3}(?=(\d{3})+(?:\.\d|\b)))/g,"\$1"+separator);
				r=(rr[1]?b+'.'+rr[1]:b);

				return r;
}
				
			setTimeout(function(){
					$('#counter').text('0');
					$('#counter1').text('0');
					$('#counter2').text('0');
					setInterval(function(){
						
						var curval=parseInt($('#counter').text());
						var curval1=parseInt($('#counter1').text().replace(' ',''));
						var curval2=parseInt($('#counter2').text());
						if(curval<=707){
							$('#counter').text(curval+1);
						}
						if(curval1<=12280){
							$('#counter1').text(sdf_FTS((curval1+20),0,' '));
						}
						if(curval2<=245){
							$('#counter2').text(curval2+1);
						}
					}, 2);
					
				}, 500);
			});
	</script>
	<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery('#menu').slicknav();
		
	});
	</script>
	
	<script type="text/javascript">
    $(document).ready(function(){
       
        var $menu = $("#menuF");
            
        $(window).scroll(function(){
            if ( $(this).scrollTop() > 100 && $menu.hasClass("default") ){
                $menu.fadeOut('fast',function(){
                    $(this).removeClass("default")
                           .addClass("fixed transbg")
                           .fadeIn('fast');
                });
            } else if($(this).scrollTop() <= 100 && $menu.hasClass("fixed")) {
                $menu.fadeOut('fast',function(){
                    $(this).removeClass("fixed transbg")
                           .addClass("default")
                           .fadeIn('fast');
                });
            }
        });
	});
    //jQuery
	</script>
	<script>
		/*menu*/
		function calculateScroll() {
			var contentTop      =   [];
			var contentBottom   =   [];
			var winTop      =   $(window).scrollTop();
			var rangeTop    =   200;
			var rangeBottom =   500;
			$('.navmenu').find('a').each(function(){
				contentTop.push( $( $(this).attr('href') ).offset().top );
				contentBottom.push( $( $(this).attr('href') ).offset().top + $( $(this).attr('href') ).height() );
			})
			$.each( contentTop, function(i){
				if ( winTop > contentTop[i] - rangeTop && winTop < contentBottom[i] - rangeBottom ){
					$('.navmenu li')
					.removeClass('active')
					.eq(i).addClass('active');				
				}
			})
		};
		
		$(document).ready(function(){
			calculateScroll();
			$(window).scroll(function(event) {
				calculateScroll();
			});
			$('.navmenu ul li a').click(function() {  
				$('html, body').animate({scrollTop: $(this.hash).offset().top - 80}, 800);
				return false;
			});
		});		
	</script>	
	<script type="text/javascript" charset="utf-8">

		jQuery(document).ready(function(){
			jQuery(".pretty a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: true, social_tools: ''});
			
		});
	</script>
	</body>
	
</html>