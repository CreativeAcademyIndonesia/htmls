<!DOCTYPE html>

<html dir="ltr" lang="en-US">

<head>




	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />

	<meta name="author" content="SemiColonWeb">

	<meta name="description" content="Get Canvas to build powerful websites easily with the Highly Customizable &amp; Best Selling Bootstrap Template, today.">



	<!-- Font Imports -->

	<link rel="preconnect" href="https://fonts.googleapis.com">

	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

	<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;1,400&Montserrat:wght@400;700&family=Crete+Round:ital@0;1&display=swap" rel="stylesheet">



	<!-- Core Style -->

	<link rel="stylesheet" href="style.css">



	<!-- Font Icons -->

	<link rel="stylesheet" href="css/font-icons.css">

	<link rel="stylesheet" href="demos/medical/css/medical-icons.css">



	<!-- Plugins/Components CSS -->

	<link rel="stylesheet" href="css/swiper.css">



	<!-- Niche Demos -->

	<link rel="stylesheet" href="demos/medical/medical.css">



	<!-- Custom CSS -->

	<link rel="stylesheet" href="css/custom.css">



	<style>
		.team-person {
			display: flex;
			flex-direction: column;
			align-items: center;
		}

		.person-container {
			border-radius: 50%;
			height: 312px;
			-webkit-tap-highlight-color: transparent;
			transform: scale(0.48);
			transition: transform 250ms cubic-bezier(0.4, 0, 0.2, 1);
			width: 400px;
		}

		.person-container:hover {
			transform: scale(0.54);
		}

		.person-container-inner {
			position: relative;
			clip-path: path("M 390,400 C 390,504.9341 304.9341,590 200,590 95.065898,590 10,504.9341 10,400 V 10 H 200 390 Z");
			transform-origin: 50%;
			top: -200px;
		}

		.person-circle {
			border-radius: 50%;
			cursor: pointer;
			height: 380px;
			left: 10px;
			pointer-events: none;
			position: absolute;
			top: 210px;
			width: 380px;
		}

		.person-img {
			pointer-events: none;
			position: relative;
			transform: translateY(20px) scale(1.16);
			transform-origin: 50% bottom;
			transition: transform 300ms cubic-bezier(0.4, 0, 0.2, 1);
			width: 380px;
			left: 22px;
			top: 164px;
		}

		.person-container:hover .person-img {
			transform: translateY(0) scale(1.2);
		}

		.person-divider {
			height: 1px;
			width: 160px;
		}
		
		.si-sticky.si-sidebar {
			--width: 240px;
			--height: 54px;
			--icon-size: var(--height); /* 54px */
			--text-width: calc(var(--width) - var(--height)); /* 230px - 54px */
			width: var(--icon-size);
			height: auto;
		}

		.si-sticky.si-sidebar:not(.si-sticky-right) { left: 0; }

		.si-sticky.si-sidebar .social-icon {
			margin: 2px 0;
			margin-left: calc(-1 * var(--text-width));
			width: var(--width);
			height: var(--height);
			border: 0;
			border-radius: 0 4px 4px 0;
			display: inline-flex;
			align-items: center;
			transition: margin 0.2s ease-in-out;
		}

		.si-sticky.si-sidebar .social-icon i {
			position: absolute;
			left: auto;
			right: 0;
			width: var(--icon-size);
			height: var(--icon-size);
			line-height: var(--icon-size);
			text-align: center;
			transition: all 0.2s ease-in-out;
		}

		.si-sticky.si-sidebar .social-icon span {
			color: #FFF;
			font-size: 1rem;
			width: var(--text-width);
			text-align: center;
		}


		.si-sticky.si-sticky-right { right: 0; }

		.si-sticky.si-sidebar.si-sticky-right .social-icon {
			-ms-flex-direction: row-reverse;
			flex-direction: row-reverse;
			margin-left: 0;
			border-radius: 4px 0 0 4px;
		}

		.si-sticky.si-sidebar.si-sticky-right .social-icon i {
			left: 0;
			right: auto;
		}

		@media (min-width: 992px) {
			.si-sticky.si-sidebar:not(.si-sticky-right)
			.si-sticky.si-sidebar:not(.si-sticky-right)

			.si-sticky.si-sidebar.si-sticky-right
			.si-sticky.si-sidebar.si-sticky-right
		}
	</style>

	<!-- Document Title

       ============================================= -->

       <title>RSUD Kabupaten Poso</title>



   </head>



   <body>



	<!-- Document Wrapper

       ============================================= -->

       <div id="wrapper">


		<!-- Header

          ============================================= -->

          <header id="header" data-menu-padding="28">

             <div id="header-wrap">

                <div class="container">

                   <div class="header-row">



						<!-- Logo

                          ============================================= -->

                          <div id="logo">

                             <a href="home.php">

                                <img class="logo-default" srcset="images/1200px-Logo_RSUD_Poso_terbaru.png, images/1200px-Logo_RSUD_Poso_terbaru.png 2x" src="images/1200px-Logo_RSUD_Poso_terbaru.png" alt="Logo">

                            </a>

                        </div><!-- #logo end -->



                        <div class="primary-menu-trigger">

                         <button class="cnvs-hamburger" type="button" title="Open Mobile Menu">

                            <span class="cnvs-hamburger-box"><span class="cnvs-hamburger-inner"></span></span>

                        </button>

                    </div>



						<!-- Primary Navigation

                          ============================================= -->

                          <nav class="primary-menu style-3 menu-spacing-margin">



                             <ul class="menu-container">

                                <li class="menu-item current"><a class="menu-link" href="home.php">
                                  <div>Beranda</div>
                              </a>
                              
                                <ul class="sub-menu-container">
                                  <li class="menu-item current"><a class="menu-link" href="antrian-online.php">
                                      <div>Mesin Antrian</div>
                                </a></li>

                                  <li class="menu-item"><a class="menu-link" href="informasi-kamar.php">
                                      <div>Informasi Kamar</div>
                                </a></li>
                                  
                                  <li class="menu-item"><a class="menu-link" href="informasi-dokter.php">
                                      <div>Informasi Dokter</div>
                                </a></li>

                                  <li class="menu-item"><a class="menu-link" href="layanan-pengaduan.php">
                                      <div>Layanan Pengaduan</div>
                                </a></li>

                                  <li class="menu-item"><a class="menu-link" href="kepuasan-pelanggan.php">
                                      <div>Kepuasan Pelanggan</div>
                                </a></li>
                                </ul>
                                </li>


                              <li class="menu-item"><a class="menu-link" href="#">
                                  <div>Profil</div>
                              </a>

                                <ul class="sub-menu-container">
                                  <li class="menu-item"><a class="menu-link" href="ketenagaan.php">
                                    <div>Ketenagaan</div>
                                </a></li>

                                  <li class="menu-item"><a class="menu-link" href="organisasi.php">
                                    <div>Organisasi</div>
                                </a></li>

                                  <li class="menu-item"><a class="menu-link" href="sejarah.php">
                                    <div>Sejarah</div>
                                </a></li>

                                  <li class="menu-item"><a class="menu-link" href="tugas-dan-fungsi.php">
                                    <div>Tugas dan Fungsi</div>
                                </a></li>

                                  <li class="menu-item"><a class="menu-link" href="program-dan-kegiatan.php">
                                    <div>Program dan Kegiatan</div>
                                </a></li>

                                  <li class="menu-item"><a class="menu-link" href="sarana-dan-prasarana.php">
                                    <div>Sarana dan Prasarana</div>
                                </a></li>

                                  <li class="menu-item"><a class="menu-link" href="laporan-rumah-sakit.php">
                                    <div>Laporan Rumah Sakit</div>
                                </a></li>
                                </ul>
                            </li>

                           
                            
                        <li class="menu-item"><a class="menu-link" href="#">
                          <div>Layanan</div>
                      </a>
					  
                      <ul class="sub-menu-container">

                        <li class="menu-item"><a class="menu-link" href="dokter.php">
                            <div>Dokter</div>
                        </a></li>
                        <li class="menu-item"><a class="menu-link" href="rawat-jalan.php">
                            <div>Rawat Jalan</div>
                        </a></li>
                        <li class="menu-item"><a class="menu-link" href="rawat-inap.php">
                            <div>Rawat Inap</div>
                        </a></li>
                        <li class="menu-item"><a class="menu-link" href="igd-24jam.php">
                            <div>IGD (24 Jam)</div>
                        </a></li>


                    </ul>
                </li>


                <li class="menu-item"><a class="menu-link" href="#">
                  <div>Indikator Rumah Sakit</div>
              </a>

              <ul class="sub-menu-container">

                  <li class="menu-item"><a class="menu-link" href="indikator-nasional-mutu-inm.php">
                    <div>Indikator Nasional Mutu (INM)</div>
                </a></li>

                <li class="menu-item"><a class="menu-link" href="indikator-pelayanan.php">
                    <div>Indikator Pelayanan</div>
                </a></li>

                <li class="menu-item"><a class="menu-link" href="jumlah-kunjungan.php">
                    <div>Jumlah Kunjungan</div>
                </a></li>


            </ul>

        </li>


    </ul>



