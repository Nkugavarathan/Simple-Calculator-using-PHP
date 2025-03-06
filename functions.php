
    <?
    $num1 = $_GET["num1"];
    $oper = $_GET["oper"];
    $num2 = $GET["num2"];

    function myCalculator($num1, $oper, $num2)
    {
        $sum = 0;

        switch ($oper) {
            case "add":
                $sum = $num1 + $num2;
                break;
            case "sub":
                if ($num1 > $num2)
                    $sum = $num1 - $num2;
                else {
                    $sum = $num1 - $num2;
                }
                break;
            case "mul":
                $sum = $num1 * $num2;
                break;
            case "div":
                $sum = $num1 / $num2;
                break;
            default:
                echo "There was an error";
                break;
        }
        return $sum;
    }

    echo "Value : " . myCalculator($num1, $oper, $num2);

    ?>

