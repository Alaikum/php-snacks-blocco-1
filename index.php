<?php

echo ('Index');


?>

<div>

    <? for ($i = 1; $i < 8; $i++) {

        echo "<p>
<a href=\"http://localhost/boolean70/php-snacks-blocco-1/snack-$i.php\">Snack-$i</a>
</p>";
    } ?>


</div>

<style>
    body {
        background-color: beige;
        margin: 0;
    }

    div {
        font-size: 24px;
        text-align: center;
    }

    p {
        margin: 0;
        padding: 12px;
    }

    a {
        border: 3px dashed salmon;
    }


    p:hover {
      
        cursor: pointer;
    }

    p:hover a {
        color: cyan;

    }
</style>