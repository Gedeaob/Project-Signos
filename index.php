<?php include('layouts/header.php'); ?>


<center><h1>Descubra seu Signo Zodiacal</h1></center>  

<div class="container">
        <form method="POST" action="show_zodiac_sign.php">
        <div class="mb-3">
        <label for="data_nascimento">Insira sua Data de Nascimento</label>
            <h4><center><input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required></center></h4>

        </div>

         <button type="submit" class="btn btn-primary">Consultar Signo</button> 

    </form>
    
   </div>

<footer>
    <p>Desenvolvido por Gedeão Batista Machado, aluno da UNOPAR.</p>
    <p>SUPERIOR DE TECNOLOGIA EM ANÁLISE E DESENVOLVIMENTO DE SISTEMAS</p>
    <p>RA: 3676003503</p>
</footer>
   <style>
        body {
            background-image: url("assets/imgs/imagem1.jpg"); 
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            margin: 0;
        }
    </style>
   </body>
  </html>
