
     <?php include('includes/session.php'); ?>

  <meta charset="utf-8">
  <title><?=$texto['titulo_site_landing'];?></title>
  <meta name="robots" content="index, fallow" />
  <link rel="canonical" href="<?=$site;?>/cadastro">
  <meta name="viewport" content="width=device-width, initial-scale=1">    
  <meta name="keywords" content="<?=$texto['keywords_landing'];?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="google-site-verification" content="Jv1zg5fNc0dHUehYWyp88j-Uj-Fyg2Nh_BpjfzdqztI" />
  <meta name="author" content="<?=$texto['autor_site_landing'];?>">
  <meta property="og:site_name" content="<?=$texto['nome_site_landing'];?>"/>
  <meta property="og:url" content="<?=$site;?>"/>
  <meta name="description" content="<?=$texto['descricao_site_landing'];?>" />
  <meta property="og:description" content="<?=$texto['descricao_site_landing'];?>" />
   <meta name="google-site-verification" content="ap4V0chEWZkki1mLtgjgvzO7QtkXvO9-bX714wpNTgs" />
    <link rel="shortcut icon" href="/img/logo help agenda.png" type="image/x-icon">


  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">


</head>

<body class="team-page">

     <?php include('includes/header.php'); ?>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade" style="background-image: url(assets/img/team-page-title-bg.jpg);">
      <div class="container">
        <h1>Team</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Team</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

   <section id="team" class="team section">

  <!-- Título da Seção -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Nosso Time</h2>
    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
  </div><!-- Fim Título da Seção -->

  <div class="container">

    <div class="row gy-4">

      <!-- Membro da Equipe - Heitor -->
      <div class="col-lg-6 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
        <div class="team-member">
          <div class="member-img">
            <img src="assets/img/team/heitor.png" class="img-fluid" alt="Heitor Ribeiro">
            <div class="social">
              <a href="#"><i class="bi bi-twitter-x"></i></a>
              <a href="#"><i class="bi bi-facebook"></i></a>
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info">
            <h4>Heitor Ribeiro</h4>
            <span>CEO & Fundador</span>
          </div>
        </div>
      </div><!-- Fim Membro da Equipe - Heitor -->

      <!-- Membro da Equipe - Vanessa -->
      <div class="col-lg-6 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
        <div class="team-member">
          <div class="member-img">
            <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="Vanessa Guimarães">
            <div class="social">
              <a href="#"><i class="bi bi-twitter-x"></i></a>
              <a href="#"><i class="bi bi-facebook"></i></a>
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info">
            <h4>Vanessa Guimarães</h4>
            <span>COO & Co-fundadora</span>
          </div>
        </div>
      </div><!-- Fim Membro da Equipe - Vanessa -->

    </div>

  </div>

</section><!-- /Seção Equipe -->

  </main>
      <?php include('includes/footer.php'); ?>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>