</nav><!-- #primary-menu end -->



</div>

</div>

</div>

<div class="header-wrap-clone"></div>

</header><!-- #header end -->


		<section class="page-title page-title-mini">
			<div class="container">
				<div class="page-title-row">

					<div class="page-title-content">
						<h1>Mesin Antrian</h1>
					</div>

					<nav aria-label="breadcrumb">

						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="home.php">Beranda</a></li>
							<li class="breadcrumb-item"><a href="#">Pages</a></li>
							<li class="breadcrumb-item active" aria-current="page">Mesin Antrian</li>
						</ol>
					</nav>
				</div>

			</div>

		</section><!-- .page-title end -->

		<section id="content">
			<div class="content-wrap min-vh-30 d-flex align-items-center">
				<div class="container">
					<div class="row justify-content-center mb-5">
						<div class="col-xl-6 col-lg-8 text-center">
							<h3 class="h1 fw-bold mb-3">Mesin Antrian RSUD Poso</h3>
						</div>
					</div>


					<div id="primary" class="content-area col-md-8">
		<main id="main" class="site-main" role="main" itemprop="mainContentOfPage">

			
				<article id="post-151" class="post-151 department type-department status-publish has-post-thumbnail hentry animated fadeIn entry" itemscope="itemscope" itemtype="http://schema.org/CreativeWork">
	
	<header class="entry-header">
				
		
	</header><!-- .entry-header -->

	
	<div class="entry-content" itemprop="text">
	<p><span id="more-151"></span></p>
