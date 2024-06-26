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


  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="css/whats.css" rel="stylesheet">

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
    .hide {
      display: none;
    }
   
  </style><style>element.style {
}
.header .logo img {
    max-height: 62px;
    margin-right: 8px;
}
img, svg {
    vertical-align: middle;
}</style>

</head>

<body class="index-page">

   <?php include('includes/header.php'); ?>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <img src="assets/img/Design sem nome (16).png" alt="" data-aos="fade-in">

      <div class="container">
        <div class="row">
          <div class="col-xl-4">
            <h1 data-aos="fade-up">Sistema de Agendamento Para a Sua Empresa</h1>
            <blockquote data-aos="fade-up" data-aos-delay="100">
              <p>Experimente agora o sistema de agendamento HELP AGENDA por 10 dias gratuitamente!
              </p>
            </blockquote>
            <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
              <a href="#about" class="btn-get-started" style="background-color: black; color: var(--default-color);" onclick="openWhatsAppModal()">Fale conosco</a>
              <a href="https://www.youtube.com/watch?v=9Bj4TPNrHPk" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Apresentação</span></a>
            </div>
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

   <!-- Why Us Section -->
<section id="why-us" class="why-us section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Por Que Nos Escolher</h2>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row g-0">

      <div class="col-xl-5 img-bg" data-aos="fade-up" data-aos-delay="100">
        <img src="assets/img/post (4).png" alt="">
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
                <h3 class="mb-3">Como Nosso Sistema Pode Ajudar Você</h3>
                <h4 class="mb-3">Veja como tornamos fácil e eficiente o gerenciamento do seu negócio online:</h4>
              </div>
            </div><!-- End slide item -->

            <div class="swiper-slide">
              <div class="item">
                <h3 class="mb-3">Agendamento Simples</h3>
                <h4 class="mb-3">Marque compromissos de forma fácil usando nosso sistema.</h4>
                <p>Nosso sistema permite que você agende compromissos com facilidade, garantindo que você nunca perca uma reunião importante.</p>
              </div>
            </div><!-- End slide item -->

            <div class="swiper-slide">
              <div class="item">
                <h3 class="mb-3">Lembretes de Aniversários</h3>
                <h4 class="mb-3">Receba lembretes sobre os aniversariantes do dia.</h4>
                <p>Mantenha-se atualizado sobre os aniversários de seus clientes e funcionários com nossos lembretes automáticos.</p>
              </div>
            </div><!-- End slide item -->

            <div class="swiper-slide">
              <div class="item">
                <h3 class="mb-3">Feedback dos Clientes</h3>
                <h4 class="mb-3">Ouça o que seus clientes têm a dizer diretamente pelo sistema.</h4>
                <p>Nosso sistema permite que seus clientes deixem feedbacks diretamente, ajudando você a melhorar continuamente.</p>
              </div>
            </div><!-- End slide item -->

            <div class="swiper-slide">
              <div class="item">
                <h3 class="mb-3">Gestão de Clientes Potenciais</h3>
                <h4 class="mb-3">Administre e acompanhe os contatos que podem se tornar clientes.</h4>
                <p>Gerencie seus clientes potenciais de forma eficaz, acompanhando cada estágio do processo de vendas.</p>
              </div>
            </div><!-- End slide item -->

            <div class="swiper-slide">
              <div class="item">
                <h3 class="mb-3">Painel de Controle Simples</h3>
                <h4 class="mb-3">Tenha uma visão fácil do desempenho do seu negócio online.</h4>
                <p>Nosso painel de controle intuitivo oferece uma visão clara e abrangente do desempenho do seu negócio.</p>
              </div>
            </div><!-- End slide item -->

            <div class="swiper-slide">
              <div class="item">
                <h3 class="mb-3">Link Personalizado para sua Bio</h3>
                <h4 class="mb-3">Crie um link especial para sua biografia online.</h4>
                <p>Personalize sua presença online com um link exclusivo para sua biografia, facilitando o acesso de seus clientes.</p>
              </div>
            </div><!-- End slide item -->

            <div class="swiper-slide">
              <div class="item">
                <h3 class="mb-3">Agendamento Online Simplificado</h3>
                <h4 class="mb-3">Deixe seus clientes agendarem online com facilidade.</h4>
                <p>Ofereça aos seus clientes a conveniência de agendar compromissos online, simplificando o processo para todos.</p>
              </div>
            </div><!-- End slide item -->

            <div class="swiper-slide">
              <div class="item">
                <h3 class="mb-3">Captura Fácil de Contatos</h3>
                <h4 class="mb-3">Crie uma página dedicada para capturar informações de interessados.</h4>
                <p>Nosso sistema permite que você crie páginas dedicadas para coletar informações de contatos interessados, facilitando o crescimento da sua base de clientes.</p>
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

  <!-- Features Section -->
  <section id="features" class="features section">

    <div class="container">
      <div class="row">
        <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
          <h3 class="mb-0">Gestão Financeira Simplificada</h3>
          <h3>Transforme seu negócio com nosso sistema integrado de gestão financeira</h3>
  
          <div class="row gy-4">
  
            <div class="col-md-6">
              <div class="icon-list d-flex">
                <i class="bi bi-eye" style="color: #ff8b2c;"></i>
                <span>Gestão de Leads Simplificada</span>
              </div>
            </div><!-- End Icon List Item-->
  
            <div class="col-md-6">
              <div class="icon-list d-flex">
                <i class="bi bi-infinity" style="color: #5578ff;"></i>
                <span>Análises Avançadas</span>
              </div>
            </div><!-- End Icon List Item-->
  
            <div class="col-md-6">
              <div class="icon-list d-flex">
                <i class="bi bi-mortarboard" style="color: #e80368;"></i>
                <span>Agendamento Eficiente</span>
              </div>
            </div><!-- End Icon List Item-->
  
            <div class="col-md-6">
              <div class="icon-list d-flex">
                <i class="bi bi-star" style="color: #ffa76e;"></i>
                <span>Personalização Poderosa</span>
              </div>
            </div><!-- End Icon List Item-->
  
            <div class="col-md-6">
              <div class="icon-list d-flex">
                <i class="bi bi-x-diamond" style="color: #11dbcf;"></i>
                <span>Banco de Dados Integrado</span>
              </div>
            </div><!-- End Icon List Item-->
  
            <div class="col-md-6">
              <div class="icon-list d-flex">
                <i class="bi bi-camera-video" style="color: #4233ff;"></i>
                <span>Automação de Marketing</span>
              </div>
            </div><!-- End Icon List Item-->
  
            <div class="col-md-6">
              <div class="icon-list d-flex">
                <i class="bi bi-brightness-high" style="color: #29cc61;"></i>
                <span>Gestão de Assinaturas de Plano</span>
              </div>
            </div><!-- End Icon List Item-->
  
            <div class="col-md-6">
              <div class="icon-list d-flex">
                <i class="bi bi-activity" style="color: #ff5828;"></i>
                <span>Precificação Inteligente</span>
              </div>
            </div><!-- End Icon List Item-->
          </div>
        </div>
        <div class="col-lg-5 position-relative" data-aos="zoom-out" data-aos-delay="200">
          <div class="phone-wrap">
            <img src="assets/img/Design sem nome (14).png" alt="Imagem" class="img-fluid">
          </div>
        </div>
      </div>
  
    </div>
  
    <div class="details">
      <div class="container">
        <div class="row">
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
            <h4>Soluções Personalizadas para sua Empresa</h4>
            <p>Nosso sistema é dedicado a ajudar micro e pequenas empresas a se organizarem de forma eficiente. Reconhecemos que cada empresa é única, por isso personalizamos nossas soluções para atender às suas necessidades específicas de gestão:</p>
           
            <a href="#about" class="btn-get-started"style="background-color: black; color: #fff;">Comece Agora</a>
          </div>
        </div>
      </div>
    </div>
    
  
  </section><!-- /Features Section -->
  
  
  
  </main>
  
   <!-- Inclusão do footer.php -->
   <?php include('includes/footer.php'); ?>
  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

 
<div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>
  <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
  </script>

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
