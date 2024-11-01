<!doctype html>
<html>
<main class="maindetailproject">

        <div class="sectiedetailproject">

            <section class="paginatitelprojectdetail">

                <article class="articlepaginatiteldetail">

                    <!-- pagina titel -->
                    <h2><?php echo htmlspecialchars($contentpagina['Paginatitel']); ?></h2>

                </article>

            </section>

            <section class="contentsectiondetail">


                <!-- Verhaal over het proeject -->
                <article class="Articleinfoproject">
                        <p class="textvakproject"> <?php echo htmlspecialchars($contentpagina['Projectitel']); ?> </p>

                </article>



                <article class="sectionexinfo">


                    <span class="articleknopcont">

                        <!-- Knop naar contact pagina -->
                        <a  class="knopcontactpag" href="">Contact pagina</a>

                    </span>



                    <!-- Datum publiceren project -->
                    <div class="containerclas">

                        <h5 class="pubdatum">datum van project</h5>

                    </div>

                </article>

            </section>



        </div>

</main>
</html>