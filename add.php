<?php
require 'src/controllers/cellphoneController.php';
if(isset($_POST['submit'])) {
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $cameraQuantity = $_POST['cameraQuantity'];
    $ram = $_POST['ram'];
    $rom = $_POST['rom'];
    $fingerPrintSensor = $_POST['fingerPrintSensor'];
    $cpuCores = $_POST['cpuCores'];
    $chargerType = $_POST['chargerType'];
    $frontalFlash = $_POST['frontalFlash'];
    $price = $_POST['price'];
    $imageUrl = $_POST['imageUrl'];
    $cellphone = [
        $brand,
        $model,
        $cameraQuantity,
        $ram,
        $rom,
        $fingerPrintSensor,
        $cpuCores,
        $chargerType,
        $frontalFlash,
        $price,
        $imageUrl
    ];
    $cellphoneObj = new Cellphone();
    $cellphoneObj->addCellphone($cellphone);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/styles/edit.css">
    <link rel="stylesheet" href="public/styles/global.css">
    <script src="https://kit.fontawesome.com/cc47d625d7.js" crossorigin="anonymous"></script>
    <title>Editar registro</title>
</head>
<body>
    <main class="main">
        <h1>Editar</h1>
        <form action="" method="POST" class="form">
                <div class="column-wrapper">
                    <div class="input-block">
                        <label for="brand">Marca</label>
                        <input type="text" id="brand" name="brand" placeholder="Marca do celular">
                    </div>
                    <div class="input-block">
                        <label for="model">Modelo</label>
                        <input type="text" id="model" name="model" placeholder="Modelo do celular">
                    </div>
                    <div class="input-block">
                        <label for="cameraQuantity">Quantidade de câmeras</label>
                        <input type="text" id="cameraQuantity" name="cameraQuantity" placeholder="Selecione a quantidade de câmeras">
                    </div>
                    <div class="input-block">
                        <label for="ram">Memória ram</label>
                        <input type="text" id="ram" name="ram" placeholder="Quantidade de Ram">
                    </div>
                    <div class="input-block">
                        <label for="rom">Armazenamento</label>
                        <input type="text" id="rom" name="rom" placeholder="Capacidade da Rom">
                    </div>
                    <div class="input-block">
                        <label for="fingerPrintSensor">Sensor biométrico</label>
                        <input type="text" id="fingerPrintSensor" name="fingerPrintSensor" placeholder="Escreva 'sim' ou 'não'">
                    </div>
                </div>
                <div class="column-wrapper">
                    <div class="input-block">
                        <label for="cpuCores">Núcleos de processamento</label>
                        <input type="text" id="cpuCores" name="cpuCores" placeholder="Quantidade de cores">
                    </div>
                    <div class="input-block">
                        <label for="chargerType">Tipo de carregador</label>
                        <input type="text" id="chargerType" name="chargerType" placeholder="Escreva o tipo de carregador">
                    </div>
                    <div class="input-block">
                        <label for="frontalFlash">Flash frontal</label>
                        <input type="text" id="frontalFlash" name="frontalFlash" placeholder="Escreva 'sim' ou 'não'">
                    </div>
                    <div class="input-block">
                        <label for="price">Preço</label>
                        <input type="text" id="price" name="price" placeholder="Preço do celular em R$">
                    </div>
                    <div class="input-block">
                        <label for="imageUrl">Url da imagem</label>
                        <input type="text" id="imageUrl" name="imageUrl" placeholder="Copie e cole a url da imagem aqui">
                    </div>
                    <div class="input-block buttons">
                        <a href="index.php"><i class="fas fa-angle-left"></i></a>
                        <input type="submit" name="submit" value="Adicionar">
                    </div>
                </div>
        </form>
    </main>
</body>
</html>