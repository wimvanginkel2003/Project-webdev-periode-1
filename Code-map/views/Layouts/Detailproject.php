<!doctype html>
<html>
    <main class="mainproject">



            <section class="Paginatitelcontainerproject">

                <article class="articlepaginatitelproject">

                    <!-- pagina titel -->
                    <h2 class="titelprojectpagina"><?php echo htmlspecialchars($contentpagina['Paginatitel']); ?></h2>

                </article>

            </section>



            <section class="contentsectiondetail">


                <!-- Verhaal over het proeject -->
                <article class="Articletoelichtingproject">
                        <p class="textvakproject"> <?php echo htmlspecialchars($contentpagina['Toelichting']); ?></p>

                </article>



                <article class="Sectionprojectinfo">


                    <div class="articleknopcontact">

                        <!-- Knop naar contact pagina -->
                        <a  class="knopcontactpagina" href="">Contact pagina</a>

                    </div>


                    <!-- Datum publiceren project -->
                    <div class="containerpublicatiedatum">

                        <h6 class="pubdatum">Publicatiedatum: <?php echo htmlspecialchars($datumgoed); ?></h6>

                    </div>

                </article>

            </section>


    </main>
</html>