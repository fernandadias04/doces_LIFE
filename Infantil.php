<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Aniversário infantil</title>
    <link rel="stylesheet" href="./assets/css/stylesform.css" />
  </head>
  <body>

    <h1>Calculadora de doces</h1>

    <form action="calculoDoces.php">
      <h2>Quantos convidados</h2>
      <div class="form-check">
        <label for="casamento">Quantos convidados?</label>
        <input type="number" nome="qtdConvidados" id="casamento" required/>
      </div>

      <h2>O que será servido?</h2>
      <div class="form-check1">
        <input
          class="form-check-input"
          type="radio"
          name="comida"
          id="Radios1"
          value="option1"
          required
        />
        <label class="form-check-label" for="Radios1">Almoço</label>
      </div>
      <div class="form-check1">
        <input
          class="form-check-input"
          type="radio"
          name="comida"
          id="Radios2"
          value="option2"
          required
        />
        <label class="form-check-label" for="Radios2">Café</label>
      </div>

      <h2>Qual a duração do evento?</h2>

      <div class="form-check2">
        <input
          class="form-check-input"
          type="radio"
          name="duracao"
          id="Radios1"
          value="option1"
          required
        />
        <label class="form-check-label" for="Radios1">Cerca de 3 horas</label>
      </div>
      <div class="form-check2">
        <input
          class="form-check-input"
          type="radio"
          name="duracao"
          id="Radios2"
          value="option2"
          required
        />
        <label class="form-check-label" for="Radios2">mais de 3 horas</label>
      </div>
      <div class="form-check2">
        <input
          class="form-check-input"
          type="radio"
          name="duracao"
          id="Radios3"
          value="option3"
          required
        />
        <label class="form-check-label" for="Radios3">mais de 5 horas</label>
      </div>

      <h2>Terá outras opções de doces?(Tortas, doces personalizados, etc)</h2>

      <div class="form-check3">
        <input
          class="form-check-input"
          type="radio"
          name="sobremesa"
          id="Radios1"
          value="option1"
          required
        />
        <label class="form-check-label" for="Radios1">Sim</label>
      </div>
      <div class="form-check3">
        <input
          class="form-check-input"
          type="radio"
          name="sobremesa"
          id="Radios2"
          value="option2"
          required
        />
        <label class="form-check-label" for="Radios2">Não</label>
      </div>

      <h2>Terá bebida alcoolica?</h2>

      <div class="form-check4">
        <input
          class="form-check-input"
          type="radio"
          name="bebida"
          id="Radios1"
          value="option1"
          required
        />
        <label class="form-check-label" for="Radios1">Sim</label>
      </div>
      <div class="form-check4">
        <input
          class="form-check-input"
          type="radio"
          name="bebida"
          id="Radios2"
          value="option2"
          required
        />
        <label class="form-check-label" for="Radios2">Não</label>
      </div>

      <h2>Quanto aos sabores</h2>

      <div class="form-check5">
        <input
          class="form-check-input"
          type="radio"
          name="sabores"
          id="Radios1"
          value="option1"
          required
        />
        <label class="form-check-label" for="Radios1">
            Maior parte criancas
        </label>

        <img src="#" />
        <img src="#" />

      </div>
      <div class="form-check5">
        <input
          class="form-check-input"
          type="radio"
          name="sabores"
          id="Radios2"
          value="option2"
          required
        />
        <label class="form-check-label" for="Radios2">
            Maior parte adultos
            </label>
        <img src="#" />
        <img src="#" />

      </div>
      <div class="form-check5">
        <input
          class="form-check-input"
          type="radio"
          name="sabores"
          id="Radios2"
          value="option2"
          required
        />
        <label class="form-check-label" for="Radios2">
            Criancas e adultos em quantidade similar 
        </label>
        <img src="#" />
        <img src="#" />
      </div>

      <h2>Como será a decoração?</h2>

      <div class="form-check6">
        <input
          class="form-check-input"
          type="radio"
          name="decoração"
          id="Radios1"
          value="option1"
          required
        />
        <label class="form-check-label" for="Radios1"
          >Clássica, Peças em prata, flores brancas</label
        >

        <img src="#" />
        <img src="#" />
      </div>
      <div class="form-check6">
        <input
          class="form-check-input"
          type="radio"
          name="decoração"
          id="Radios2"
          value="option2"
          required
        />
        <label class="form-check-label" for="Radios2"
          >Clássica com dourado, flores em tons de rosa</label
        >
        <img src="#" />
        <img src="#" />
      </div>

      <div class="form-check6">
        <input
          class="form-check-input"
          type="radio"
          name="decoração"
          id="Radios2"
          value="option2"
          required
        />
        <label class="form-check-label" for="Radios2"
          >Rústico/Boho, Decoração com madeira, flores coloridas
        </label>
        <img src="#" />
        <img src="#" />
      </div>

      <div class="form-check6">
        <input
          class="form-check-input"
          type="radio"
          name="decoração"
          id="Radios2"
          value="option2"
          required
        />
        <label class="form-check-label" for="Radios2">Romantico</label>
        <img src="#" />
        <img src="#" />
      </div>

      <h2>Como são os convidados?</h2>

      <div class="form-check7">
        <input
          class="form-check-input"
          type="radio"
          name="convidados"
          id="Radios1"
          value="option1"
          required
        />
        <label class="form-check-label" for="Radios1"
          >Maioria entre 18 e 40 anos</label
        >

        <img src="#" />
        <img src="#" />
      </div>
      <div class="form-check7">
        <input
          class="form-check-input"
          type="radio"
          name="convidados"
          id="Radios2"
          value="option2"
          required
        />
        <label class="form-check-label" for="Radios2"
          >Maioria acima de 40 anos</label
        >
        <img src="#" />
        <img src="#" />
      </div>

      <button type="submit">Calcular</button>
    </form>
  </body>
</html>