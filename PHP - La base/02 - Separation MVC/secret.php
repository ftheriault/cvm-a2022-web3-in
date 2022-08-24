<?php
    require_once("action/secretAction.php");

    $data = execute();
    // var_dump($data);
    
	require_once("partial/header.php");

    foreach ($data["spyList"] as $spy) {
        ?>
        <div><?= $spy ?></div>
        <?php
    }

    require_once("partial/footer.php");