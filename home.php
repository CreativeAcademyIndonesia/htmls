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
		.block-card-9 .grid-inner .btn-hover {
			opacity: 0;
			display: block;
			transition: opacity .3s ease, transform .3s .1s ease;
			margin-top: 15px;
			position: absolute;
			transform: translateY(0);
		}
		.block-card-9 .grid-inner:hover .btn-hover {
			opacity: 1;
			transform: translateY(-5px);
		}

		.block-card-9 .grid-inner .grid-image {
			position: absolute;
			left: 0;
			top: 0;
			width: 100%;
			height: 100%;
			background-size: cover;
			background-position: center center;
		}

		.block-card-9 .grid-inner:hover .grid-image {
			-webkit-animation: kenburns 20s ease-out both;
	        animation: kenburns 20s ease-out both;
		}

		.block-card-9 .grid-inner .grid-icon,
		.block-card-9 .grid-inner .grid-content {
			transition: transform .3s ease;
		}

		.block-card-9 .grid-inner:hover .grid-content { transform: translateY(-45px); }
		.block-card-9 .grid-inner:hover .grid-icon { transform: translateY(-5px); }

		@-webkit-keyframes kenburns {
		  0% {
		    -webkit-transform: scale(1) translate(0, 0);
		            transform: scale(1) translate(0, 0);
		    -webkit-transform-origin: 84% 84%;
		            transform-origin: 84% 84%;
		  }
		  100% {
		    -webkit-transform: scale(1.25) translate(20px, 15px);
		            transform: scale(1.25) translate(20px, 15px);
		    -webkit-transform-origin: right bottom;
		            transform-origin: right bottom;
		  }
		}
		@keyframes kenburns {
		  0% {
		    -webkit-transform: scale(1) translate(0, 0);
		            transform: scale(1) translate(0, 0);
		    -webkit-transform-origin: 84% 84%;
		            transform-origin: 84% 84%;
		  }
		  100% {
		    -webkit-transform: scale(1.25) translate(20px, 15px);
		            transform: scale(1.25) translate(20px, 15px);
		    -webkit-transform-origin: right bottom;
		            transform-origin: right bottom;
		  }
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

                                <img class="logo-default" srcset="images/logorsudposoterbaru.png, images/logorsudposoterbaru.png 2x" src="logorsudposoterbaru.png" alt="Logo">

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

                                <li class="menu-item"><a class="menu-link" href="home.php">
                                  <div>Beranda</div>
                              </a>
                              
                                <ul class="sub-menu-container">
                                  <li class="menu-item"><a class="menu-link" href="antrian-online.php">
                                      <div>Mesin Antrian</div>
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



		<!-- Slider

          ============================================= -->

          <section id="slider" class="slider-element swiper_wrapper min-vh-50 min-vh-md-100" data-loop="true" data-autoplay="5000">

             <div class="slider-inner">



                <div class="swiper-container swiper-parent">

                   <div class="swiper-wrapper">

                      <div class="swiper-slide">



                         <div class="swiper-slide-bg"><img src="images/SELAMAT_DATANG_DI_RSUD_POSO.png" style="width:100%;height:auto;"></div>

                     </div>

                      <div class="swiper-slide">


                      	<div class="swiper-slide-bg"><img src="images/GAMBAR_RSUD_2.png" style="width:100%;height:auto;"></div>
                        

                     </div>


                     <div class="swiper-slide">


                     		<div class="swiper-slide-bg"><img src="images/SELAMAT_DATANG_DI_RSUD_POSO.png" style="width:100%;height:auto;"></div>
                      
                     </div>

                 </div>



             </div>



         </div>

     </section><!-- #slider end -->




     <section id="content" style="margin-top:-100px;">
         <div class="content-wrap">
            <div class="container">
               <div class="row justify-content-center mw-lg mx-auto ">
                  <div class="col-md-6 text-center">

                  </div>
                  <div class="w-100 mt-4"></div>
                  <div class="col-md-3">
                     <div class="feature-box fbox-center fbox-plain px-4 py-5 rounded-3 bg-light border mx-0">
                        <div class="fbox-icon mb-3">
                           <a href="antrian-online.php"><i class="bi-mouse"></i></a>
                       </div>
                       <div class="fbox-content">
                           <h3>MESIN ANTRIAN</h3>
                       </div>
                   </div>
               </div>
               <div class="col-md-3">
                 <div class="feature-box fbox-center fbox-plain px-4 py-5 rounded-3 bg-light border mx-0">
                    <div class="fbox-icon mb-3">
                       <a href="informasi-kamar.php"><i class="uil uil-ellipsis-h"></i></a>
                   </div>
                   <div class="fbox-content">
                       <h3>INFORMASI KAMAR</h3>
                   </div>
               </div>
           </div>
           <div class="col-md-3">
             <div class="feature-box fbox-center fbox-plain px-4 py-5 rounded-3 bg-light border mx-0">
                <div class="fbox-icon mb-3">
                   <a href="layanan-pengaduan.php"><i class="bi-file-earmark-richtext"></i></a>
               </div>
               <div class="fbox-content">
                   <h3>LAYANAN PENGADUAN</h3>
               </div>
           </div>
       </div>
       <div class="col-md-3">
         <div class="feature-box fbox-center fbox-plain px-4 py-5 rounded-3 bg-light border mx-0">
            <div class="fbox-icon mb-3">
               <a href="kepuasan-pelanggan.php"><i class="bi-code"></i></a>
           </div>
           <div class="fbox-content">
               <h3>KEPUASAN PELANGGAN</h3>
           </div>
       </div>
   </div>

</div>
</div>
</div>
</section>




<section id="content">
 <div class="content-wrap min-vh-100 d-flex align-items-center">
    <div class="container">
       <div class="row justify-content-center mb-5">
          <div class="col-xl-6 col-lg-8 text-center">
             <h3 class="h1 fw-bold mb-3">LAYANAN RSUD POSO</h3>
         </div>
     </div>
     <div class="row block-card-9 col-mb-50">
      <div class="col-lg-4 min-vh-75">
         <div class="grid-inner rounded-3 h-100">
            <div class="grid-image lazy" data-bg="images/HOME_IGD.jpg"></div>
            <div class="bg-overlay">
               <div class="bg-overlay-content flex-column justify-content-between align-items-start p-5 dark">
                   <div class="grid-icon">
                     
                 </div>
                 <div class="grid-content">
                     
                     <h3 class="fw-medium h2">IGD 24 JAM</h3>
                     <a href="igd-24jam.php" class="icon-stacked rounded-circle bg-white text-danger text-center mb-0 btn-hover h5"><i class="bi-arrow-right"></i></a>
                 </div>
             </div>
             <div class="bg-overlay-bg" style="background: linear-gradient(to bottom, rgba(0,0,0,0.3) 0%, #b91523 100%);"></div>
         </div>
     </div>
 </div>
 <div class="col-lg-4 min-vh-75">
     <div class="grid-inner rounded-3 h-100">
        <div class="grid-image lazy" data-bg="images/HOME_RANAP.jpg"></div>
        <div class="bg-overlay">
           <div class="bg-overlay-content flex-column justify-content-between align-items-start p-5 dark">
               <div class="grid-icon">
                 
             </div>
             <div class="grid-content">
                 <h3 class="fw-medium h2">RAWAT INAP</h3>
                 <a href="rawat-inap.php" class="icon-stacked rounded-circle bg-white text-center mb-0 btn-hover h5" style="color: brown"><i class="bi-arrow-right"></i></a>
             </div>
         </div>
         <div class="bg-overlay-bg" style="background: linear-gradient(to bottom, rgba(0,0,0,0.3) 0%, #604235 100%);"></div>
     </div>
 </div>
</div>
<div class="col-lg-4 min-vh-75">
 <div class="grid-inner rounded-3 h-100">
    <div class="grid-image lazy" data-bg="images/Logo_RSUD_Poso_terbaru.png"></div>
    <div class="bg-overlay">
       <div class="bg-overlay-content flex-column justify-content-between align-items-start p-5 dark">
          <div class="grid-icon">
             
         </div>
         <div class="grid-content">
             <h3 class="fw-medium h2">INFORMASI DOKTER</h3>
             <a href="dokter.php" class="icon-stacked rounded-circle bg-white text-success text-center mb-0 btn-hover h5"><i class="bi-arrow-right"></i></a>
         </div>
     </div>
     <div class="bg-overlay-bg" style="background: linear-gradient(to bottom, rgba(0,0,0,0.3) 0%, #497b37 100%);"></div>
 </div>
</div>
</div>
</div>
</div>
</div>
</section>





		<section id="content">
			<div class="content-wrap">
				<div class="container">
					<div class="row justify-content-center gutter-50 col-mb-10">


          <div class="col-xl-6 col-lg-8 text-center">
             <h3 class="h1 fw-bold mb-3"></h3>
         </div>


						<div class="clear my-3"></div>

						<div class="col-lg-5 col-sm-6">

							<div class="feature-box fbox-effect flex-column bg-primary dark p-4 rounded-3">
								<div class="fbox-content text-center">
									<br><h2 class="fw-bold">JADWAL DOKTER</h2>
									<a href="jadwal-dokter.php" class="button button-border button-light button-rounded text-uppercase m-0">Selengkapnya</a>
								</div>

							</div>

						</div>
						<div class="col-lg-5 col-sm-6">
							<div class="feature-box fbox-effect flex-column bg-primary dark p-4 rounded-3">
								<div class="fbox-content text-center">
									<br><h2 class="fw-bold">DOKTER SPESIALIS</h2>
									<a href="dokter.php" class="button button-border button-light button-rounded text-uppercase m-0">Selengkapnya</a>
								</div>
							</div>
						</div>


					</div>
				</div>
			</div>
		</section><!-- #content end -->




</section><!-- #content end -->

<section id="content">
  <div class="content-wrap">
     <div class="container">
        <div class="row justify-content-center mb-5">
           <div class="col-xl-6 col-lg-8 text-center">
              <h3 class="h1 fw-bold mb-3">T E R K A I T</h3>
          </div>
      </div>
      <div class="post-grid row col-mb-30">
       <div class="entry col-lg-4 col-md-6">
          <div class="grid-inner shadow-sm card rounded-5">
             <a href="images/webdinkesposo.png" data-lightbox="image">
                <img src="images/webdinkesposo.png" alt="Image" class="card-img-top">
            </a>
            <div class="p-4">
                <div class="entry-title">
                   <h5 class="fw-medium text-danger mb-3">Kab.poso</h5>
                   <h3 class="text-transform-none ls-0 h5"><a href="https://dinkes.posokab.go.id/">Dinas Kesehatan Kab. Poso</a></h3>
               </div>
               <div class="entry-meta">
                   <ul>
                      <li><i class="uil uil-schedule"></i> 2023</li>
                  </ul>
              </div>
              <div class="entry-content mt-4">
               <p class="mb-0">Bidang Yankes subkoor primer dan SDK subkoor farmasi melakukan visitasi ke salah satu klinik kecantikan ELRE Jl. Pulau Seram. Visitasi dilakukan untuk mendapatkan rekomendasi ijin operasional berusaha.</p>
           </div>
       </div>
   </div>
</div>


<div class="entry col-lg-4 col-md-6">
  <div class="grid-inner shadow-sm card rounded-5">
     <a href="images/webkabposo.png" data-lightbox="image">
        <img src="images/webkabposo.png" alt="Image" class="card-img-top">
    </a>
    <div class="p-4">
        <div class="entry-title">
           <h5 class="fw-medium text-danger mb-3">Kab.Poso</h5>
           <h3 class="text-transform-none ls-0 h5"><a href="https://posokab.go.id/">Pemerintah Kababupaten Poso</a></h3>
       </div>
       <div class="entry-meta">
           <ul>
              <li><i class="uil uil-schedule"></i> 2023</li>
          </ul>
      </div>
      <div class="entry-content mt-4">
       <p class="mb-0">Jangan pernah melupakan jasa-jasa para guru, karena kita bisa seperti ini berkat jasa dan upaya pendidikan serta pengajaran dari para pahlawan tanpa tanda jasa ini” Ungkap Bupati Poso dr. Verna G.M Inkiriwang.</p>
   </div>
</div>
</div>
</div>


<div class="entry col-lg-4 col-md-6">
  <div class="grid-inner shadow-sm card rounded-5">
     <a href="images/webdiskominfoposo.png" data-lightbox="image">
        <img src="images/webdiskominfoposo.png" alt="Image" class="card-img-top">
    </a>
    <div class="p-4">
        <div class="entry-title">
           <h5 class="fw-medium text-danger mb-3">Kab. Poso</h5>
           <h3 class="text-transform-none ls-0 h5"><a href="blog-single.html">Dinas Komunikasi Informasi dan Sandi Kab. Poso</a></h3>
       </div>
       <div class="entry-meta">
           <ul>
              <li><i class="uil uil-schedule"></i> 2023</li>
          </ul>
      </div>
      <div class="entry-content mt-4">
       <p class="mb-0">Bupati Poso dr. Verna G.M Inkiriwang didampingi Wakil Bupati Poso M. Yasin Mangun , S. Sos menghadiri Hut Bhayangkara ke-77 yang digelar di Halaman Polres Poso Sabtu 1 Juli 2023 berlangsung khidmat dengan Inspektur Upacara Kapolres Poso AKBP Riski Fara Shandy, S.I.K., M.I.K.
Membacakan amanat Presiden Joko Widodo.</p>
   </div>
</div>
</div>
</div>





</div>
</div>
</div>
</section>


		<section id="content">
			<div class="content-wrap">
				<div class="container mw-md">
					<div class="row align-items-stretch grid-border">
						<div class="col-md-6 col-padding">
									<img src="images/logodinkesposo.png">
									<h3 class="text-transform-none ls-0 text-larger mt-3 text-center">
									<br>Dinas Kesehatan Kabupaten Poso</h3>
						</div>
						<div class="col-md-6 col-padding">
									<img src="images/diskominfoposo.png">
									<h3 class="text-transform-none ls-0 text-larger mt-3 text-center">
									<br>Dinas Komunikasi Informasi Dan Sandi Kabupaten Poso</h3>
						</div>

		</section><!-- #content end -->



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
						<a href="#wa.me/6285395259373" class="social-icon text-white bg-whatsapp">
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

								<p><strong></strong></p>

								<div style="background: url('images/world-map.png') no-repeat center center; background-size: 100%;">
									<address>
										<strong>Alamat :</strong><br>
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


						Copyrights &copy; 2023 <a href="https://rsud.posokab.go.id">RSUD Kabupaten Poso</a>.<br>


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