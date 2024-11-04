<!doctype html>
<html>

<main class="mainupdateproject">


    <form class="algemenesectieupdate" action="/Code-map/controllers/Controlportfoliodeleteofupdate.php" method="post" >

        <section class="Invulveldenupdate">

            <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">

            <!-- pagina titel invullen -->
            <input class="Updatepaginanaam" type="text" value="<?php echo htmlspecialchars($inputpagina['Paginatitel']); ?>" name="Titelpagina">


            <!-- Toelichting op project-->
            <textarea class="grootupdateveld" name="Projectbeschrijving"><?php echo htmlspecialchars($inputpagina['Toelichting']); ?></textarea>

            <article class="containerdatumupdate" name="Projectbeschrijving" >

                <!-- Publicatie datum invoeren -->
                <label>Publicatiedatum</label>

                <input type="date" placeholder="Vul hier de publicatiedatum in" name="publicatiedatum">

            </article>
        </section>



        <section class="projectupdateofdelete">

            <article class="knopcontainer">
                <!-- Bestanden worden opgeslagen -->
                <input class="knopop" type="submit" name="Typeknop" value="Update">
            </article>

            <article class="knopcontainer">
                <!-- Bestanden worden opgeslagen -->
                <input class="knopop" type="submit" name="Typeknop" value="Delete">
            </article>


        </section>

    </form>

</main>
</html>