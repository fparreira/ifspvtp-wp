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

                                <?php
                                $args = array('post_type'=>'post', 'tag'=>'destaque', 'numberposts'=>1);
                                $post_destaque = get_posts($args);
                                ?>
                                <?php if($post_destaque) : foreach( $post_destaque as $post ) : setup_postdata( $post ); ?>
                                        <?php if(has_post_thumbnail()): ?>
                                        <?php the_post_thumbnail('', array('class'=>'img-responsive')); ?>
                                      <?php endif; ?>
                                        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                                    <?php endforeach; ?>
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>

                    <div id="noticias" class="container-fluid">

                        <?php
                        $args = array('post_type'=>'post', 'tag'=>'evidencia', 'numberposts'=>5);
                        $post_evidencia = get_posts($args);
                        ?>

                        <?php if($post_evidencia) : foreach( $post_evidencia as $post ) : setup_postdata( $post ); ?>

                            <div class="row">
                                <div class="col-lg-12" >
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <span><?php the_content(); ?></span>
                                </div>
                            </div>

                        <?php endforeach; ?>
                        <?php endif; ?>

                    </div>


                    <div id="maisNoticias" class="container-fluid">
                        <h4><i class='fa fa-newspaper-o'></i>&nbsp; Mais notícias</h4>
                        <div class="list-group">

                            <?php
                            $args = array(
                                'posts_per_page'=>10,
                                'tag__not_in'=>array(4,5)
                            );

                            $post_noticia = new WP_Query($args);

                            //$post_noticia = get_posts($args);
                            ?>

                            <?php if($post_noticia->have_posts()) : while( $post_noticia->have_posts()) : $post_noticia->the_post(); ?>

                                <a href="<?php the_permalink(); ?>" class="list-group-item"><?php the_title(); ?></a>

                            <?php endwhile; ?>
                            <?php endif; ?>

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
