<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
 <!-- 
  *
  * Unime - União Metropolitana de Educação e Cultura Curso: Bacharelado em
  * Sistemas de Informação Disciplina: Programação Orientada a Objetos II
  * Professor(a): Pablo Ricardo Roxo Silva
  * Aluno(a): Jéssica Silva de Jesus
  *
  *-->

  <!-- Estilo css -->
  <style>
    body {
      background: rgb(238, 174, 202);
      background: radial-gradient(circle, rgba(238, 174, 202, 1) 0%, rgba(148, 187, 233, 1) 100%);

    }

    .card {
      margin-top: 150px;
      margin-left: 280px;
      box-shadow: 0 0 1em black;
    }

    .card-title {
      text-align: center;
    }

    input {
      height: 150px;
    }
  </style>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Calendario</title>
</head>

<body>

    <?php
    if (isset($_GET['form_calendario'])) {
        $numero = $_GET['numero'];
        $mes = $_GET['mes'];

        $mes = trim(strtolower($mes));

        $mesAno  = [
            "janeiro", "severeiro",
            "março", "abril",
            "maio", "junho",
            "julho", "agosto",
            "setembro", "outubro",
            "novembro", "dezembro"
        ];

        if(in_array($mes, $mesAno)){

            if ($mesAno[$numero - 1] === $mes) {
                echo '<div class="alert alert-success" role="alert"> Esse mês corresponde ao Número!</br></div>';
            } else {
                echo '<div class="alert alert-danger" role="alert"> Esse mês não existe!</br></div>';
            }
        } else {
            echo '<div class="alert alert-danger" role="alert"> Mês Inválido </br></div>';
        }

    }
    ?>

    <form>
    <div class="card" style="width: 50rem;">
    <div class="card-body">
      <h5 class="card-title">Caléndario</h5>

        <div >
            <label>Número:</label>
            <input type="number" class="form-control  mb-3" name="numero" min= max="12" placeholder="Digite a sua primeira nota">
        </div>
        <div >
            <label>Mês:</label>
            <input type="text" class="form-control  mb-3" name="mes" placeholder="Digite a sua primeira nota">
        </div>
        <input type="hidden" name="form_calendario" />
        <button type="submit" class="btn btn-danger">Verificar</button>
    </form>
</div>
</div>
</body>

</html>