<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fase 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">
 <!-- <form name="myForm" action="verify.php" method="POST">

    <h3> A pergunta do dia é: baby baby do baby do biruleibe leibe? </h3>
        
      <button type="submit"  value="ohmaga" class="btn btn-primary btn-lg" name= "res1">Resposta01</button>
      <button type="submit" class="btn btn-secondary btn-lg">Large button</button>
      <br><br>
      <button type="submit" class="btn btn-primary btn-lg">Large button</button>
      <button type="submit" class="btn btn-secondary btn-lg">Large button</button>
      </form>-->

      <form name="myForm" action="verify.php" method="POST">
      <label id="icon" for="resultado">Abastecimento feito pelo(a)</label><br>
          <div id="radio-container">
            <input type="radio" value="ohmaga" id="res" name="res1"  />
            <label for="res" class="radio">ohmaga</label>
            <input type="radio" value="Cliente" id="res2" name="res1" />
            <label for="Cliente" class="radio">Cliente</label>
          </div>
          <div class="btn-block">
          <button type="submit" class="DownButton" href="verify.php" value="1" name="id">Enviar</button>
        </div>
        </form>
</div>
</body>
</html>