<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include 'config.php';
$sql_query = "select * from home where menu='VISI'";
$result = mysqli_query($con,$sql_query);
$sql_query_running = "select * from running";
$result_running = mysqli_query($con,$sql_query_running);
$sql_profile = "select * from profile";
$resultprofile = mysqli_query($con,$sql_profile);
$profile = mysqli_fetch_array($resultprofile);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Kejaksaan Negeri Landak</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Trade Market Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link class="include" rel="stylesheet" type="text/css" href="css/jquery.jqplot.css" />
<!-- calender -->
<link type="text/css" href="css/jquery.simple-dtpicker.css" rel="stylesheet" />
<!-- //calender -->
<!-- different-chart-bar -->
<link rel="stylesheet" href="css/chart.min.css">
<!-- //different-chart-bar -->
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font-awesome.min.css" />
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/jquery.marquee.min.js"></script>
<!-- js -->
<!-- pop-up -->
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<!-- //pop-up -->
<!-- left-chart -->
<script src="js/jquery.flot.min.js" type="text/javascript"></script> 
<script src="js/jquery.flot.animator.min.js" type="text/javascript"></script>
<!-- //left-chart -->
<link href="//fonts.googleapis.com/css?family=Muli:300,300i,400,400i" rel="stylesheet">
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<link rel="icon" type="image/png" href="./images/loggo2_YfP_2.ico"/>
<!-- start-smoth-scrolling -->
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
</head>
	
<body>
<?php include 'headernavinclude.html';?>
<!-- banner -->
	<div class="banner">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="w3_agile_banner_text banner1">
								<h3></h3>
								<div class="more">
									
								</div>
							</div>
						</li>
						<li>
							<div class="w3_agile_banner_text banner2">
								<h3></h3>
								<div class="more">
									
								</div>
							</div>
						</li>
						<li>
							<div class="w3_agile_banner_text banner3">
								<h3></h3>
								<div class="more">
									
								</div>
						</li>
						<li>
							<div class="w3_agile_banner_text banner4">
								<h3></h3>
								<div class="more">
									
								</div>
							</div>
						</li>
					</ul>
				</div>
			</section>
			<!-- flexSlider -->
				<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
				<script defer src="js/jquery.flexslider.js"></script>
				<script type="text/javascript">
				$(window).load(function(){
				  $('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					}
				  });
				});
			  </script>
			<!-- //flexSlider -->
	</div>
<!-- //banner -->
<!-- banner-bottom -->
	<div class="banner-bottom">
		
		<script src="js/jquery.bootstrap.newsbox.min.js" type="text/javascript"></script>
		<div class='agileinfo_marquee'>
			<div data-speed="10" class="marquee">
				<?php
					while($row = mysqli_fetch_assoc($result_running)) {
						echo $row['text'];
					}
				?>
			</div>
		</div>
	</div>
