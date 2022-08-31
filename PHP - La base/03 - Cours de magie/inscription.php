<?php
    require_once("action/inscriptionAction.php");

    $data = execute();

    $pageName = "Inscription";
    require_once("partial/header.php");
?>
    <div class="register-section">
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure obcaecati, accusantium quos numquam beatae sapiente. Facere amet accusamus id quos dolorum inventore esse excepturi autem ut ullam! Perferendis, libero laborum.
        </p>
        <?php
            if (!empty($data["hasRegistered"])) {
                ?>
                <div style="color:green;border:1px solid green; background-color:#afa">
                    Merci pour votre inscription!
                </div>
                <?php
            }
            else if (!empty($data["alreadyExists"])) {
                ?>
                <div style="color:red;border:1px solid red; background-color:pink">
                    Vous êtes déjà inscrit
                </div>
                <?php
            }
        ?>
        <form action="" method="post">
            <div>
                <input type="text" name="name" placeholder="Nom" required>
            </div>
            <div>
                <select name="course" required>
                    <option>L'art des cartes</option>
                    <option>La triche</option>
                    <option>L'hypnose</option>
                </select>
            </div>
            <div>
                <textarea name="message" required cols="30" rows="10" placeholder="Informations complémentaires"></textarea>
            </div>
            <div>
                <button type="submit">Envoyer</button>
            </div>
        </form>
    </div>
<?php
    require_once("partial/footer.php");