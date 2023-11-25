<?php
# https://www.php.net/manual/pt_BR/features.file-upload.php
# https://www.php.net/manual/pt_BR/reserved.variables.files.php

const UPLOAD_DIR = "img/";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['file'])) {
        $tmp = $_FILES['file']['tmp_name'];
        $type = explode('.', $_FILES['file']['name'])[1];
        $filename = uniqid("", true) . '.'. $type;
        $filenamewithpath = UPLOAD_DIR . $filename;
        $success = move_uploaded_file($tmp, $filenamewithpath);
        if ($success) {
            $image = UPLOAD_DIR. $filename;
        }
    }
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/artista.css">
    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../assets/pesquisar.css">
    <link rel="shortcut icon" href="../pag2/img/disco-de-vinil.png" type="image/x-icon">
    <link rel="stylesheet" href="../assets/style.css">

    <title>Pop World</title>
</head>

<body>
<div class="app2">
       <header>
           <a href="../index.html" ><img src="../assets/logo mic.png" width="10px" height="10px" alt=""></a>
       
       <ul class="nav">
           <li>
          <a href="../index.html" class="nav-link">Inicio</a>
           </li>
           
       
           <li>
              <a href="../login.html" class="nav-link">login</a>
          </li>
          
       </ul>
    
    
       
    </div>
</div>
</header>
<br>
<br>
<br>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file" accept="image/png, image/jpeg" required autofocus>
        <button type="submit">Enviar</button>
    </form>
    <?php if (isset($image)) : ?>
        <img src="<?= $image ?>" alt="imagem de teste" width="400px">
    <?php endif ?>
   

</body>

</html>