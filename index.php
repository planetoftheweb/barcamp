<!DOCTYPE html>
<html lang="en">
<head>
	<title>Barcamp Deland -- October 6, 2012 in Downtown Deland, FL - Technology Conference - Deland, Orange City, Deltona, Sanford - Florida</title>
	<meta name="description" CONTENT="BarCamp Deland is conference in Downtown Deland, FL on Saturday, October 6, 2012 that's centered around technology. Bringing people together from backgrounds like web-design, photography, graphic design web-development and technology for cooperative learning.">
	<?php include($_SERVER['DOCUMENT_ROOT'].'/_/components/head_common.php')?>
</head>
<body>
<?php include($_SERVER['DOCUMENT_ROOT'].'/_/components/navigation.php')?>
<div id="content" class="container-fluid">
<?php include($_SERVER['DOCUMENT_ROOT'].'/_/components/header.php')?>
	<div class="row-fluid">
		<div class="span12">
			<div class="hero-unit">
				<?php include($_SERVER['DOCUMENT_ROOT'].'/_/components/feature_keyinfo.php')?>
			</div><!-- hero unit -->
		</div>
	</div><!-- row -->
	<div id="info" class="row-fluid">
		<article id="main" class="span6">
			<?php include($_SERVER['DOCUMENT_ROOT'].'/_/components/feature_whatis.php')?>
			<?php include($_SERVER['DOCUMENT_ROOT'].'/_/components/feature_whoshouldcome.php')?>
			<?php include($_SERVER['DOCUMENT_ROOT'].'/_/components/feature_rulesofbarcamp.php')?>
		</article><!-- Main Article -->	
		
		<sidebar id="sidebarone" class="span3">
			<?php include($_SERVER['DOCUMENT_ROOT'].'/_/components/sidebar_helpsponsor.php')?>
			<?php include($_SERVER['DOCUMENT_ROOT'].'/_/components/sidebar_schedule.php')?>
			<?php include($_SERVER['DOCUMENT_ROOT'].'/_/components/sidebar_parking.php')?>
			<?php include($_SERVER['DOCUMENT_ROOT'].'/_/components/feature_helpuspromote.php')?>
		</sidebar>

		<sidebar id="sidebartwo" class="span3">
			<?php include($_SERVER['DOCUMENT_ROOT'].'/_/components/sidebar_speakers.php')?>
		</sidebar>
	</div><!-- info -->	
</div><!-- content -->	
<?php include($_SERVER['DOCUMENT_ROOT'].'/_/components/footer.php')?>
<script src="/_/js/cycle.js" type="text/javascript"></script>
	<script>
	$(function() {
		$.getJSON('/_/data/speakers.json', function(data) {
		    var template = $('#speakerstpl').html();
		    var html = Mustache.to_html(template, data);
		    $('#speakers').html(html);
		    $('#speakers').cycle({
				fx: 'fade',
				pause: 1,
			    random:  1,
				speed: 500,
				timeout: 10000
			});
		}); //get json
		sizing();
		$(window).resize(sizing);

		function sizing() {
		  var windowwidth=$(window).width();
		  if(windowwidth>=1200){
		    $('#main').removeClass('span8').addClass('span6');
		    $('#sidebarone').removeClass('span4').addClass('span3');
		    $('#sidebartwo').css('display','inline');
		  } else {
		    $('#main').removeClass('span6').addClass('span8');
		    $('#sidebarone').removeClass('span3').addClass('span4');
		    $('#sidebartwo').css('display','none');
		  }          
		}
	});

	</script>
</body>
</html>








