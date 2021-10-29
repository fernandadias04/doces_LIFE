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
    <h1>Calculadora de doces</h1>

    <form action="calculoDoces.php">
      <div class="form-check">
        <h2>Quantos convidados</h2>
        <label for="casamento">Quantos convidados?</label>
        <input type="number" nome="qtdConvidados" id="casamento" required />
      </div>

      <div class="form-check1">
        <h2>O que será servido?</h2>
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
        <label class="form-check-label" for="Radios2">Jantar</label>
      </div>
      <div class="form-check1">
        <input
          class="form-check-input"
          type="radio"
          name="comida"
          id="Radios3"
          value="option3"
          required
        />
        <label class="form-check-label" for="Radios3">Finger food</label>
      </div>

      <h2>Qual a duracão do evento?</h2>

      <div class="form-check2">
        <input
          class="form-check-input"
          type="radio"
          name="duracao"
          id="Radios1"
          value="option1"
          required
        />
        <label class="form-check-label" for="Radios1">4-6 horas</label>
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
        <label class="form-check-label" for="Radios2">mais de 6 horas</label>
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
        <label class="form-check-label" for="Radios3">mais de 10 horas</label>
      </div>

      <h2>Terá sobremesa?</h2>

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
        <label class="form-check-label" for="Radios1"
          >Prefiro os mais tradicionais
        </label>
      </div>

      <div class="imagens">
        <img src="./assets/img/docestradicionais1.jpeg" />
        <img src="./assets/img/docestradicionais2.jpeg" />
        <img src="./assets/img/docestradicionais3.jpeg" />
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
        <label class="form-check-label" for="Radios2"
          >Gosto de sabores diferentes</label
        >
      </div>
      <div class="imagens">
        <img src="./assets/img/docesdiferentes1.jpeg" />
        <img src="./assets/img/docesdiferentes2.jpeg" />
        <img src="./assets/img/docesdiferentes3.jpeg" />
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
        <label class="form-check-label" for="Radios2">Gosto de ambos </label>
      </div>

      <div class="imagens">
        <img src="./assets/img/ambos1.jpeg" />
        <img src="./assets/img/ambos2.jpeg" />
        <img src="./assets/img/ambos3.jpeg" />
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
      </div>
      <div class="imagens">
        <img src="./assets/img/decoração1.jpeg" />
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
      </div>
      <div class="imagens">
        <img src="./assets/img/decoração2.jpeg" />
       
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
      </div>
      <div class="imagens">
        <img src="./assets/img/decoração3.jpeg" />
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
      </div>
      <div class="imagens">
        <img src="./assets/img/decoração4.jpeg" />
  
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
      </div>

      <div class="imagens">
        <img src="./assets/img/convidado1.jpeg" />
        
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
      </div>

      <div class="imagens">
        <img src="./assets/img/convidado2.jpeg" />
        
      </div>

      <button type="submit">Calcular</button>
    </form>
  </body>
</html>
