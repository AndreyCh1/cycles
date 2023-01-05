<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <form method="post" action="index.php">
        <div class="wrapper">
            <p><button type="submit" name="options" value="1">Вариант 1</button></p>
            <p><button type="submit" name="options" value="2">Вариант 2</button></p>
            <p><button type="submit" name="options" value="3">Вариант 3</button></p>
            <table>
                <?php
                    for ($k = 5, $n = 6, $i = 1; $i <= 20; $n++, $i++) {
                        if ($k < 25 && $k != "-") {
                            $k+=5;
                        } else {
                            $k = "-";
                        }
                        echo ("<tr>");
                        if ($n%5 == 0) {
                            echo ("");
                        } else {
                            echo ("<td>Hello $k</td><td>Goodbye $n</td>");
                        }
                        echo ("</tr>");
                    }
                    // $a = intval($_POST["options"]);
                    // $b = ++$a;
                    // $c = ++$b;
                    // if ($_POST) {
                        //     switch ($b) {
                        //         case 1:
                            //             echo (1);
                            //         break;
                            //         case 2:
                                //             echo (2);
                                //         break;
                                //         case 3:
                                    //             echo (3);
                                    //         break;
                                    //         case 4:
                                        //             echo (4);
                                        //         break;
                                        //         case 5;
                                        //             echo (5);
                                        //         break;
                                        //     }
                                        // }
                ?>
            </table>
        </div>
    </form>
</body>