
<!DOCTYPE HTML>
<html>
<body>

You entered <?php

echo $_POST["Choice"];

include 'Circle.php';
include "Rectangle.php";
include "Square.php";
switch ($_POST["Choice"])
{
    case "Circle":
        $C1 = new Circle($_POST["Radius"]);
        echo "Circumference = ".$C1->perimeter()."<br>";
        break;
    case "Square":
        $S1 = new Square($_POST["Length"]);
        echo "Square perimeter is= ".$S1->perimeter()."<br>";
        break;
    case "Rectangle":
        $R1 = new Rectangle($_POST["Length"],$_POST["Width"]);
        echo "Rectangle perimeter is= ".$R1->perimeter()."<br>";
        break;
    default:
        echo "Enter a Valid Choice";
}
?><br>
<a href="/">go back to home</a>

</body>
</html>