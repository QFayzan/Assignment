<!DOCTYPE HTML>
<html>
<body>
<form action="Handler.php" method="POST">
    <input type="hidden" name="Choice"  value="<?php  echo $_POST["Choice"] ?>">
    You entered <?php

    echo $_POST["Choice"];

    switch ($_POST["Choice"]) {
        case 'Circle':
            {
                echo "<input type='text' name='Radius' placeholder='Radius here'>";
                break;
            }

        case 'Rectangle':
            {
                echo "<input type='text' name='Length' placeholder='Length here'>";
                echo "<input type='text' name='Width' placeholder='Width here'>";
                break;
            }

        case 'Square':
            {
               echo "<input type='text' name='Length' placeholder='Length here'>";
               break;
            }

    }
    ?>
    <button type="submit">Submit!!! </button>
</form>
<br>
<a href="/">go back to home</a>

</body>
</html>