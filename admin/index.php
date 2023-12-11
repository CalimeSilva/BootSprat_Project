<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Painel de Controlo</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <nav class="navbar navbar-inverse ">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">DAHSBOARD</a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul id="menu-principal" class="nav navbar-nav">
          <li class="active"><a ref_sys="sobre" href="#">Editar Sobre</a></li>
          <li><a ref_sys="cadastra_equpe" href="#about">Cadastrar Equipe</a></li>
          <li><a ref_sys="lista_equipe" href="#contact">Listar Equipe</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="?sair">Sair!</a> </li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>
  <header id="header">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <h2><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Painel de Controlo</h2>
        </div>
        <div class="col-md-3">
          <p>Seu último login foi em: 24/11/2023</p>
        </div>
      </div>
    </div>
  </header>
  <section class="bread">
    <div class="container">
      <ol class="breadcrumb">
        <li class="active">Home</li>
      </ol>
    </div>
  </section>
  <section class="principal">

    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="list-group">
            <a href="#" class="list-group-item active cor-padrao" ref_sys="sobre">
              <span class="glyphicon glyphicon-file "></span> Sobre
            </a>
            <a href="#" class="list-group-item" ref_sys="cadastra_equpe">
              <span class="glyphicon glyphicon-plus-sign"></span> Cadastrar Equipe <span class="badge">2</span>
            </a>
            <a href="#" class="list-group-item " ref_sys="lista_equipe">
              <span class="glyphicon glyphicon-th-list"></span> Listar Equipe
            </a>
          </div>

        </div>
        <div class="col-md-9">
          <div id="sobre_section" class="panel panel-default">
            <div class="panel-heading cor-padrao" <h3 class="panel-title">Sobre</h3>
            </div>
            <div class="panel-body">
              <form action="">
                <div class="form-group">
                  <label for="email">Codigo HTML:</label>
                  <textarea style="resize: vertical;" class="form-control" name="
                  " id="" cols="30" rows="10"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
          <div id="cadastra_equpe_section" class="panel panel-default">
            <div class="panel-heading cor-padrao">
              <h3 class="panel-title">Cadastro Equipe</h3>
            </div>
            <div class="panel-body">
              <form action="">
                <div class="form-group">
                  <label for="email">Nome do Membro:</label>
                  <input type="text" name="nome" class="form-control">
                </div>
                <div class="form-group">
                  <label for="email">Descrição do Membro:</label>
                  <textarea style="resize: vertical;" class="form-control" name="
                  " id="" cols="30" rows="10"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
          <div id="lista_equipe_section" class="panel panel-default">
            <div class="panel-heading cor-padrao">
              <h3 class="panel-title">Membros da Equipe</h3>
            </div>
            <div class="panel-body">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>ID:</th>
                    <th>Nome do Membro</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  for ($i = 0; $i < 5; $i++) {
                  ?>
                    <tr>
                      <td>1</td>
                      <td>Calime Silva</td>
                      <td class="delete-equipe"><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
                    </tr>
                  <?php } ?>

                </tbody>
              </table>

            </div>

          </div>
        </div>
      </div>
    </div>
  </section>


  <script src="../admin/js/bootstrap.min.js"></script>
  <script src="../admin/js/bootstrap.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
  <script type="text/javascript">
    $(function() {
      cliqueMenu();
      scrollItem()
      function cliqueMenu() {
        $('#menu-principal a, .list-group a').click(function() {
          $('.list-group a').removeClass('active').removeClass('cor-padrao')
          $('#menu-principal a').parent().removeClass('active');
          console.log('#menu-principal a[ref_sys='+$(this).attr('ref_sys')+']');
          $('#menu-principal a[ref_sys='+$(this).attr('ref_sys')+']').parent().addClass('active')
          $('.list-group a[ref_sys='+$(this).attr('ref_sys')+']').addClass('active').addClass('cor-padrao')
          return false;
        })
      }
      function scrollItem(){
        $('#menu-principal a, .list-group a').click(function(){
          var ref='#'+$(this).attr('ref_sys')+'_section';
         var offset=$(ref).offset().top
         $('html,body').animate({'scrollTop':offset-50})
        })
      }
    })
  </script>
</body>

</html>