<?php
    include_once("templates/header.php");
    //include_once("process/pizza.php");
?>

<!-- Faremos o formulario e o banner -->
    <div id="main-banner">
        <h1>Faça seu Pedido</h1>

        <!--Aqui irá a foto-->
    </div>
    <!--Container principal-->
    <div id="main-container">
        <div class="container">
            <div class="row">
                <div class="cold-md-12">
                    <h2>Monte a pizza como desejar:</h2>
                    <form action="process/pizza.php" method="POST" id="pizza-form">
                        <!-- Post envia os dados para o servidor-->
                        <div class="form-group">
                            <label for="borda">Borda</label>
                            <select name="borda" id="borda" class="form-control">
                                <option value="">Selecione a borda</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="massa">Massa:</label>

                            <select name="massa" id="massa" class="form-control">
                                <option value="">Selecione a massa</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="sabores">Sabores: (Máximo 3)</label>
                            <select multiple name="sabores[]" id="sabores" class="form-control">
                            <!-- Como enviará multiplos valores, usará uma notação de array -->
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Fazer Pedido!">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php
include_once "templates/footer.php"
?>