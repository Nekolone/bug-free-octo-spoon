<?php

isset($_GET["name"]) ? $title = $_GET["name"] : $title = "ERROR";
include_once "header.php";

if (isset($_POST["done"]))
    OutputInfoService::deleteItem($_GET["SKU"]);

?>

</div>
</div>
</header>

<div class="main">
    <div class="container">
        <div class="content__box">
            <div class="item-info__box">

                <?php
                OutputInfoService::listItem($_GET["SKU"]);
                ?>

                <form action="#" method="post">
                    <input type="submit" class="item__center button" name="done" value="delete">
                </form>
            </div>
        </div>
    </div>
</div>
</body>

</html>
