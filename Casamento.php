<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Festa de Casamento</title>
    <link rel="stylesheet" href="./assets/css/stylesform.css" />
</head>

<body>
    <div class="banner">
        <h1>Calculadora de doces</h1>
    </div>
    <form action="php_logica/retorno_festa_casamento.php">
        <div class="form-check">
            <h2>Quantos convidados</h2>
            <label for="casamento">Quantos convidados?</label>
            <input type="number" name="qtdConvidados" id="casamento" required />
        </div>

        <div class="form-check1">
            <h2>O que será servido?</h2>
            <input class="form-check-input" type="radio" name="comida" id="Radios1" value="option1" required />
            <label class="form-check-label" for="Radios1">Almoço</label>
        </div>
        <div class="form-check1">
            <input class="form-check-input" type="radio" name="comida" id="Radios2" value="option2" required />
            <label class="form-check-label" for="Radios2">Jantar</label>
        </div>
        <div class="form-check1">
            <input class="form-check-input" type="radio" name="comida" id="Radios3" value="option3" required />
            <label class="form-check-label" for="Radios3">Finger food</label>
        </div>

        <h2>Qual a duracão do evento?</h2>

        <div class="form-check2">
            <input class="form-check-input" type="radio" name="duracao" id="Radios1" value="option1" required />
            <label class="form-check-label" for="Radios1">4-6 horas</label>
        </div>
        <div class="form-check2">
            <input class="form-check-input" type="radio" name="duracao" id="Radios2" value="option2" required />
            <label class="form-check-label" for="Radios2">mais de 6 horas</label>
        </div>
        <div class="form-check2">
            <input class="form-check-input" type="radio" name="duracao" id="Radios3" value="option3" required />
            <label class="form-check-label" for="Radios3">mais de 10 horas</label>
        </div>

        <h2>Terá sobremesa?</h2>

        <div class="form-check3">
            <input class="form-check-input" type="radio" name="sobremesa" id="Radios1" value="option1" required />
            <label class="form-check-label" for="Radios1">Sim</label>
        </div>
        <div class="form-check3">
            <input class="form-check-input" type="radio" name="sobremesa" id="Radios2" value="option2" required />
            <label class="form-check-label" for="Radios2">Não</label>
        </div>

        <h2>Terá bebida alcoolica?</h2>

        <div class="form-check4">
            <input class="form-check-input" type="radio" name="bebida" id="Radios1" value="option1" required />
            <label class="form-check-label" for="Radios1">Sim</label>
        </div>
        <div class="form-check4">
            <input class="form-check-input" type="radio" name="bebida" id="Radios2" value="option2" required />
            <label class="form-check-label" for="Radios2">Não</label>
        </div>

        <h2>Qual sua preferência de sabores?</h2>

        <div class="form-check5">
            <input class="form-check-input" type="radio" name="sabores" id="Radios1" value="option1" required />
            <label class="form-check-label" for="Radios1">Prefiro os mais tradicionais
            </label>
        </div>

        <div class="form-check5">
            <input class="form-check-input" type="radio" name="sabores" id="Radios2" value="option2" required />
            <label class="form-check-label" for="Radios2">Gosto de sabores diferentes</label>
        </div>

        <div class="form-check5">
            <input class="form-check-input" type="radio" name="sabores" id="Radios2" value="option2" required />
            <label class="form-check-label" for="Radios2">Gosto de ambos </label>
        </div>


        <h2>Qual a média de idade dos convidados?</h2>

        <div class="form-check6">
            <input class="form-check-input" type="radio" name="convidados" id="Radios1" value="option1" required />
            <label class="form-check-label" for="Radios1">Maioria entre 18 e 40 anos</label>
        </div>

        <div class="form-check6">
            <input class="form-check-input" type="radio" name="convidados" id="Radios2" value="option2" required />
            <label class="form-check-label" for="Radios2">Maioria acima de 40 anos</label>
        </div>

        <h2>Terá lanche da madrugada?</h2>

        <div class="form-check7">
            <input class="form-check-input" type="radio" name="lanche" id="Radios1" value="option1" required />
            <label class="form-check-label" for="Radios1">Sim</label>
        </div>
        <div class="form-check7">
            <input class="form-check-input" type="radio" name="lanche" id="Radios2" value="option2" required />
            <label class="form-check-label" for="Radios2">Não</label>
        </div>


        <button type="submit">Calcular</button>
    </form>
</body>

</html>