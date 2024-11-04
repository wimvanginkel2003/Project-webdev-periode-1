<!doctype html>
<html>

    <main class="mainaanmakenproject">

            <section class="sectionpaginatitelprojectaanmaken">

                <article class="articlepaginatitelaanmakenproject">

                    <!-- pagina titel -->
                    <h2>Project pagina aanmaken</h2>

                </article>

            </section>


            <!-- Formulier tag waardoor er informatie naar de controller gestuurd kan worden-->
            <form class="algemenesectie" action="/Code-map/controllers/Controlaanmakenportfolio.php" method="post" >

                <section class="invulveldentexten">

                        <!-- pagina titel invullen project pagina-->
                        <input class="invulpaginanaam" type="text" placeholder="Vul hier de pagina titel in" name="Titelpagina" required>


                        <!-- Toelichting op project-->
                        <textarea class="grootinvulveld" placeholder="Schrijf hier je artikel" name="Toelichting" required></textarea>


                </section>


                <section class="projectopslaan">

                    <article class="knopcontainer">

                         <!-- Pagina word opgeslagen -->
                        <input class="knopop" type="submit" value="Opslaan">

                    </article>

                </section>

        </form>

    </main>
</html>