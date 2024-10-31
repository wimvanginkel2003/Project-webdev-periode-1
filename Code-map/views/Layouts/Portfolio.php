<!doctype html>
<html>
    <main class="mainportfolio">

            <section class="sectionpaginatitel">

                <article class="articlepaginatitel">

                    <!-- pagina titel -->
                    <h2>Bekijk ons portfolio</h2>

                </article>

            </section>


            <div class="contentsection">


                <section class="sectionfilterknop">

                        <!-- invulveld welk range je wilt filteren --->
                        <input type="date">

                        <!-- Knop om filter te bevestigen --->
                        <button>Filter</button>

                </section>


                <!-- Sectie project/ moet via php automatisch worden aangemaakt -->

                <section class="sectionarticleproject">


                    <?php foreach ($inputsecties as $variabeluitdatabase) { ?>

                    <article class="articleproject">

                            <span class="titelproject">
                                <h3><?php echo htmlspecialchars($variabeluitdatabase['Paginatitel']); ?></h3>
                            </span>
                        <span class="knopnaarprojectspan">
                                <a class="knopinfo" href="/project?id=<?php echo urlencode($variabeluitdatabase['ID']); ?>">Meer informatie</a>
                            </span>

                    </article>
                    <?php } ?>

                </section>


                <section class="sectioncontactknop">

                    <article class="articleknopcont">

                        <!-- Knop naar contact pagina -->
                        <a  class="knopcontactpag" href="/contact">Contact pagina</a>

                    </article>

                </section>

            </div>

    </main>
</html>