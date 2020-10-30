<?php
require 'src/controllers/cellphoneController.php';
$cellphoneObj = new Cellphone();
$id = $_GET['id'];
$cellphone = $cellphoneObj->getSingleCellphone($id);
if(isset($_POST['submit'])) {
    $idEdit = $_GET['idEdit'];
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
    $cellphoneParams = [
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
    $cellphoneObj->editCellphone($cellphoneParams, $idEdit);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
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
        <form action="edit.php?idEdit=<?=$id?>&id=<?=$id?>" method="POST" class="form">
                <div class="column-wrapper">
                    <div class="input-block">
                        <label for="brand">Marca</label>
                        <input type="text" id="brand" value="<?= $cellphone['brand'] ?>">
                    </div>
                    <div class="input-block">
                        <label for="model">Modelo</label>
                        <input type="text" id="model" value="<?= $cellphone['model'] ?>">
                    </div>
                    <div class="input-block">
                        <label for="cameraQuantity">Quantidade de câmeras</label>
                        <input type="text" id="cameraQuantity" value="<?= $cellphone['cameraQuantity'] ?>">
                    </div>
                    <div class="input-block">
                        <label for="ram">Memória ram</label>
                        <input type="text" id="ram" value="<?= $cellphone['ram'] ?>">
                    </div>
                    <div class="input-block">
                        <label for="rom">Armazenamento</label>
                        <input type="text" id="rom" value="<?= $cellphone['rom'] ?>">
                    </div>
                    <div class="input-block">
                        <label for="fingerPrintSensor">Sensor biométrico</label>
                        <input type="text" id="fingerPrintSensor" value="<?= $cellphone['fingerPrintSensor'] ?>">
                    </div>
                </div>
                <div class="column-wrapper">
                    <div class="input-block">
                        <label for="cpuCores">Núcleos de processamento</label>
                        <input type="text" id="cpuCores" value="<?= $cellphone['cpuCores'] ?>">
                    </div>
                    <div class="input-block">
                        <label for="chargerType">Tipo de carregador</label>
                        <input type="text" id="chargerType" value="<?= $cellphone['chargerType'] ?>">
                    </div>
                    <div class="input-block">
                        <label for="frontalFlash">Flash frontal</label>
                        <input type="text" id="frontalFlash" value="<?= $cellphone['frontalFlash'] ?>">
                    </div>
                    <div class="input-block">
                        <label for="price">Preço</label>
                        <input type="text" id="price" value="<?= $cellphone['price'] ?>">
                    </div>
                    <div class="input-block">
                        <label for="imageUrl">Url da imagem</label>
                        <input type="text" id="imageUrl" value="<?= $cellphone['imageUrl'] ?>">
                    </div>
                    <div class="input-block buttons">
                        <a href="index.php"><i class="fas fa-angle-left"></i></a>
                        <input type="submit" value="Editar">
                    </div>
                </div>
        </form>
    </main>
</body>
</html>