<!DOCTYPE html>

<head>
    <link rel="sortcut icon" href='../images/simbolo.png' />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CORP Gestão de Atendimento</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/Layout.css">
    <link rel='stylesheet' href="../css/bootstrap.min.css">
    <script type='text/javascript' src='../js/bootstrap.min.js'></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>

<nav class="navbar navbar-expand navbar-transparent fixed-top" color-on-scroll="200" style='color:white;'>
    <a class="navbar-brand" href="#">
        <img src="../images/simbolo.png" width="50" height="50" alt="">
      </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse mr-3" id="navbarNav">
       
        <ul class="navbar-nav" id='nav'>
            <li class="nav-item active">
                <a class="nav-link" href="Index.php">HOME <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#Sobre">SOBRE NÓS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#rsvp">RSVP</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#mailing">MAILING</a>
            </li>
        </ul>
    </div>
</nav>

<body>
    <div data-spy="scroll" data-target="#navbar-example2" data-offset="0">
    <div class="container-fluid" id='topo'>
        <div class="row justify-content-md-center">
            <div class="col col-lg-6 text-center" id='gestao'>
                <h4> GESTÃO DE ATENDIMENTO </h4>
                </p>
                <hr>
                <p>Buscamos agilizar os processos e facilitar o atendimento, encontrando soluções rápidas e proporcionando uma experiência incrível. Conheça mais sobre nossos serviços!</p>
            </div>
            <div class="col-md-auto justify-content-md-center">
                <!-- <img src='../images/fundo3.jpg' class='imgBanner'> -->
            </div>
        </div>
    </div>
            <div class="container-fluid" id="rspv">
                <div class="text-center">
                    <h3>SERVIÇOS</h3><hr>
                </div>
                <div class="row">

                    <div class="col-sm-4">
                        <img src="../images/rsvp.png" class='icons' height="80px" width="80px">
                        <h1>RSVP</h1>
                        <hr>
                        <p class='text-center'>Criação e envio de convites, RSVP ativo e
                            receptivo, para eventos e campanhas em
                            todo Brasil.</p>
                    </div>
        
                        <div class="col-sm-4 ">
                            <img src="../images/mailin.png"  class='icons' height="80px" width="80px">
                            <h1>PROSPECÇÃO PARA
                                GERAÇÃO DE LEADS</h1>
                            <hr>
                            <p class='text-center'>Otimize os resultados da sua área comercial
                                com prospecção, qualificação e geração de
                                leads. Também é possível realizar o
                                agendamento de reuniões comerciais e gerar
                                relatórios dos resultados alcançados.</p>
                        </div>
                        <div class="col-sm-4 ">
                            <img src="../images/mailing.png"  class='icons'h eight="80px" width="80px">
                            <h1>CONSTRUÇÃO E
                                ATUALIZAÇÃO MAILING</h1>
                            <hr>
                            <p class='text-center'>Levantamento e atualização do banco de
                                dados cadastrais para você que quer criar
                                campanhas e projetos assertivos e
                                segmentados, contando com um mailing
                                atualizado e focado nas suas reais
                                necessidades.</p>
                        </div>
                    </div>
                </div>


<div class="container-fluid mt-5">
    <div class="text-center">
        <h3>NOSSOS CLIENTES</h3><hr>
    </div>
    <div class="row">
        <div class="col-sm-12 text-center">
            <img src='../images/logoAMC_alta _cliente.jpg' width="300px" height="auto">
        </div>
    </div>
</div>
<div class="container-fluid mt-5" id='contato'>
    <div class='row'>
        <div class="col-sm-6 text-center">
            <img src="../images/rsvp.png"  class='icons'h eight="80px" width="80px">
            <h5>Contato via E-mail</h5><hr>
            <p>Receba novidades diretamente em seu e-mail</p>
        </div>
        <div class="col-sm-6">
            <form method='POST' action='email.php'>

                <label for="Nome">Nome</label>
                <input type='text' class='form-control'  name="Nome" id='Nome' required/>

                <label for="Email">E-mail</label>
                <input type='email' class='form-control ' name="Email" id='Email' required/><br>
              <button class='btn btn-success ' name='Enviar'>Receber Noticias</button>
            </form>
           
          </div>
        </div>
    </div>
</div>
</body>
<footer>
    <div class='container-fluid'>
    <div class='row'>
    <div class='col-sm-6 text-center'>
    <img src='../images/logo_fundo.jpg' width="350px" height="auto">
    </div>
    <div class='col-sm-6 text-center' id='telefone'>
    <p class='tel'>(11) 23400 3081</p>
    <p class='tel'>(11) 23400 3081</p>
    </div>
    </div>
</div>
</footer>
</html>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://wa.me/5511986984344?text=Olá%20Anderson%20gostaria%20de%20tirar%20uma%20dúvida!" style="position:fixed;width:60px;height:60px;bottom:40px;right:40px;background-color:#25d366;color:#FFF;border-radius:50px;text-align:center;font-size:30px;box-shadow: 1px 1px 2px #888;
  z-index:1000;" target="_blank">
    <i style="margin-top:16px" class="fa fa-whatsapp"></i>
</a>
<script>
    function checkScroll(){
    var startY = $('.navbar').height() * 2; //The point where the navbar changes in px

    if($(window).scrollTop() > startY){
        $('.navbar').addClass("scrolled");
    }else{
        $('.navbar').removeClass("scrolled");
    }
}

if($('.navbar').length > 0){
    $(window).on("scroll load resize", function(){
        checkScroll();
    });
}
    </script>
<style>
.text-center{
    text-align: center !important;
}

</style>