<h2 class="elementor-heading-title elementor-size-medium elementor-inline-editing pen" contenteditable="true" data-elementor-setting-key="title" data-pen-placeholder="Ketik di Sini..."><span class="JsGRdQ">Mesin antrian RSUD Poso</span>&ZeroWidthSpace;</h2>
<img src="images/MESIN_ANTRIAN.jpg" alt=""><br><br>
<p><strong>Pihak RSUD Poso mengadakan Mesin Antrian RSUD Poso dengan tujuan membantu pelayanan pasien untuk bisa ke poli yang dituju dengan cepat. tujuan diadakannya Mesin Antrian RSUD Poso adalah untuk memberi pelayanan yang cepat kepada pasien RSUD Poso untuk membantu pasien langsung menunggu di depan Poliklinik yang dituju.</strong></p>
<p><strong>Adapun berkas-berkas yang harus disiapkan agar dimudahkan pelayanan pada pasien, yaitu:</strong></p>
<ol>
<li><strong>Kartu Rekam Medis</strong></li>
</ol>
<ol start="2">
<li><strong>Surat Rujukan / kartu BPJS</strong></li>
</ol>
<ol start="3">
<li><strong>KTP dan no. Telpon/HP (yang masih aktif)</strong></li>
</ol>
<p><strong>waktu pelayanan Mesin Antrian RSUD Poso dimulai dari waktu:</strong></p>
<li><strong>Jam 08.00 s/d 12.00 (untuk hari Senin s/d hari Kamis) </strong></li>
<li><strong>Jam 08.00 s/d 11.00 (untuk hari Jumat) </strong></li>
<br>
<br>
<p><strong>Mesin Antrian RSUD Poso ini telah diberlakukan sejak bulan Juli tahun 2023, dan poliklinik yang dilayani lewat Mesin Antrian RSUD Poso adalah sebagai berikut:</strong></p>
<ol start="1">
<li><strong>Polik THT</strong></li>
</ol>
<ol start="2">
<li><strong>Polik Gigi</strong></li>
</ol>
<ol start="3">
<li><strong>Polik Jiwa</strong></li>
</ol>
<ol start="4">
<li><strong>Polik Bedah</strong></li>
</ol>
<ol start="5">
<li><strong>Polik Paru</strong></li>
</ol>
<br>
<p><strong>Untuk poliklinik yang lainnya akan menyusul</strong></p>
<br>
<br>
<img src="images/PASIEN_MENGISI.jpg" alt="">
<br>
<p><strong>untuk pelayanan Mesin Antrian RSUD Poso, bisa langsung menuju ke bagian loket RSUD Poso</strong></p>

	</div><!-- .entry-summary -->

		
	
		
</article><!-- #post-## -->

				
				
			
		</main><!-- #main -->
	</div>
								</tr>

							</tbody>
						</table>
					</div>
							


				
				</div>
			</div>
		</section>

