<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.1.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/f56e36ff4f.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/hover-style.css">
    <title>Acesso RU UFPR - Eliminando a fila do seu RU</title>
    <meta name="description" content="O sistema de acesso oficial da UFPR">
</head>
<body>
  <div class="container">
    <!-- HEADER SECTION -->
    <?php include("header.php"); ?>
    <!-- IMAGE AND SHORT DESCRIPTION SECTION -->
    <div class="row title-section text-center">
        <div class="row">
            <div class="col-md-12 text-uppercase">
                <h1 class="title">O sistema de acesso e pagamento oficial dos restaurantes da UFPR</h1>
            </div>
        </div>
        <!-- BUTTONS SECTION -->
        <div class="text-center buttons">
            <div class="col-md-3"></div>
            <div class="col-md-3">
                <a href="register.php" role="button" class="btn btn-primary button-margin button-register text-uppercase">Crie sua conta</a>
            </div>
            <div class="col-md-3">
                <a href="login.php" role="button" class="btn btn-primary button-margin button-login text-uppercase">Faça seu login</a>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

    <!-- FEATURES TITLE SECTION -->
    <div class="row text-center title-margin">
        <div class="col-md-12 text-uppercase sub-title"><h2>Como funciona</h2></div>
    </div>
    <!-- FEATURES SECTION -->
    <div class="row features text-center">
        <div class="col-sm-3 feature">
            <img src="images/form.svg" class="img-responsive center-block img-feature" alt="Cadastro">
            <h3 class="text-uppercase sub-title">Cadastro da Carteirinha</h3><hr style="width: 50%; height: 3px; background-color:red;">
            <p>Crie sua conta e cadastre sua carteirinha da UFPR aqui. O processo leva menos de 5 minutos.</p></div>
        <div class="col-sm-3 feature">
            <img src="images/money.svg" class="img-responsive center-block img-feature" alt="Créditos">
            <h3 class="text-uppercase sub-title">Insira seus créditos</h3><hr style="width: 50%; height: 3px; background-color:green;">
            <p>Use seu cartão de crédito para facilitar o pagamento do restaurante universitário. O sistema é 100% seguro e monitorado pela própria UFPR.</p></div>
        <div class="col-sm-3 feature">
            <img src="images/time.svg" class="img-responsive center-block img-feature" alt="Agilidade">
            <h3 class="text-uppercase sub-title">Seu RU sem filas</h3><hr style="width: 50%; height: 3px; background-color:yellow;">
            <p>Acesse o RU normalmente utilizando sua carteirinha, sem filas! O resto deixa que a gente cuida.</p></div>
        <div class="col-sm-3 feature">
            <img src="images/smartphone.svg" class="img-responsive center-block img-feature" alt="Mobile">
            <h3 class="text-uppercase sub-title">Consulte seus créditos</h3><hr style="width: 50%; height: 3px; background-color:blue;">
            <p>Seja na Web ou no seu celular, consulte e insira créditos em menos de 2 minutos. Tudo isto porque sabemos que o tempo de um estudante universitário é muito valioso.</p></div>
    </div>
    <!-- DEVELOPERS TITLE SECTION -->
    <div class="row text-center title-margin">
        <div class="col-md-12 text-uppercase sub-title"><h2>Desenvolvedores</h2></div>
    </div>
    <div class="row text-center title-margin">
        <div class="col-md-12"><p>Como estudantes, entendemos a importância da praticidade e segurança no nosso cotidiano. Por isso, trabalhamos incansavelmente por uma plataforma fácil e segura para todos os estudantes da UFPR.</p></div>
    </div>
    <!-- DEVELOPERS SECTION -->
    <div class="row developers text-center">
        <div class="col-sm-6 developer">
            <div class="hovereffect">
                <img class="img-responsive center-block img-circle" src="images/pedro.png" alt="Imagem Pedro">
                <div class="overlay">
                   <p class="info">Estudante de Engenharia Elétrica na UFPR desde 2013. Após longas horas de tempo perdido na fila do RU, Pedro começou a desenvolver o sistema de acesso para que outros estudantes não percam este mesmo tempo.</p>
                </div>
            <h3>Pedro Mantovani Antunes</h3><hr style="width: 50%; height: 3px; background-color:red;">
            <h4 class="dev-desc-margin">Engenharia Elétrica - UFPR<br />Back-end e front-end developer</h4>
            </div>
            <div class="row developer-margin">
                <div class="col-xs-3 col-xs-offset-3">
                    <a href="https://www.facebook.com/pedro.mantovani.12" target="_blank"><i class="fa fa-facebook fa-2x social-net-btn" aria-hidden="true"></i></a>
                </div>
                <div class="col-xs-3">
                    <a href="https://www.linkedin.com/in/pedro-mantovani" target="_blank"><i class="fa fa-linkedin fa-2x social-net-btn" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 developer">
            <div class="hovereffect">
                <img class="img-responsive center-block img-circle" src="images/erik.png" alt="Imagem Erik">
                <div class="overlay">
                   <p class="info">Estudante de Engenharia Elétrica na UFPR desde 2013. Cansado de carregar moedas e de problemas com o troco, Erik começou a desenvolver o sistema de acesso para que tudo seja mais simples e ágil, utilizando o sistema de créditos.</p>
                </div>
                <h3>Erik Nayan</h3><hr style="width: 50%; height: 3px; background-color:green;">
                <h4 class="dev-desc-margin">Engenharia Elétrica - UFPR<br />Back-end e front-end developer</h4>
            </div>
            <div class="row developer-margin">
                <div class="col-xs-3 col-xs-offset-3">
                    <a href="https://www.facebook.com/eriknayan" target="_blank"><i class="fa fa-facebook fa-2x social-net-btn" aria-hidden="true"></i></a>
                </div>
                <div class="col-xs-3">
                    <a href="https://br.linkedin.com/in/eriknayan/en" target="_blank"><i class="fa fa-linkedin fa-2x social-net-btn" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- TESTIMONY TITLE SECTION -->
    <div class="row testimonial-section">
        <div class="row text-center title-margin">
            <div class="col-md-12 text-uppercase sub-title testimonial-title"><h2>Testemunhos</h2></div>
        </div>
        <div class="row text-center">
            <div class="col-md-12 testimonial-subtitle">Veja o que os outros estudantes estão dizendo da plataforma.</div>
        </div>
        <!-- TESTIMONY SECTION -->
            <div class="col-md-4 testimonial">
            </div>
            <div class="col-md-4 testimonial">
            </div>
            <div class="col-md-4 testimonial">
            </div>
    </div>
    <!-- FOOTER SECTION -->
    <?php include("footer.php") ?>
    </div>
</body>
</html>
