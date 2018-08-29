<!DOCTYPE html>
<html class="no-js" lang="es" dir="ltr">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Contactenos - Fundacion Cancerologica del Quindio</title>
	<meta name="description" content="Direccion: Calle 17N # 14-62 | Telefonos: 747 5191 - 311 772 4223" />
	<!-- Metatags -->
	<meta property="og:title" content="Contactenos - Fundacion Cancerologica del Quindio" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://fundacioncancerologica.com/" />
	<meta property="og:image" content="https://fundacioncancerologica.com/assets/images/logo.png" />
	<meta property="og:description" content="Direccion: Calle 17N # 14-62 | Telefonos: 747 5191 - 311 772 4223" />
	<meta property="og:site_name" content="Fundacion Cancerologica del Quindio" />
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico" />
	<!-- Styles -->
	<link rel="stylesheet" href="assets/styles/vendors.min.css" />
	<link rel="stylesheet" href="assets/styles/style.css" />
	<link href="https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700|Poppins:300,400,500,600,700&amp;subset=devanagari,latin-ext" rel="stylesheet">
	<!-- JavaScripts -->
	<script src="assets/javascripts/vendor.min.js"></script>
</head>
<body>
	<div id="page" class="hfeed site boxed-page-full"> <!-- In order to make the page boxed, you can apply 1. boxed-page-1280, 2. boxed-page-1400, 3. boxed-page-1600 or boxed-page-1920 -->
		<div id="main" class="site-main">
			<!-- Header / Menu / Action button -->
			<header id="masthead" class="site-header position-absolute sticky-header" role="banner" data-headroom>
				<div class="grid-container grid-container-padded">
					<div id="top-bar-attitude">
						<div class="grid-x grid-margin-x">
							<!-- Logo -->
							<div class="auto  medium-2 cell">
								<span class="title-bars float-left" data-responsive-toggle="top-main-menu" data-hide-for="medium">
									<i class="fa fa-bars" aria-hidden="true" data-toggle="top-main-menu"></i>
								</span>
                                <h1><a href="https://fundacioncancerologica.com" title="Fundacion Cancerologica del Quindio"><img alt="Logo Fundacion Cancerologica del Quindio" src="./assets/images/logo2.png" style="max-width: 130%;"></a></h1>
							</div>

							<!-- Actioon Buttons -->
							<div class="shrink medium-2 cell medium-order-3" style="padding-top: 15px;">
								<div class="social-links text-center">
									<?php include 'include/social.php';?>
								</div>
							</div>

							<!-- Menu -->
							<div class="small-12 medium-8 cell" style="padding-top: 15px;">
								 <nav class="primary navigation">

									<!-- INCLUDE NAVIGATION -->
									<?php include 'include/navigation.php';?>
									<!-- END INCLUDE NAVIGATION -->
									 
								</nav>
							</div>

						</div>
					</div>
				</div>
			</header><!-- #masthead .site-header -->

			<!-- Teaser -->
			<article class="single-post-article">	
				<section class="grid-y teaser" style="min-height: 105px">
					<div class="cell auto gradient-fcq-0">
						
					</div>
				</section><!-- Teaser -->

				<!-- Book Appointment Sectin -->
				<section id="book-appointment" class="book-appointment gray" style="padding-top: 100px">
					<div class="grid-container grid-container-padded shadow radius">
						<div class="grid-x">
							<div class="cell small-12">
								<header class="section-head">
									<h3 class="section-title text-center ">
										Contactenos
									</h3><!-- /.section-title -->
									
									<div class="section-head-actions text-center">
										Complete el formulario para enviarnos su mensaje!
									</div><!-- /.section-head-actions -->
								</header><!-- /.section-head -->
							</div>
							<div class="section-body">
								<form data-abide novalidate method="POST" action="include/mail.php">
									<div data-abide-error class="alert callout" style="display: none;">
										<p><i class="fi-alert"></i> Hay algunos errores en el formulario.</p>
									</div>
									
									<!-- First Name -->
									<div class="grid-x grid-margin-x">
										<div class="cell small-12 medium-6">
											<label><p>Nombre</p>
												<input type="text" placeholder="Nombre" aria-describedby="exampleHelpText" required>
												<span class="form-error">
													No ha llenado este campo y es requerido.
												</span>
											</label>
										</div>
										
										<!-- Last Name -->
										<div class="cell small-12 medium-6">
											<label><p>Apellido</p>
												<input type="text" placeholder="Apellido" aria-describedby="exampleHelpText" required>
												<span class="form-error">
													No ha llenado este campo y es requerido.
												</span>
											</label>
										</div>
										
										<!-- Email -->
										<div class="cell small-12 medium-6">
											<label><p>Email</p>
												<input type="email" placeholder="Email" aria-describedby="exampleHelpText" required>
												<span class="form-error">
													No ha llenado este campo y es requerido.
												</span>
											</label>
										</div>
										
										<!-- Phone -->
										<div class="cell small-12 medium-6">
											<label><p>Telefono</p>
												<input type="text" placeholder="Telefono" aria-describedby="exampleHelpText" required>
												<span class="form-error">
													No ha llenado este campo y es requerido.
												</span>
											</label>
										</div>
										
									</div><!-- /.grid-x .grid-margin-x -->
									
									<!-- Textarea -->
									<div class="grid-x grid-margin-x">
										<div class="cell">
											<label><p>Mensaje</p>
												<textarea class="textarea" name="field-message" rows="8" placeholder="Mensaje" required></textarea>
											</label>
										</div>
									</div><!-- /.grid-x -->
									
									<!-- Submit Button -->
									<div class="grid-x">
										<fieldset class="cell auto text-center">
											<button class="button action-button gradient-f-100" type="submit" value="Submit">Enviar <i class="fa fa-paper-plane" aria-hidden="true"></i></button>
										</fieldset>
									</div>
								</form>
							</div>
						</div>		
					</div>
				</section><!-- /.book-appointment -->

				<!-- Key Benefits -->
				<section class="key-benefits gray">
					<div class="grid-container grid-container-padded inner-padding">
						<div class="grid-x grid-margin-x">
							<div class="cell medium-4">
								<div class="benefit shadow radius">
									<object style="width: 48px; margin: 5px;" id="ico_key_benefits_0" type="image/svg+xml" data="assets/svg/linea_basic/svg/basic_headset.svg"></object>
									<script>
										new Vivus('ico_key_benefits_0', {type: 'sync', duration: 100});
									</script>
									<h3>Telefonos</h3>
									<p>
										<i class="fa fa-phone"></i>&nbsp; (+57 6) 747 5191<br>
										<i class="fa fa-fax"></i>&nbsp; (+57) 311 772 4223
									</p>
								</div>
							</div>
							<div class="cell medium-4">
								<div class="benefit shadow radius">
									<object style="width: 48px; margin: 5px;" id="ico_key_benefits_1" type="image/svg+xml" data="assets/svg/linea_basic/svg/basic_geolocalize-05.svg"></object>
									<script>
										new Vivus('ico_key_benefits_1', {type: 'sync', duration: 100});
									</script>
									<h3>Direccion</h3>
									<p>Calle 17N # 14-62<br> Armenia, Quindio</p>
								</div>
							</div>
							<div class="cell medium-4">
								<div class="benefit shadow radius">
									<object style="width: 48px; margin: 5px;" id="ico_key_benefits_2" type="image/svg+xml" data="assets/svg/linea_basic/svg/basic_gunsight.svg"></object>
									<script>
										new Vivus('ico_key_benefits_2', {type: 'sync', duration: 100});
									</script>
									<h3>Horarios</h3>
									<p>Lun-Vie: 8AM - 5PM<br> Sab: 8AM - 12PM</p>
								</div>
							</div>
						</div>
					</div>
				</section>
			</article>
		</div><!-- #main -->

		<!-- Footer Section -->
		<footer id="colophon" class="site-footer gradient-fcq-0 white-text-color" role="contentinfo">
			
			<!-- INCLUDE FOOTER -->
			<?php include 'include/footer.php';?>
			<!-- END INCLUDE FOOTER -->
			
		</footer><!-- .site-footer -->
	</div>
	<!-- JavaScripts -->
	<script src="assets/javascripts/main.min.js"></script>
</body>
</html>