<!-- //banner-bottom -->
<!-- news-original -->
	<div class="news-original">
		<div class="container">
			<div class="agileinfo_news_original_grids">
				<div class="col-md-9 agileinfo_news_original_grids_left1">
					<?php
                    while($row = mysqli_fetch_assoc($result)) {
                    	echo $row['konten'];
                    }
                    ?>
				</div>
				<div class="col-md-3 agileinfo_news_original_grids_right">
					<div class="w3layouts_add_market">
						<div style="text-align: center"><b>KEPALA<br/>KEJAKSAAN NEGERI LANDAK</b><br/></div>
						<img src="images/<?php echo $profile['fotopimpinan']; ?>" alt=" " class="img-responsive" />
						
						<div style="text-align: center"><br /><?php echo $profile['namapimpinan']; ?></div>
						<hr/>
						<p style="text-align: left;border-bottom: 2px solid #0B6623">WILAYAH</p>
						<img src="https://landakkab.go.id/public/assets/images/theme/800px-Landak.svg.png" class="img-responsive">
						<?php echo $profile['wilayah']; ?>
						<hr/>
						Ikuti info terbaru kami di
						<hr/>
						<div style="display: flex;justify-content: center;">
						<a href="https://www.facebook.com/kejarilandak.kejarilandak"><i class="fa fa-facebook fa-lg fa-3x" style="color:blue"></i></a>
						<a href="https://twitter.com/kejarilandak"><i class="fa fa-twitter fa-lg fa-3x" style="color:cyan;margin-left: 20px"></i></a>
						<a href="https://www.youtube.com/channel/UCcIaMGuHGOWwX4j-b8Dc3Ig/featured"><i class="fa fa-youtube fa-lg fa-3x" style="color:red;margin-left: 20px"></i></a>
						<a href="https://www.instagram.com/kejarilandak/"><i class="fa fa-instagram fa-lg fa-3x" style="color:magenta;margin-left: 20px"></i></a>
					</div>
					<div class="w3_stocks">
						<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
							<ul id="myTab2" class="nav nav-tabs nav-tabs1" role="tablist">
								<li role="presentation" class="active">
							</ul>
							<div id="myTabContent2" class="tab-content">
								<div role="tabpanel" class="tab-pane fade in active" id="home2" aria-labelledby="home2-tab">
									
										<div class="w3l_stocks1">
											
										</div>
										<div class="w3l_stocks1">
											
									
										
									</div>
								</div>
								<div role="tabpanel" class="tab-pane fade" id="latest2" aria-labelledby="latest2-tab">
									<div class="w3l_stocks">
										<div class="w3l_stocks1">
											<a href="single.html"><h4>Kotak Select Focus Fund - Regular (G)</h4></a>
											<p>25.975<i style="color:#00AA00;"><span class="caret caret1"></span>0.06<label>(0.25%)</label></i></p>
										</div>
										<div class="w3l_stocks1">
											<a href="single.html"><h4>Birla SL Frontline Equity (G)</h4></a>
											<p>180.83<i style="color:#00AA00;"><span class="caret caret1"></span>0.14<label>(0.08%)</label></i></p>
										</div>
										<div class="w3l_stocks1">
											<a href="single.html"><h4>SBI Blue Chip Fund (G)</h4></a>
											<p>31.918<i style="color:#00AA00;"><span class="caret caret1"></span>0.02<label>(0.05%)</label></i></p>
										</div>
										<div class="w3l_stocks1">
											<a href="single.html"><h4>Principal Emerging Bluechip (G)</h4></a>
											<p>80.11<i style="color:#00AA00;"><span class="caret caret1"></span>0.37<label>(0.46%)</label></i></p>
										</div>
										<div class="w3l_stocks1">
											<a href="single.html"><h4>SBI Magnum Multicap Funds (G)</h4></a>
											<p>37.592<i style="color:#00AA00;"><span class="caret caret1"></span>0.14<label>(0.36%)</label></i></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="agileinfo_chat">
						<h3><i class="fa fa-comments-o" aria-hidden="true"></i>ALAMAT</h3>
						<?php echo $profile['alamat']; ?>
					</div>
					<div style="padding-top: 10px" class="w3layouts_newsletter">
						<h3><i class="fa fa-link" aria-hidden="true"></i>LINK TERKAIT</h3>
						<?php echo $profile['link']; ?>
					</div>
					<div style="padding-top: 10px" class="w3layouts_newsletter">
						<h3><i class="fa fa-envelope" aria-hidden="true"></i>Google Maps</h3>
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15958.930208913696!2d109.9417904!3d0.3756858!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa438dfe28f5b7720!2sKejaksaan%20Negeri%20Landak!5e0!3m2!1sid!2sid!4v1609813099438!5m2!1sid!2sid" width="280" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //news-original -->
<!-- follow-us -->
<!-- //follow-us -->
<!-- footer -->
	<div class="footer">
		<div class="footer">
		<div class="copyright float-right style1 style1">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, DV LandakSoftwareHouse         </div>
</div>
	</div>
	</div>
<!-- //footer -->
<!-- script for marque -->
	<script>
	  $('.marquee').marquee({
		gap: 100,
		delayBeforeStart: 0,
		direction: 'left',
		duplicated: true,
		pauseOnHover: true
	});
	</script>
	
