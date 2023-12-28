<?php

$pdo = new PDO("mysql:host=localhost;dbname=boot_project", "root", "");
$sobre = $pdo->prepare("SELECT *FROM `tb_sobre`");
$sobre->execute();
$sobre = $sobre->fetch()['sobre'];

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Projecto</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">KAWENDA</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
    <div class="box">
        <section class="banner">
            <!--<div class="orvelay"></div> -->
            <div class="container chamada-banner">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2><?php echo htmlentities('<'); ?>STUDIOKAWENDA<?php echo htmlentities('>') ?></h2>
                        <p>Desenvolvedor web, licenciado em Ciencia da Computação</p>
                        <button type="button" class="btn btn-success">Saiba mais</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="cadastro-lead">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-6">
                        <h2><span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>Entre na nossa lista!</h2>
                    </div>
                    <div class="col-md-6">
                        <form action="" method="post">
                            <input type="text" name="nome"><input type="submit" value="Enviar">
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="depoimento">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Depoimentos</h2>
                        <blockquote>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae porro exercitationem dolorum nam maiores harum officia sunt eum doloribus commodi eveniet quae dolore, quo, consectetur recusandae reprehenderit. Officia, odit eveniet.</p>
                        </blockquote>
                    </div>
                </div>
            </div>
        </section>
        <section class="diferencias text-center">
            <h2>Conheça os meus serviços!</h2>
            <div class="container diferencias-container">
                <div class="row ">
                    <?php
                    echo $sobre;
                    ?>
                </div>
            </div>
        </section>
        <section class="equipe">
            <h2>Equipe</h2>
            <div class="container equipe-container">
                <div class="row">
                    <?php
                    $selectMembros = $pdo->prepare("SELECT *FROM `tb_equipe`");
                    $selectMembros->execute();
                    $membros = $selectMembros->fetchAll();
                    for ($i = 0; $i < count($membros); $i++) {
                    ?>
                        <div class="col-md-6">
                            <div class="equipe-single">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="user-picture"></div>
                                    </div>
                                    <div class="col-md-9">
                                        <h3><?php echo $membros[$i]['nome']; ?></h3>
                                        <p><?php echo $membros[$i]['descricao']; ?> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <section class="final-site">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Fale Conosco</h2>
                        <form action="">
                            <div class="form-group">
                                <label for="nome">Nome:</label>
                                <input type="text" class="form-control" id="pwd">
                            </div>
                            <div class="form-group">
                                <label for="email">Email address:</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Mensagem:</label>
                                <textarea class="form-control"></textarea>
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <h2>Nossos planos de trafego pago</h2>
                        <p>Os preços encontram-se em tempos promocionais por causa da Black-Friday:</p>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Normal</th>
                                    <th>Plus</th>
                                    <th>Plus Max</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>50000Kz</td>
                                    <td>60000Kz</td>
                                    <td>90000Kz</td>
                                </tr>
                                <tr>
                                    <td>20000 Pessoas</td>
                                    <td>30000 Pessoas</td>
                                    <td>50000 Pessoas</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </section>
    </div>


    <footer class="text-center">
        <p>Todos Direitos reservados à KAWENDASTUDIOS</p>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</body>

</html>