<!-- Social Sidebar -->

		<section id="content">
			<div class="content-wrap">
				<div class="container">
				    
					<div class="si-sticky si-sticky-right si-sidebar">
						<a href="#" class="social-icon text-white bg-instagram">
							<span>Follow on Twitter</span>
							<i class="fa-brands fa-instagram"></i>
						</a>
						<a href="#" class="social-icon text-white bg-facebook">
							<span>Follow on Pinterest</span>
							<i class="fa-brands fa-facebook"></i>
						</a>
						<a href="#" class="social-icon text-white bg-twitter">
							<span>Email Us</span>
							<i class="fa-brands fa-twitter"></i>
						</a>
						<a href="#" class="social-icon text-white bg-whatsapp">
							<span>Email Us</span>
							<i class="fa-brands fa-whatsapp"></i>
						</a>

					</div>
					
				</div>
			</div>
		</section>


	<!-- Footer

	<footer id="footer" class="bg-contrast-100" style="border-top: 2px solid rgba(var(--cnvs-contrast-rgb),0.06);">

		============================================= -->

		<footer id="footer" class="dark">
			<div class="container">
				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap">

					<div class="row col-mb-50">
						<div class="col-md-6 col-lg-4">

							<div class="widget">

								<img src="images/1200px-Logo_RSUD_Poso_terbaru.png" alt="Image" class="footer-logo">

								<p><strong>RSUD kabposo</strong></p>

								<div style="background: url('images/world-map.png') no-repeat center center; background-size: 100%;">
									<address>
										<strong>Alamat:</strong><br>
										Jl. Jend. Sudirman No.33, Kasintuwu, Kec. Poso<br>Kota Utara, Kabupaten Poso, Sulawesi Tengah 94611<br>
									</address>

									<strong><i class="fa-solid fa-envelope"></i> rsudkabposo@gmail.com</strong>
								</div>

							</div>

						</div>

						<div class="col-md-6 col-lg-2">

							<div class="widget widget_links">

								<h4 class="text-transform-none ls-0">Info Terkini</h4>

										<ul>
											<li><a href="https://posokab.go.id/">posokab.go.id</a></li>
											<li><a href="https://diskominfosandi.posokab.go.id/">diskominfosandi</a></li>
											<li><a href="https://ppid.posokab.go.id/">ppid</a></li>
											<li><a href="https://dinsos.posokab.go.id/">dinsos</a></li>
											<li><a href="https://bapelitbangda.posokab.go.id/">bapelitbangda</a></li>
											<li><a href="https://ptsp.posokab.go.id/">ptsp</a></li>
										</ul>

							</div>

					    </div>

						<div class="col-md-6 col-lg-2">

							<div class="widget widget_links">

								<h4 class="text-transform-none ls-0">Links</h4>

										<ul>
											<li><a href="https://posokab.go.id/">posokab.go.id</a></li>
											<li><a href="https://diskominfosandi.posokab.go.id/">diskominfosandi</a></li>
											<li><a href="https://ppid.posokab.go.id/">ppid</a></li>
											<li><a href="https://dinsos.posokab.go.id/">dinsos</a></li>
											<li><a href="https://bapelitbangda.posokab.go.id/">bapelitbangda</a></li>
											<li><a href="https://ptsp.posokab.go.id/">ptsp</a></li>
										</ul>

							</div>

						</div>
						
						<div class="col-md-6 col-lg-4">

							<div class="row content-center">

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.656522717481!2d120.76016999999997!3d-1.3827283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d8ee4535445f9bd%3A0xac61fa5ab5643739!2sRumah%20Sakit%20Umum%20Daerah%20Poso!5e0!3m2!1sen!2sid!4v1691659846389!5m2!1sen!2sid" width="100" height="100" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

							</div>

						</div>
				

				</div><!-- .footer-widgets-wrap end -->
			</div>
        </div>



		<!-- Copyrights



			============================================= -->



		<div id="copyrights" class="bg-transparent">


			<div class="container">


				<div class="row col-mb-30">


					<div class="col-md-6 text-center text-md-start">


						Copyrights &copy; 2023 <a href="https://rsud.kabposo.com">RSUD Kabupaten Poso</a>.<br>


					</div>


				</div>


			</div>


		</div><!-- #copyrights end -->


	</footer><!-- #footer end -->


</div><!-- #wrapper end -->


	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="uil uil-angle-up"></div>



	<!-- JavaScripts

       ============================================= -->

       <script src="js/functions.js"></script>



   </body>

   </html>