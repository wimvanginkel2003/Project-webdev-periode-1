<!doctype html>
<html>

<main class="mainaanmakenproject">

    <section class="sectionpaginatitelprojectaanmaken">

        <article class="articlepaginatitelaanmakenproject">

            <!-- pagina titel -->
            <h2>Project pagina aanmaken</h2>

        </article>

    </section>


            <form class="algemenesectie" action="/Code-map/controllers/Controlportfoliodeleteofupdate.php" method="post" >

                <section class="invulveldentexten">

                    <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">

                    <!-- pagina titel invullen -->
                    <input class="invulpaginanaam" type="text" value="<?php echo htmlspecialchars($inputpagina['Paginatitel']); ?>" name="Titelpagina">


                    <!-- Toelichting op project-->
                    <textarea class="grootinvulveld" name="Toelichting"><?php echo htmlspecialchars($inputpagina['Toelichting']); ?></textarea>

                </section>



        <section class="projectopslaan">

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