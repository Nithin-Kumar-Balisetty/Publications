<?php
    if(isset($_POST)){
        echo $_POST["smalsmal"];
    }
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
<?php
  $link="../ip/Research/publications.php";
    echo "<a href='$link'>Redirect to publications page</a>";
    echo "<script>var temp=0;</script>";
?>
<script>
    <?php
    echo "console.log('mass ra mowa');";?>
</script>
<form action="../ip/index.php" method="POST">
    <select name="id" id="select">
        
    </select>
    <button type="submit">Click</button>
</form>
</body>
</html>