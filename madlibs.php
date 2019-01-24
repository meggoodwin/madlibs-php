<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Site</title>
</head>
<body>

    <form action="site.php" method="get">
        Name: <input type="text" name="name">
        <br>
        Feeling: <input type="text" name="feeling">
        <br>
        Adjective: <input type="text" name="adjective">
        <br>
        Programming Language: <input type="text" name="programmingLanguage">
        <input type="submit">
    </form>

    <?php 
        $name = $_GET["name"];
        $feeliing = $_GET["feeling"];
        $adjective = $_GET["adjective"];
        $programmingLanguage = $_GET["programmingLanguage"];
        echo "There once was a programming student named $name. Programming made $name feel very $feeliing. $name decided to build a/an $adjective app in $programmingLanguage.";
    ?>

</body>
</html>