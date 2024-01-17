<form>
    <input type="text" name="name">
    <input type="date" name="bornDate">
    <input type="submit" value="OK">
</form>

<?php

if(isset($_GET)){
    foreach ($_GET as $key => $value) {
        echo "Field name: " . $key . "<br>";
        echo "Field value: " . $value;
        echo "<hr>";
    }
}

?>