<form method="post">
    <input type="text" name="search">
    <button type="submit">Send</button>
</form>

<?php
    $_POST['search'] = '<a href="#"><strong>Hey</strong></a><script>alert("Hey")</script>';
    if(isset($_POST["search"])) {
        /* echo strip_tags($_POST["search"], "<strong>"); */
        echo htmlentities($_POST['search']);
    } 
?>