<html>
<head></head>
<body>
<div>
    <form action="FormHandler.php" method="post">
            Choice:
            <input type="radio" name="Choice" value="Circle">Circle
            <input type="radio" name="Choice" value="Rectangle">Rectangle
            <input type="radio" name="Choice" value="Square">Square

        <input type="submit" name="submit" value="Submit">
    </form>
</div>

</body>
<?php
include 'Circle.php';
include "Rectangle.php";
include "Square.php";


echo 'Find perimeter of what shape' . "<br>";
echo '1 for Circle , 2 for Rectangle , 3 for Square' . "<br>";


?>

</body>
</html>

