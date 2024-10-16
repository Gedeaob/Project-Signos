<?php include('layouts/header.php'); ?>

<?php
$data_nascimento = $_POST['data_nascimento'];
$signos = simplexml_load_file('signos.xml');
$mes_dia_nascimento = date('d/m', strtotime($data_nascimento));
foreach ($signos->signo as $signo) {
    $dataInicio = DateTime::createFromFormat('d/m', (string) $signo->dataInicio); 
    $dataFim = DateTime::createFromFormat('d/m', (string) $signo->dataFim);
    $nascimento = DateTime::createFromFormat('d/m', $mes_dia_nascimento);
    if ($nascimento >= $dataInicio && $nascimento <= $dataFim) {
        $signoNome = $signo->signoNome;
        $descricao = $signo->descricao;
        break;
    }
}
?>
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
        <center><h2>MELHOR ACREDITAR EM ALGO DO QUE PASSA A VIDA SEM ACREDITAR.</h2></center>
        <center><h3>"Vinícius T. Parente"</h3></center>
<div class="container mt-5" id="signo-result">
    <?php if(isset($signoNome)): ?>
        <h1>Seu Signo é: <?php echo $signoNome; ?></h1>
        <h5><p><?php echo $descricao; ?></p></h5>
    <?php else: ?>
        <h1>Data de nascimento inválida!</h1>
    <?php endif; ?>
    <div class="text-center mt-4">
        <a href="index.php" class="btn-secondary">Voltar</a>
    </div>
   </div>
<footer>
    <p>Desenvolvido por Gedeão Batista Machado, aluno da UNOPAR.</p>
    <p>SUPERIOR DE TECNOLOGIA EM ANÁLISE E DESENVOLVIMENTO DE SISTEMAS</p>
    <p>RA: 3676003503</p>
  </footer>
 </body>
</html>
