<?php
    include "layouts/ex.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <main class="principal">
        <div class="content">
            <?php
                include("{$_GET['dir']}/{$_GET['file']}.php")
            ?>
        </div>
    </main>
</body>
</html>