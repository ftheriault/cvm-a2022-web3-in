<?php
    require_once("action/contactAction.php");

    $data = execute();
    
	require_once("partial/header.php");
?>
    <?php
        if (!empty($data["msgSent"])) {
            ?>
            <div style="color:green">
                Message envoyé
            </div>
            <?php
        }
    ?>
    <form action="" method="post">
        <div>
            <textarea name="commentaire" id="" cols="30" rows="10" style="width:100%;height:60px"></textarea>
        </div>
        <div>
            <button>Envoyer</button>
        </div>
    </form>
<?php
	require_once("partial/footer.php");