<?php get_header(); ?>

    <!-- body ----------------------------------------->
    <section id="body">
        <div class="container">
            <div class="row">

                <!-- links ---------------------------->
                <section id="links" class="col-lg-2">

                  <?php get_sidebar('left'); ?>

                    <a href="#" class="btn linkAreas">
                        <i class="fa fa-cog"></i><span>CERTIFICAÇÃO</span>
                    </a>
                    <a href="#" class="btn linkAreas">
                        <i class="fa fa-bank"></i><span>BIBLIOTECA</span>
                    </a>
                    <a href="#" class="btn linkAreas">
                        <i class="fa fa-arrow-down"></i><span>MANUAL</span>
                    </a>
                    <a href="#" class="btn linkAreas">
                        <i class="fa fa-black-tie"></i><span>CONSELHO</span>
                    </a>

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
                <section id="banners" class="col-lg-3" style="background: #127466">
                    <?php get_sidebar('right'); ?>
                </section>

            </div>
        </div>
    </section>

<?php get_footer(); ?>