<!-- //script for marque -->
<!-- area-chart -->
<script type="text/javascript">
    $(window).load(function () {
		var d0 = [[2, 5], [4, 8], [6, 2], [7, 3], [10, 4], [12, 5], [13, 6], [14, 4]];
			var plot2 = $.plotAnimator($("#chart2"), [{ data: d0, animator: {steps: 136, duration: 2500, start:0}, lines: { show: true, fill: true },label: "SENSEX" }],{grid: { backgroundColor: { colors: [ "#fff", "#eee" ] }}});

		$("#bnt2").attr("disabled", "disabled");
		$("#chart2").on("animatorComplete", function() {
			$("#bnt2").removeAttr("disabled")
		});
		$("#bnt2").on("click",function() {
			$("#bnt2").attr("disabled", "disabled");
				plot2 = $.plotAnimator($("#chart2"), [{ data: d0, animator: {steps: 136, duration: 2500, start:0}, lines: { show: true, fill: true },label: "SENSEX" }],{grid: { backgroundColor: { colors: [ "#fff", "#eee" ] }}});
		});
		
		var d5 = [[1, 4], [2, 2], [4, 4], [6, 2], [8, 4], [10, 2], [15, 4], [20, 2]];
    	var d6 = [[1, 3], [20, 3]];
	var plot3 = $.plotAnimator($("#chart3"), [{ data: d5, animator: {steps: 136, duration: 2000, start:0}, lines: { show: true, fill: true }, label: "Fill this"}, { data: d6, lines: { show: true, fill: false}, label: "Standard Values" }],{grid: { backgroundColor: { colors: [ "#fff", "#eee" ] }}});

	$("#bnt3").attr("disabled", "disabled");
	$("#chart3").on("animatorComplete", function() {
		$("#bnt3").removeAttr("disabled")
	});
	$("#bnt3").on("click",function() {
		$("#bnt3").attr("disabled", "disabled");
		plot3 = $.plotAnimator($("#chart3"), [{ data: d5, animator: {steps: 136, duration: 2000, start:0}, lines: { show: true, fill: true }, label: "Fill this"}, { data: d6, lines: { show: true, fill: false}, label: "Standard Values" }],{grid: { backgroundColor: { colors: [ "#fff", "#eee" ] }}});
	});
	
    });
