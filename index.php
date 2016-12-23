<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" class="loading first-load">
<?php
	$titulo ="Lorem Ipsum";
	$descripcion = "Lorem Ipsum Dolor Sit Amet Requiescat";
	$url = "http://developers.facebook.com/";
	$fanpage = 'http://facebook.com/facebook';
?>

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>
			<?php echo $titulo; ?>
		</title>
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">
		<link href="css/featherlight.min.css" type="text/css" rel="stylesheet" />
		<link href="css/normalize.css" rel="stylesheet">
		<link href="css/main.css" rel="stylesheet">
		<meta name="title" content="<?php echo $titulo; ?>">
		<meta property="fb:app_id" content="1005127549633474">
		<meta property="og:url" content="<?php echo $url; ?>" />
		<meta property="og:title" content="<?php echo $titulo; ?>">
		<meta property="og:site_name" content="<?php echo $titulo; ?>">
		<meta property="og:image" content="img/fb-img.jpg">
		<meta property="og:description" content="<?php echo $descripcion; ?>">
		<meta name="twitter:description" content="<?php echo $descripcion; ?>">
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:title" content="<?php echo $titulo; ?>">
		<meta name="twitter:image:src" content="">
		<link rel=" canonical " href="<?php echo $url; ?>">
		<link rel="shortcut icon" href="img/favicon.ico">
		<link rel="image_src" href="img/fb-img.jpg">
		<meta name="viewport" content="width = device-width, initial-scale=1, user-scalable = yes">
		<meta name="apple-mobile-web-app-capable" content="no">
	</head>

	<body>

		<div class="fb_like_box">
			<div class="fb-ver">
				<a href="<?php echo $fanpage; ?>" target="_blank">Ver Fanpage</a>
			</div>
			<div class="fb-like" data-href="<?php echo $fanpage; ?>" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="false">
			</div>
		</div>
		</div>
		<div class="container">
			<header class="align_center">
				<img src="img/thumb.png" alt="Logo Sitio" id="logo_sitio">
			</header>
			<div class="separator"></div>
			<section>
				<div class="main_video desktop">
					<?php
				include('videos.php');
				$first_video_id = $main_videos[0];
				echo '<div id="main_video_player" class="fb-video" data-href="https://www.facebook.com/facebook/videos/'.$first_video_id.'" data-allowfullscreen="true" data-autoplay="false" data-show-captions="true"></div>';
				echo '</div>';
				echo '<div class="mas_videos">';

				/*

				// Primer video sin for each
				$i = 0;
				$main_video_id[$i] = $main_videos[$i];
				$xml[$i] = file_get_contents('http://graph.facebook.com/' . $main_video_id[$i]);
				$main_result[$i] = json_decode($xml[$i]);
				$main_large[$i] = $main_result[$i]->format[1]->picture;
				$main_alt[$i] = $main_result[$i]->description;


				echo '<div class="desktop videos_fb"><div class="video_thumb" id="button'.($i+1).'" >';
				//echo '<i class="fa fa-play" aria-hidden="true"></i>';
				echo '<div class="play_holder"><div class="play_btn"></div></div>';
				echo '<img id="main_thumb'.($i+1).'" src="'.$main_large[$i].'" alt="'.$main_alt[$i].'" title="'.$main_alt[$i].'">';
				echo '</div></div>';

				//movil
				echo '<div class="movil videos_fb"><div class="fb-video" data-href="https://www.facebook.com/facebook/videos/'.$main_video_id[$i].'" data-allowfullscreen="true" data-autoplay="false" data-show-captions="true"></div></div>';
				//End primer video sin for each

				//Segundo video
				echo '<div class="desktop videos_fb"><div class="video_thumb" id="button'.($i+1).'" style="cursor: default; pointer-events: none;">';
					echo '<div><img id="main_thumb'.($i+1).'" src="img/btn-soon.gif" /></div>';
				echo '</div></div>';
				//movil
					echo '<div class="movil videos_fb"><div class="fb-video"><div class="full" style="cursor: default; pointer-events: none;"><img id="main_thumb'.($i+1).'" src="img/btn-soon.gif" class="full" /></div></div></div>';
				//Fin Segundo video

				//Tercer video
				echo '<div class="desktop videos_fb"><div class="video_thumb" id="button'.($i+2).'" >';
					echo '<a href="'.$fanpage.'" target="_blank"><img id="main_thumb'.($i+2).'" src="img/btn-fb.png" /></a>';
				echo '</div></div>';
				//movil
					echo '<div class="movil videos_fb"><div class="fb-video"><a href="'.$fanpage.'" target="_blank" class="full"><img id="main_thumb'.($i+2).'" src="img/btn-fb.png" class="full" /></a></div></div>';
				//Fin Tercer video*/


				for($i = 0; $i < count($main_videos); $i++) {
					$main_video_id[$i] = $main_videos[$i];
					$xml[$i] = file_get_contents('http://graph.facebook.com/' . $main_video_id[$i]);
					$main_result[$i] = json_decode($xml[$i]);
					$main_large[$i] = $main_result[$i]->format[1]->picture;
					$main_alt[$i] = $main_result[$i]->description;

					echo '<div class="desktop videos_fb"><div class="video_thumb" id="button'.($i+1).'" >';
					//echo '<i class="fa fa-play" aria-hidden="true"></i>';
					echo '<div class="play_holder"><div class="play_btn"></div></div>';
					echo '<img id="main_thumb'.($i+1).'" src="'.$main_large[$i].'" alt="'.$main_alt[$i].'" title="'.$main_alt[$i].'">';
					echo '</div></div>';

					//movil
					echo '<div class="movil videos_fb"><div class="fb-video" data-href="https://www.facebook.com/facebook/videos/'.$main_video_id[$i].'" data-allowfullscreen="true" data-autoplay="false" data-show-captions="true"></div></div>';
				}
			?>
				</div>
			</section>
			<div class="separator"></div>
			<div class="content">
				<section>
					<h2>Lorem Ipsum</h2>
					<div class="texto_holder">
						<div class="texto_main">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio facere, vel eum, iusto dolor cum.</p>
							<br />
							<p><strong>Magni</strong>, in aut doloribus quasi eaque, perspiciatis esse qui totam asperiores, accusantium maiores sint repudiandae.</p>
						</div>
					</div>
				</section>
				<aside>
					<img src="img/botella3.png">
				</aside>
			</div>
			<div class="separator"></div>
			<section class="lightboxes">
				<h2>dolor sit amet</h2>
				<?php
					$lightbox_video_id[0] = $lightbox_videos[0];
					$xml[0] = file_get_contents('http://graph.facebook.com/' . $lightbox_video_id[0]);

					$lightbox_result[0] = json_decode($xml[0]);

					$lightbox_large[0] = $lightbox_result[0]->format[3]->picture;
					$lightbox_alt[0] = $lightbox_result[0]->description;

					//Desktop
					echo '<div class="desktop videos_fb full"><div class="video_thumb lightbox_thumb" id="lightbox_button_'.(1).'" ';
					echo ' data-featherlight=';
					echo "'";
					echo '<div id="lightbox_video_player" class="fb-video" data-href="https://www.facebook.com/facebook/videos/'.$lightbox_videos[0].'" data-allowfullscreen="true" data-autoplay="true" data-show-captions="true"></div>';
					echo "'";
					echo '>';
					echo '<div class="play_holder"><div class="play_btn"></div></div>';
					echo '<img id="lightbox_thumb_'.(1).'" src="'.$lightbox_large[0].'" alt="'.$lightbox_alt[0].'" title="'.$lightbox_alt[0].'">';
					echo '</div></div>';

					//movil
					echo '<div class="movil videos_fb"><div id="lightbox_video_player" class="fb-video" data-href="https://www.facebook.com/facebook/videos/'.$lightbox_video_id[0] .'" data-allowfullscreen="true" data-autoplay="false" data-show-captions="true"></div></div>';

			 ?>
			</section>
			<section class="lightboxes">
				<h2></h2>

				<?php
				for($i = 1; $i < count($lightbox_videos); $i++) {
					$lightbox_video_id[$i] = $lightbox_videos[$i];
					$xml[$i] = file_get_contents('http://graph.facebook.com/' . $lightbox_video_id[$i]);

					$lightbox_result[$i] = json_decode($xml[$i]);

					$lightbox_large[$i] = $lightbox_result[$i]->format[1]->picture;
					$lightbox_alt[$i] = $lightbox_result[$i]->description;

					//Desktop
					echo '<div class="desktop videos_fb"><div class="video_thumb lightbox_thumb" id="lightbox_button_'.($i+1).'" ';
					echo ' data-featherlight=';
					echo "'";
					echo '<div id="lightbox_video_player" class="fb-video" data-href="https://www.facebook.com/facebook/videos/'.$lightbox_videos[$i].'" data-allowfullscreen="true" data-autoplay="true" data-show-captions="true"></div>';
					echo "'";
					echo '>';
					//echo '<i class="fa fa-play" aria-hidden="true"></i>';
					echo '<div class="play_holder"><div class="play_btn"></div></div>';
					echo '<img id="lightbox_thumb_'.($i+1).'" src="'.$lightbox_large[$i].'" alt="'.$lightbox_alt[$i].'" title="'.$lightbox_alt[$i].'">';
					echo '</div></div>';

					//movil
					echo '<div class="movil videos_fb"><div id="lightbox_video_player-m'.($i+1).'" class="fb-video" data-href="https://www.facebook.com/facebook/videos/'.$lightbox_video_id[$i] .'" data-allowfullscreen="true" data-autoplay="false" data-show-captions="true"></div></div>';
				}
			?>
			</section>
		</div>
		<div class="separator"></div>
		<footer>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
		</footer>
		<script src="js/jquery-3.1.1.min.js"></script>
		<script>
			var current = 0;
			var main_video_player;
			$(document).ready(function () {
				$.ajaxSetup({
					cache: true
				});
				$.getScript('//connect.facebook.net/es_LA/sdk.js', function () {
					FB.init({
						appId: '1005127549633474',
						version: 'v2.8'
					});
					(function (d, s, id) {
						var js, fjs = d.getElementsByTagName(s)[0];
						if (d.getElementById(id)) return;
						js = d.createElement(s);
						js.id = id;
						js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.8&appId=1005127549633474";
						fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));

					// FB Videos

					FB.XFBML.parse();
					FB.Event.subscribe('xfbml.ready', function (msg) {
						if (msg.type === 'video' && msg.id === 'main_video_player') {
							main_video_player = msg.instance;
							main_video_player.unmute();
						} else if (msg.type === 'video' && msg.id === 'lightbox_video_player') {
							lightbox_video_player = msg.instance;
							lightbox_video_player.unmute();
						}
					}); // End FB Videos

				}); // Fin getScript FB

				//Thumbnails
				var fb_ref = '<div id="main_video_player" class="fb-video" data-href="https://www.facebook.com/facebook/videos/';
				var fb_data = 'data-allowfullscreen="true" data-autoplay="true" data-show-captions="true">';

				var mainVideos = <?php echo json_encode($main_videos); ?>;
				var lightboxVideos = <?php echo json_encode($lightbox_videos); ?>;

				var video1 = mainVideos[0];
				var video2 = mainVideos[1];
				var video3 = mainVideos[2];

				var fb_src = 'https://graph.facebook.com/';
				var fb_pic = '/picture';

				$("#button1").addClass('active');

				$("#button1:not(.active)").click(function () {
					$("#main_video_player").replaceWith(fb_ref + video1 + '" ' + fb_data);
					FB.XFBML.parse();
					$("#button1").addClass('active');
					$("#button2").removeClass('active');
					$("#button3").removeClass('active');
					current = 1;
				});

				/*$("#button2:not(.active)").click(function () {
					$("#main_video_player").replaceWith(fb_ref + video2 + '" ' + fb_data);
					FB.XFBML.parse();
					$("#button2").addClass('active');
					$("#button1").removeClass('active');
					$("#button3").removeClass('active');
					current = 2;
				});

				$("#button3:not(.active)").click(function () {
					$("#main_video_player").replaceWith(fb_ref + video3 + '" ' + fb_data);
					FB.XFBML.parse();
					$("#button3").addClass('active');
					$("#button2").removeClass('active');
					$("#button1").removeClass('active');
					current = 3;
				});*/

				$(".lightbox_thumb").click(function() {
					main_video_player.pause();
					setTimeout(function() {
						FB.XFBML.parse();
					}, 100);
				});

			}); // Fin Document Ready
		</script>
		<script src="js/featherlight.min.js" type="text/javascript" charset="utf-8"></script>
	</body>

</html>
