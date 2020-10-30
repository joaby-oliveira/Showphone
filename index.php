<?php
require 'src/controllers/cellphoneController.php';
$cellphoneObj = new Cellphone();
$cellphones = $cellphoneObj->getCellphones();
if(isset($_GET['q'])) {
    $id = $_GET['id'];
    if($_GET['q'] == "edit") {
        header("Location: edit.php?id=$id");
    }else if($_GET['q'] == "delete") {
        $cellphoneObj->deleteCellphone($id);
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celulares</title>
    <link rel="stylesheet" href="public/styles/index.css">
    <link rel="stylesheet" href="public/styles/global.css">
    <script src="https://kit.fontawesome.com/cc47d625d7.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav>
        <header>
            <h1>Showphone</h1>
            <form action="" method="GET">
                <input type="search" name="search" placeholder="Pesquisar por modelo"><button type="submit"><i class="fas fa-search"></i></button>
            </form>
            <ul>
                <li><a href="add.php">Adicionar celular <i class="fas fa-plus-circle"></i></a></li>
            </ul>
        </header>
    </nav>
    <main class="main">
    <?php foreach($cellphones as $cellphone): ?>
        <div class="cellphone">
            <h2> <?= $cellphone['brand'] ?> </h2>
            <h3> <?= $cellphone['model'] ?> </h3>
            <img src="<?= $cellphone['imageUrl'] ?>" alt="" srcset="">
            <p class="price">R$ <?= number_format($cellphone['price'],2,",","."); ?> </p>
            <div class="details hide">
                <p><span class="title"> Câmeras: </span> <?= $cellphone['cameraQuantity'] ?> </p>
                <p><span class="title"> Memória ram: </span> <?= $cellphone['ram'] ?> Gb </p>
                <p><span class="title"> Armazenamento: </span><?= $cellphone['rom'] ?> Gb </p>
                <p><span class="title"> Sensor de digitais: </span><?= $cellphone['fingerPrintSensor'] ?> </p>
                <p><span class="title"> Núcleos do processador: </span><?= $cellphone['cpuCores'] ?> </p>
                <p><span class="title"> Carregamento: </span><?= $cellphone['chargerType'] ?> </p>
                <p><span class="title"> Flash frontal: </span><?= $cellphone['frontalFlash'] ?> </p>
            </div>
            <p class="details-text hide-text">Clique para ver detalhes</p>
            <span class="icons">
                <a href="?q=edit&id=<?= $cellphone['id'] ?>">
                    <i class="fas fa-pen"></i>
                </a>
                <a href="?q=delete&id=<?= $cellphone['id'] ?>">
                    <i class="fas fa-trash"></i>
                </a>
            </span>
        </div>
    <?php endforeach ?>
    </main>
    <script defer>
        const cellphones = document.querySelectorAll('.main .cellphone');
        const details = document.querySelectorAll('.hide');
        const detailsText = document.querySelectorAll('.details-text');
        cellphones.forEach(((cellphone, index) => {
            cellphone.addEventListener('click', () => {
                if(details[index].classList.contains('hide')){
                    // Detalhes aparecendo
                    details[index].classList.remove('hide');
                    cellphone.style.borderTop = "4px solid #c3073f";

                }else {
                    // Detalhes sumindo
                    details[index].classList.add('hide');
                    cellphone.style.borderTop = "none";
                }
            })
        }))
       
    </script>
</body>
</html>