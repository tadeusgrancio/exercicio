<html
      
<head>
<meta charset="utf-8">
<lang="pt-br">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>Formulário Exercicio</title>    
  <style>
    input[type="submit"]{
      margin:4px 2px;
    }
  
  </style> 
</head>  
  <body >
    <div class=container style="width:500px;">
    <div class="jumbotron">
        <h3>Formulário de Cadastro</h3>
    </div>
    <hr>
      
    <form name="form1" id="form1" action="/auth/add" method="POST">
    
      <div class="form-group">
           <label for="nome">Nome:</label><br>
           <input type="text" name="nome" id="nome" class="form-control" placeholder="Digite seu nome"><br/>
      </div>
      
      <div class="form-group">
           <label for="email">Email:</label><br>
           <input type="email" name="email" id="email" class="form-control" placeholder="Digite seu email"><br/>
      </div>
      
      <div class="form-group">
           <label for="password">Password:</label><br>
           <input type="password" name="password" id="password" class="form-control" placeholder="Digite uma senha">
      </div>
      <div class="form-group">
           <label for="sexo">Sexo:</label><br>
           <input type="radio" name="sexo" value="M"> Masculino <br>
           <input type="radio" name="sexo" value="F"> Feminino<br>
      </div>
          
      <input type="checkbox" name="termo" id="termo" onchange="verifica(this);" > Li e aceito os termos e condições do contrato<br><br>
      
      <input type="submit" name="enviar" id="enviar" class="btn btn-success" value="Enviar" ></input>
      
      
      
    </form>
    </div>
  </body>
</html>
<script>
    
    document.getElementById('enviar').disabled = true;
    
    function verifica(aceitou) {
      if (aceitou.checked)
        document.getElementById('enviar').disabled = false;
      else
        document.getElementById('enviar').disabled = true;
    }
  </script>
