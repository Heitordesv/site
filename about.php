<?php include('includes/session.php'); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <title><?= $texto['titulo_site_landing']; ?></title>
  <meta name="robots" content="index, follow" />
  <link rel="canonical" href="<?= $site; ?>/cadastro">
  <meta name="viewport" content="width=device-width, initial-scale=1">    
  <meta name="keywords" content="<?= $texto['keywords_landing']; ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="google-site-verification" content="Jv1zg5fNc0dHUehYWyp88j-Uj-Fyg2Nh_BpjfzdqztI" />
  <meta name="author" content="<?= $texto['autor_site_landing']; ?>">
  <meta property="og:site_name" content="<?= $texto['nome_site_landing']; ?>"/>
  <meta property="og:url" content="<?= $site; ?>"/>
  <meta name="description" content="<?= $texto['descricao_site_landing']; ?>" />
  <meta property="og:description" content="<?= $texto['descricao_site_landing']; ?>" />
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
  <link href="css/whats.css" rel="stylesheet">
  <link href="css/formulario.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <style>
    #toast-container > .toast-success {
      background-color: #51a351;
    }
    #toast-container > .toast-error {
      background-color: #bd362f;
    }
    /* Estilos para o modal */
    .hide {
      display: none;
    }
   
  </style>
  <style>
    .header .logo img {
      max-height: 62px;
      margin-right: 8px;
    }
    img, svg {
      vertical-align: middle;
    }
  </style>

</head>
<body class="about-page">

  <?php include('includes/header.php'); ?>

  <!-- Page Title -->
  <div class="page-title" data-aos="fade" style="background-image: url(assets/img/about-page-title-bg.jpg);">
    <div class="container">
      <h1>Sobre a Help Agenda</h1>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="index.html">Início</a></li>
          <li class="current">Sobre</li>
        </ol>
      </nav>
    </div>
  </div><!-- End Page Title -->

  <!-- About Section -->
  <section id="about" class="about section">
    <div class="container">
      <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-5">
          <img src="assets/img/SOBRE (2).png" class="img-fluid" alt="Sobre a Help Agenda">
        </div>
        <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">
          <div class="content">
            <h3>Transformando micro e pequenas empresas com soluções personalizadas</h3>
            <p>
              Na Help Agenda, entendemos que cada empresa é única. Nosso compromisso é oferecer soluções personalizadas e acessíveis que ajudam micro e pequenas empresas a prosperar. Nosso trabalho vai além de oferecer serviços — estamos aqui para construir parcerias sólidas e duradouras.
            </p>
            <ul>
              <li><i class="bi bi-check-circle-fill"></i> <span>Acreditamos na importância de cada detalhe e nos dedicamos a entender as necessidades individuais de cada cliente.</span></li>
              <li><i class="bi bi-check-circle-fill"></i> <span>Nossa abordagem é centrada no cliente, focada em fornecer soluções práticas que impulsionam o crescimento e a eficiência.</span></li>
              <li><i class="bi bi-check-circle-fill"></i> <span>Buscamos sempre fazer a diferença, criando valor real através de serviços e suporte excepcionais.</span></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section><!-- /About Section -->

  <!-- Why Us Section -->
  <section id="why-us" class="why-us section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Por que Escolher a Help Agenda</h2>
    </div><!-- End Section Title -->

    <div class="container">
      <div class="row g-0">
        <div class="col-xl-5 img-bg" data-aos="fade-up" data-aos-delay="100">
          <img src="assets/img/why-us-bg.jpg" alt="Razões para escolher a Help Agenda">
        </div>

        <div class="col-xl-7 slides position-relative" data-aos="fade-up" data-aos-delay="200">
          <div class="swiper init-swiper">
            <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 600,
                "autoplay": {
                  "delay": 5000
                },
                "slidesPerView": "auto",
                "centeredSlides": true,
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                },
                "navigation": {
                  "nextEl": ".swiper-button-next",
                  "prevEl": ".swiper-button-prev"
                }
              }
            </script>
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="item">
                  <h3 class="mb-3">Vamos crescer seu negócio juntos</h3>
                  <h4 class="mb-3">Oferecemos soluções acessíveis e eficazes para impulsionar seu crescimento empresarial.</h4>
                  <p>Na Help Agenda, acreditamos que o sucesso de nossos clientes é o nosso sucesso. Trabalhamos incansavelmente para fornecer suporte contínuo e soluções inovadoras que ajudam a alcançar metas e superar desafios.</p>
                </div>
              </div><!-- End slide item -->

              <div class="swiper-slide">
                <div class="item">
                  <h3 class="mb-3">Compromisso com a excelência</h3>
                  <h4 class="mb-3">Nosso compromisso é superar expectativas e oferecer um serviço de alta qualidade.</h4>
                  <p>Estamos dedicados a estabelecer parcerias confiáveis e duradouras. Cada interação com a Help Agenda reflete nosso compromisso com a excelência e a satisfação do cliente.</p>
                </div>
              </div><!-- End slide item -->

              <div class="swiper-slide">
                <div class="item">
                  <h3 class="mb-3">Inovação e adaptabilidade</h3>
                  <h4 class="mb-3">Adaptamos nossas soluções às suas necessidades em constante evolução.</h4>
                  <p>Ajudamos você a navegar pelas mudanças do mercado e a implementar estratégias que garantam competitividade e crescimento sustentável.</p>
                </div>
              </div><!-- End slide item -->

              <div class="swiper-slide">
                <div class="item">
                  <h3 class="mb-3">Suporte dedicado e personalizado</h3>
                  <h4 class="mb-3">Estamos aqui para apoiar sua jornada empresarial, oferecendo suporte personalizado e acessível.</h4>
                  <p>Nossa equipe está sempre disponível para oferecer orientação e resolver suas necessidades específicas com eficiência e compreensão.</p>
                </div>
              </div><!-- End slide item -->

            </div>
            <div class="swiper-pagination"></div>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
      </div>
    </div>
  </section><!-- /Why Us Section -->

  <!-- Seção Equipe -->
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
                <a href="#"><i class="bi bi-twitter"></i></a>
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
                <a href="#"><i class="bi bi-twitter"></i></a>
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

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="js/formuario.js"></script>

</body>
</html>
