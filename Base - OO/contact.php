<?php
    require_once("action/ContactAction.php");

    $action = new ContactAction();
    $data = $action->execute();

    require_once("partial/header.php");
?>
Contactez-nous à ce numéro....
<?php
    require_once("partial/footer.php");