<?php
//Base text
$text = "lorem ipsum dolor amet lorem ipsum dolor amet lorem ipsum dolor amet";
// Length text
$length = strlen($text);
// GET method
$badword = $_GET['badword'];
// Censure string
$replace_word = '***';
// Replace string text with (what part do you want to replace? , new string taking place of the 1st , which one of the string? )
$replace = str_replace($badword, $replace_word, $text);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>

<body>
        <h1> Starting word :
            <?php echo ucfirst($text);
            ?></h1>
        <h1> Starting word length :
            <?php echo $length;
            ?>
        </h1>
        <a href="http://localhost/php-badwords/?badword=lorem">CLICK ME FOR REPLACED WORD ("IN THIS CASE THE REPLACED WORD WILL BE" -Lorem-)</a>
        <h1> Replaced word :
            <?php echo $replace;
            ?>
        </h1>
        <h1> Replaced word length :
            <?php
            echo strlen($replace)
            ?>
        </h1>
</body>

</html>