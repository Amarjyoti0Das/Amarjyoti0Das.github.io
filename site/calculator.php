<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <style type="text/css">
        div{
            display: flex;
            place-content: center;
            margin-top: 3em;
        }
        tr{
            display: flex;
            flex-wrap: wrap;
            place-content: center;
        }
        td{
            border: 1px solid black;
            text-align: center;
            margin: 0.3em;
        }
        input,select{
            appearance: none;
            max-width: 10em;
            min-width: 3em;
            border: none;
            outline: none;
            text-align: center;
            font-size: 1.5em;
            background-color: transparent;
        }
        </style>
</head>
<body>
<?php
    if(isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['op'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $op = $_POST['op'];
            switch($op){
                case "?":
                    $ans = "?";
                    break;
                case "+":
                    $ans = $num1 + $num2;
                    break;
                case "-":
                    $ans = $num1 - $num2;
                    break;
                case "*":
                    $ans = $num1 * $num2;
                    break;
                case "/":
                    $ans = $num1 / $num2;
                    break;
            }
            $out = $ans;
    }
    ?>
    <div>
        <form action = "<?php $_PHP_SELF ?>" method = "POST">
            <table>
                <tr>
                    <div><td>
                        <input type="text" name="num1" id="num1" value="<?php echo isset ($num1) ? $num1 : ''; ?>"/>
                    </td></div>
                    <div><td>
                        <select name="op" id="op"/>
                            <option value="?">?</option>
                            <option value="+" <?php if($op=="+") echo 'selected="Selected"' ?> >+</option>
                            <option value="-" <?php if($op=="-") echo 'selected="Selected"' ?> >-</option>
                            <option value="*" <?php if($op=="*") echo 'selected="Selected"' ?> >*</option>
                            <option value="/" <?php if($op=="/") echo 'selected="Selected"' ?> >/</option>
                        </select>
                    </td></div>
                    <div><td>
                        <input type="text" name="num2" id="num2" value="<?php echo isset ($num2) ? $num2 : ''; ?>"/>
                    </td></div>
                    <div><td><input type="submit" name="sub" id="sub" value="="/></td></div>
                    <div><td><input type="none" name="ans" id="ans" value="<?php echo isset ($out) ? $out : ''; ?>" readonly/></td></div>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>