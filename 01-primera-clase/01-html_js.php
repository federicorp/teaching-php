<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
<h1><?php echo "Hola Mundo"; ?></h1>

<?php echo "2025"; ?>

<div id="muestra"></div>

<script>
    // Aquí puedes escribir código JavaScript
    let texto = "<?php echo "Desde JS y PHP"; ?>";

    document.getElementById("muestra").innerHTML = texto;
</script>
</body>
</html>