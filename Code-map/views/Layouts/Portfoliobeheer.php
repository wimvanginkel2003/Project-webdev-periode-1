<!doctype html>
<html>
<main class="Beheermainportfolio">

    <section class="Beheersectionpaginatitel">

        <article class="Beheerarticlepaginatitel">

            <!-- pagina titel -->
            <h2>Huidige projecten</h2>

        </article>

    </section>






    <div class="contentsection">

        <section class="Beheersectioncontactknop">

            <article class="Beheerarticleknopcont">

                <!-- Knop naar contact pagina -->
                <a  class="Beheerknopcontactpag" href="/admin-project-pagina-aanmaken">Nieuw project</a>

            </article>

        </section>

        <!-- Sectie project/ moet via php automatisch worden aangemaakt -->

        <section class="Beheersectionarticleproject">


            <?php foreach ($inputsecties as $variabeluitdatabase) { ?>

            <article class="Beheerarticleproject">

                            <span class="Beheertitelproject">
                                <h3><?php echo htmlspecialchars($variabeluitdatabase['Paginatitel']); ?></h3>
                            </span>
                <span class="Beheerknopnaarprojectspan">
                                <a class="knopinfo" href="/admin-project-pagina-bewerken?id=<?php echo urlencode($variabeluitdatabase['ID']); ?>">Update project</a>
                            </span>

            </article>
            <?php } ?>

        </section>

    </div>

</main>
</html>