</script> 
<!-- //area-chart -->
<!-- revenue-chart -->
    <script class="code" type="text/javascript">
        $(document).ready(function () {
            $.jqplot._noToImageButton = true;
            var prevYear = [["2016-08-20",398], ["2016-08-21",255.25], ["2016-08-22",263.9], ["2016-08-23",154.24], 
            ["2016-08-24",210.18], ["2016-08-25",109.73], ["2016-08-26",166.91], ["2016-08-27",330.27], ["2016-08-28",546.6], 
            ["2016-08-29",260.5], ["2016-08-30",330.34], ["2016-08-31",464.32], ["2016-09-01",511.83], ["2016-09-02",721.15], ["2016-09-03",649.62], 
            ["2016-09-04",653.14], ["2016-09-06",900.31], ["2016-09-07",803.59], ["2016-09-08",851.19], ["2016-09-09",2059.24], 
            ["2016-09-10",994.05], ["2016-09-11",742.95], ["2016-09-12",1340.98], ["2016-09-13",839.78], ["2016-09-14",1769.21], 
            ["2016-09-15",1559.01], ["2016-09-16",2099.49], ["2016-09-17",1510.22], ["2016-09-18",1691.72], 
            ["2016-09-19",1074.45], ["2016-09-20",1529.41], ["2016-09-21",1876.44], ["2016-09-22",1986.02], 
            ["2016-09-23",1461.91], ["2016-09-24",1460.3], ["2016-09-25",1392.96], ["2016-09-26",2164.85], 
            ["2016-09-27",1746.86], ["2016-09-28",2220.28], ["2016-09-29",2617.91], ["2016-09-30",3236.63]];

            var currYear = [["2016-08-20",796.01], ["2016-08-21",510.5], ["2016-08-22",527.8], ["2016-08-23",308.48], 
            ["2016-08-24",420.36], ["2016-08-25",219.47], ["2016-08-26",333.82], ["2016-08-27",660.55], ["2016-08-28",1093.19], 
            ["2016-08-29",521], ["2016-08-30",660.68], ["2016-08-31",928.65], ["2016-09-01",1023.66], ["2016-09-02",1442.31], ["2016-09-03",1299.24], 
            ["2016-09-04",1306.29], ["2016-09-06",1800.62], ["2016-09-07",1607.18], ["2016-09-08",1702.38], 
            ["2016-09-09",4118.48], ["2016-09-10",1988.11], ["2016-09-11",1485.89], ["2016-09-12",2681.97], 
            ["2016-09-13",1679.56], ["2016-09-14",3538.43], ["2016-09-15",3118.01], ["2016-09-16",4198.97], 
            ["2016-09-17",3020.44], ["2016-09-18",3383.45], ["2016-09-19",2148.91], ["2016-09-20",3058.82], 
            ["2016-09-21",3752.88], ["2016-09-22",3972.03], ["2016-09-23",2923.82], ["2016-09-24",2920.59], 
            ["2016-09-25",2785.93], ["2016-09-26",4329.7], ["2016-09-27",3493.72], ["2016-09-28",4440.55], 
            ["2016-09-29",5235.81], ["2016-09-30",6473.25]];

            var plot1 = $.jqplot("chart1", [prevYear, currYear], {
                seriesColors: ["rgba(78, 135, 194, 0.7)", "rgb(211, 235, 59)"],
                title: 'Monthly India Revenue',
                highlighter: {
                    show: true,
                    sizeAdjust: 1,
                    tooltipOffset: 9
                },
                grid: {
                    background: 'rgba(57,57,57,0.0)',
                    drawBorder: false,
                    shadow: false,
                    gridLineColor: '#666666',
                    gridLineWidth: 2
                },
                legend: {
                    show: true,
                    placement: 'inside'
                },
                seriesDefaults: {
                    rendererOptions: {
                        smooth: true,
                        animation: {
                            show: true
                        }
                    },
                    showMarker: false
                },
                series: [
                    {
                        fill: true,
                        label: '2015'
                    },
                    {
                        label: '2016'
                    }
                ],
                axesDefaults: {
                    rendererOptions: {
                        baselineWidth: 1.5,
                        baselineColor: '#444444',
                        drawBaseline: false
                    }
                },
                axes: {
                    xaxis: {
                        renderer: $.jqplot.DateAxisRenderer,
                        tickRenderer: $.jqplot.CanvasAxisTickRenderer,
                        tickOptions: {
                            formatString: "%b %e",
                            angle: -30,
                            textColor: '#666666'
                        },
                        min: "2016-08-20",
                        max: "2016-09-30",
                        tickInterval: "7 days",
                        drawMajorGridlines: false
                    },
                    yaxis: {
                        renderer: $.jqplot.LogAxisRenderer,
                        pad: 0,
                        rendererOptions: {
                            minorTicks: 1
                        },
                        tickOptions: {
                            formatString: "$%'d",
                            showMark: false
                        }
                    }
                }
            });

              $('.jqplot-highlighter-tooltip').addClass('ui-corner-all')
        });


    </script>
	<script class="include" type="text/javascript" src="js/jquery.jqplot.js"></script>
	<script class="include" type="text/javascript" src="js/jqplot.dateAxisRenderer.js"></script>
    <script class="include" type="text/javascript" src="js/jqplot.logAxisRenderer.js"></script>
    <script class="include" type="text/javascript" src="js/jqplot.canvasTextRenderer.js"></script>
    <script class="include" type="text/javascript" src="js/jqplot.canvasAxisTickRenderer.js"></script>
	<script class="include" type="text/javascript" src="js/jqplot.highlighter.js"></script>
<!-- //revenue-chart -->
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!-- //Bootstrap Core JavaScript -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>