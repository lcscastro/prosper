<?php
INCLUDE_ONCE './config.php';
?>

<!doctype html>
<html lang="pt-br" data-bs-theme="auto">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.111.3">
    <title>Prosper Individualização de Água e Gás</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/checkout/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-brands/css/uicons-brands.css'>
    <link href="normalizze.css" rel="stylesheet">
    <link rel="preconnect" href="https://www.google.com">
    <link rel="preconnect" href="https://www.gstatic.com" crossorigin>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }
      .bd-mode-toggle {
        z-index: 1500;
      }
    </style>    
    <!-- Custom styles for this template -->
    <link href="contato.css" rel="stylesheet">
    <link href="carousel.css" rel="stylesheet">
    <script async src="https://www.google.com/recaptcha/api.js?render=<?php echo SITE_KEY;?>"> </script>
    
  </head>
  <body class="bg-body-tertiary">
    <header data-bs-theme="light" class="d-flex flex-wrap justify-content-center py-2 mb-2 border-bottom">
      <nav class="navbar bg-light navbar-expand-md navbar-light fixed-top" style="padding-top: 8px; padding-bottom: 0px;">
        <div id="area-menu" class="container-fluid">
          <a id="logo-menu_a" class="navbar-brand d-flex align-items-center" href="index.html"><img id="logo-menu-img" class="img-fluid" src="img/Logo_Prosper_Site_250X150.png" alt="LogoTipo da Empresa"> </a>
          <button id="menu-mobile" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span> 
          </button>
          <div class="menu-header collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html" style="font-size: 20px;color: #000">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.html#servico" style="font-size: 20px;color: #000">Serviços</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.html#telemetria" style="font-size: 20px;color: #000">Telemetria</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cliente.html" style="font-size: 20px;color: #000">Área do Cliente</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contato.html" style="font-size: 20px;color: #000">Orçamento</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.instagram.com/prosperservice/" target="_blank"><i class="fi fi-brands-instagram" style="line-height: 2.2;"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.linkedin.com/company/prosperservice/" target="_blank"><i class="fi fi-brands-linkedin" style="line-height: 2.2;"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      
    </header>
    <div class="row area-form">
      <div class="col-md-6"> <!--col-md-8 -->
       <img class="img-contato img-fluid" src="./img/banner_pag_orcamento.png">
     </div>

      <div class="col-md-4 col-lg-6" id="kit-form">
        <h2 class="titulo-h2">Seja um cliente <span>Pros</span><span>per</span></h2>
        
        <form class="needs-validation" method="POST" id="form-contato" name="form-contato">

          <!-- ENVIAR A CHAVE PARA O JS -->
          
          <input type="hidden" name="sitekey" id="sitekey" value="<?php echo SITE_KEY;?>">
          <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">

          <div class="row">
            
            <div class="col-sm-4">
              <label for="nome" class="form-label">Seu Nome</label>
              <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite o nome completo" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-4">
              <label for="contato" class="form-label">Telefone para Contato</label>
              <input type="text" class="form-control" name="contato" id="contato" placeholder="Digite o seu contato" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-8">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="voce@exemplo.com">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="col-sm-8">
              <label for="endereco" class="form-label">Endereço</label>
              <input type="text" class="form-control" name="endereco" id="endereco" placeholder="" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="col-sm-5">
              <label for="Cidade" class="form-label">Cidade</label>
              <input type="text" class="form-control" name="cidade" id="cidade" placeholder="">
            </div>

            <div class="col-sm-3">
              <label for="estado" class="form-label">Estado</label>
              <select class="form-select" name="estado" id="estado" required>
                <option value="">Selecione</option>
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espírito Santo</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MT">Mato Grosso</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
                <option value="PR">Paraná</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SP">São Paulo</option>
                <option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>
                <option value="EX">Estrangeiro</option>
              </select>
              <div class="invalid-feedback">
                Insira um estado
              </div>
            </div>

          <div class="col-sm-3">
            <label for="cep" class="form-label">CEP</label>
            <input type="text" class="form-control" name="cep" id="cep" placeholder="" required>
            <div class="invalid-feedback">
              Zip code required.
            </div>
          </div>

          <div class="col-sm-6">
            <label for="condominio" class="form-label">Nome do condominio</label>
            <input type="text" class="form-control" name="condominio" id="condominio" placeholder="">
          </div>

          <div class="col-sm-5">
            <label for="administradora" class="form-label">Nome do administradora</label>
            <input type="text" class="form-control" name="administradora" id="administradora" placeholder="">
          </div>

        </div>
          <div class="col-sm-4">
            <label for="perfil" class="form-label">Perfil</label>
            <select class="form-select" name="perfil" id="perfil" required>
              <option value="">Selecione o perfil...</option>
              <option>Sindico</option>
              <option>Administradora</option>
              <option>Morador Conselheiro</option>
            </select>
            <div class="invalid-feedback">
              Insira o perfil
            </div>
          </div>

          <div class="mb-sm-auto">
            <label for="mensagem" class="form-label">Sua Mensagem</label>
            <textarea id="text-area-contato" class="form-control" name="mensagem" id="mensagem" rows="4"></textarea>
          </div>

          <button class="btn-msg btn btn-primary btn-lg" type="submit" name="btn-msg" id="btn-msg">Enviar Mensagem</button>
          <span name="msg" id="msg"></span>
        </form>
      </div>
    </div>
  <main>

 <!-- FOOTER -->
 <div class="container-fluid rodape-fundo">
      <footer class="rodape row py-2 my-2 border-top">
        <div class="col mb-4 logo-rodape">
          <a href="index.html"><img class="img-fluid" height="80%" src="img/Logo_Prosper_Branco_Site_250X150.png" > </a>
          <ul class="nav col-md-6 justify-content-start list-unstyled d-flex"> 
            <li class="ms-1">
              <a class="nav-link rodape-icone" href="https://www.instagram.com/prosperservice/"><i class="fi fi-brands-instagram" style="line-height: 2.2;"></i></a>
            </li>
            <li class="ms-1">
              <a class="nav-link rodape-icone" href="https://www.linkedin.com/company/prosperservice/"><i class="fi fi-brands-linkedin" style="line-height: 2.2;"></i></a>
            </li>
          </ul>
        </div>
        <div class="col mb-5 texto-rodape">
          <h5 class="rodape-texto" id="rodape-titulo-mobile">Fale conosco</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-1"><a class="nav-link p-0 rodape-texto">Rua Cavour, 81</a></li>
            <li class="nav-item mb-1"><a class="nav-link p-0 rodape-texto">Vila Prudente - São Paulo/SP</a></li>
            <li class="nav-item mb-1"><a class="nav-link p-0 rodape-texto">Tel: +55 11 3214-3232</a></li>
            <li class="nav-item mb-1"><a class="nav-link p-0 rodape-texto" id="rodape-texto-mobile">Horário de atendimento - Segunda à sexta 09hr às 17h30</a></li>
          </ul>
        </div>
        <p class="rodape-texto-empresa" style="font-size: 14px;">&copy; PROSPER 2023 | PROSPER SP MEDIÇÃO DE AGUA E GÁS LTDA</p>
        <!-- <a class="rodape-texto" href="#">Voltar ao Topo </a> -->
      </footer>
    </div>
</main> 
      <script src="custom.js"></script>
      <script src="./assets/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    </body>
</html>
