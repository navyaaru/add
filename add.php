<!DOCTYPE html>
<html lang="en">
<head><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="GET">
        <table class="table">
            <tr>
                <td>
                    number 1
                </td>
                <td>
                    <input type="text" class="form-control" name="number1">
                    </td>
            </tr>
            <tr>
                <td>
                    number 2
                </td>
                <td>
                <input type="text" class="form-control" name="number2">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                <input type="submit" value="add" class="btn btn-success" name="cadd">
                </td>
                </tr>
        </table>
    </form>
    
</body>

</html>
<?php
if(isset($_GET["cadd"]))
{
    $number1=$_GET["number1"];
    $number2=$_GET["number2"];
    $cname=$number1+$number2;
    echo $cname;
}
?>