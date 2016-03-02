<?php get_header(); ?>

    <!-- body ----------------------------------------->
    <section id="body">
        <div class="container">
            <div class="row">

                <!-- links ---------------------------->
                <section id="links" class="col-lg-2">

                  <?php get_sidebar('left'); ?>

                </section>

                <!-- conteudo ---------------------------->
                <section id="conteudo" class="col-lg-7">

                    <div id="destaque" class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12" >

                                <?php while (have_posts()) : the_post(); ?>

                                    <h1><?php the_title(); ?></h1>
                                    <p>
                                        <?php the_content(); ?>
                                    </p>

                                <?php endwhile;  ?>

                            </div>
                        </div>
                    </div>

                </section>

                <!-- banners ---------------------------->
                <section id="banners" class="col-lg-3">
                    <?php get_sidebar('right'); ?>
                </section>

            </div>
        </div>
    </section>

<?php get_footer(); ?>
