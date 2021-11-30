<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Aniversário adulto</title>
    <link rel="stylesheet" href="./assets/css/styleform.css" />
     <link rel="shortcut icon" type="image/png" href="./assets/img/logo.png">
</head>

<body>
    <div class="banner">
        <h1>Calculadora de doces</h1>
        </div>
        <form action="php_logica/retorno_festa_adulto.php">
            <h2>Quantos convidados</h2>
            <div class="form-check">
                <label for="casamento">Quantos convidados?</label>
                <input type="number" name="qtdConvidados" id="adulto" />
            </div>

            <h2>O que será servido?</h2>
            <div class="form-check1">
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
            <div class="form-check1">
                <input class="form-check-input" type="radio" name="comida" id="Radios4" value="option5" required />
                <label class="form-check-label" for="Radios4">Café da tarde</label>
            </div>

            <h2>O evento terá festa depois?</h2>

            <div class="form-check2">
                <input class="form-check-input" type="radio" name="duracao" id="Radios1" value="option1" required />
                <label class="form-check-label" for="Radios1">Sim, com música e duração de mais de 5 horas </label>
            </div>
            <div class="form-check2">
                <input class="form-check-input" type="radio" name="duração" id="Radios2" value="option2" required />
                <label class="form-check-label" for="Radios2">Não, somente almoço/jantar e doces + bolo</label>
            </div>

            <div class="form-check2">
                <input class="form-check-input" type="radio" name="duração" id="Radios3" value="option3" required />
                <label class="form-check-label" for="Radios3">Café da tarde</label>
            </div>

            <h2>Terá mais opões de doces? (Tortas, sobremesas... )</h2>

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
            <div class="form-check4">
                <input class="form-check-input" type="radio" name="bebida" id="Radios3" value="option3" required />
                <label class="form-check-label" for="Radios3">Será café da tarde </label>
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
                <input class="form-check-input" type="radio" name="sabores" id="Radios2" value="option3" required />
                <label class="form-check-label" for="Radios2">Gosto de ambos </label>
            </div>

            <h2>Qual a média de idade dos convidados?</h2>

            <div class="form-check7">
                <input class="form-check-input" type="radio" name="convidados" id="Radios1" value="option1" required />
                <label class="form-check-label" for="Radios1">Maioria entre 18 e 40 anos</label>

            </div>
            <div class="form-check7">
                <input class="form-check-input" type="radio" name="convidados" id="Radios2" value="option2" required />
                <label class="form-check-label" for="Radios2">Maioria acima de 40 anos</label>
          
            </div>

            <button type="submit">Calcular</button>
        </form>
    
</body>

</html>