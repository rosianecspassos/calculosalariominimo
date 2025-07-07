<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <title>Salários recebidos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body  class = "pt-2 pb-1">
    <?php
$sal_rec = $_GET['sal_rec'] ?? 0; 
$sal_min = $_GET['sal_min'] ?? 0; 
    ?>
    <div class = "container w-50 pt-4 pb-2"> 
     <h3 class = "border-bottom">Salário</h3>
     <form action="<?=$_SERVER['PHP_SELF']?>" method="get"> 
        <label>Quanto você ganha? </label> <br> 
        <input type="number" name="sal_rec" value="<?=$sal_rec?>" step="0.001"> <br> 
        <label>Valor do salário mínimimo</label> <br> 
        <input type="number" name="sal_min" value="<?=$sal_min?>" step="0.001"> 
        <br> 
               <input type="submit" class="btn btn-success mt-2 mb-4"> 
</form> 
<div class = "container"> 
    <?php 
$qtde_sal = floor($sal_rec / $sal_min); // Quantidade inteira de salários
$sobra = $sal_rec - ($qtde_sal * $sal_min); // Valor que sobra em reais

echo "Você ganha " . $qtde_sal . " salário(s) mínimos + R$ " . number_format($sobra, 2, ',', '.') . ".";
?>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>
