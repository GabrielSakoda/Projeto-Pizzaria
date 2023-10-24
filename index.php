<?php
  include_once("templates/header.php");
  include_once("process/pizza.php");
?>

<!--Faremos o formulario e o banner-->
  <div id="main-banner">
    <h1>Faça seu Pedido</h1>

    <!--Aqui irá a foto-->
   
  </div>
  <!--Container principal-->
  <div id="main-container">
    <!--este Container tem as classes do bootstrap-->
    <div class="container">
      <div class="row">

        <div class="col-md-12">
          <!-- 12 colunas do grid o bootstrap é baseado em grid, então  a tela toda-->
          <h2>Monte a pizza como desejar:</h2>
          <!--criar o form form#pizza-form -->
     
          <form action="process/pizza.php" method="POST" id="pizza-form">

           <!--post envia os dados para o servidor-->

            
            
           <div class="form-group">
              <label for="borda">Borda:</label>
              <!-- select.form-control#borda  do boostrap - o name borda vamos resgatar do backend-->
              <select name="borda" id="borda" class="form-control">
              <!--O atributo `name` em elementos HTML, como `<input>`, `<select>`, e `<textarea>`, é usado para identificar o nome da variável quando os dados do formulário são enviados para o servidor.-->
                <option value="">Selecione a borda</option>
                <?php foreach($bordas as $borda): ?> 
                  <option value="<?= $borda["id_borda"] ?>"><?= $borda["tipo"] ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group">
              <label for="massa">Massa:</label>
              <select name="massa" id="massa" class="form-control">
                <option value="">Selecione a massa</option>
                <?php foreach($massas as $massa): ?>
                  <option value="<?= $massa["id_massa"] ?>"><?= $massa["tipo"] ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            
            <div class="form-group">
              <label for="sabores">Sabores: (Máximo 3)</label>
              <!-- esta parte do multiple fazer de inicio-->
              <select name="sabores[]" id="sabores" class="form-control" multiple >
                <!--Coomo enviará multiplos valores usará uma notação de array-->
               
                <?php foreach($sabores as $sabor): ?>
                  <option value="<?= $sabor["id_sabor"] ?>"><?= $sabor["nome"] ?></option>
                <?php endforeach; ?>
              </select> 
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary" value="Fazer Pedido!">
            </div>
          </form>
           
          <script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag/dist/js/multi-select-tag.js"> </script>

          <!--Chama a função e passa o id-->
          <script>
             new MultiSelectTag('sabores')  // id
          </script>
        </div>
      </div>
    </div>
  </div>
<?php
  include_once("templates/footer.php");
?>