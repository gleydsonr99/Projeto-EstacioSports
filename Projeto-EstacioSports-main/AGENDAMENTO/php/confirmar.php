<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Confirmação</title>
    <!--- CSS link--->
    <link rel="stylesheet" href="../css/confirmar.css" />
  </head>
  <body>
    <section class="container">
      <!-- &#9786;  carinha   &#10157; seta  &#9989; certo verde  &#10003; certo sem o verde    -->
      <header> &#9989; Dados enviados com sucesso!</header>
     <div class="column">
        <button id="voltarBtn" class="center-button" >&#10157;Voltar para o ínicio </button>   
        <button class="center-button" onclick="javascript:window.location.href='../index.html'">Reservar novamente</button>
    </div>    
    </section>
    

    <script>
      // Função para redirecionar para o site ao clicar no botão
      function redirecionarParaInicio() {
        window.location.href = "https://websiteestacio.000webhostapp.com/";
      }

      // Adiciona um ouvinte de eventos para o botão
      var voltarBtn = document.getElementById("voltarBtn");
      voltarBtn.addEventListener("click", redirecionarParaInicio);
    </script>

  </body>
</html>