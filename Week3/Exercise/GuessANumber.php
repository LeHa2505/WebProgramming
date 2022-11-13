<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="inputNumber">Enter a number</label><br>
        <input type="text" name="inputNumber">
        <br>
        <button type="submit">Submit</button>
    </form>

    <?php
        $inputNumber = $_POST["inputNumber"];
        $randNumber = rand(1, 100);
        if($inputNumber < $randNumber){
            print("<br>Wrong. Please try a higher number. You have guessed 1 time!");
        }
        elseif($inputNumber > $randNumber){
            print("<br>Wrong. Please try a lower number. You have guessed 1 time!");
        }
        else
        print("<br>Bingo!!!!!!!");
        
    ?>
</body>
</html>