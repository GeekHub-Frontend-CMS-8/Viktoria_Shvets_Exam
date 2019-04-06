<?php get_header(); ?>

<div class="social social-left">
    <ul>
        <li><a href="#"><i class="fab fa-facebook-f"></i> </a></li>
        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
    </ul>
</div>
<div class="container">
    <section class="model">
        <div class="model-text">
            <div class="model-items">
                <p class="model-name">Georgina </p>
                <p class="model-name">Alson</p>
                <p class="model-desc">young model 2020</p>
                <div class="for-buton">
                    <button class="model-button">VIEW PROFILE
                        <div class="model-i"><i class="fas fa-play "></i></div>
                    </button>
                </div>
            </div>
        </div>
    </section>
</div>


<section class="tiles">
    <div class="container">
        <div class="tiles-buttons">
            <button>
                Actor
            </button>
            <button>
                Musician
            </button>
            <button>
                Comedian
            </button>
            <button>
                Model
            </button>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-xs-1 tile-item">
                <img src="<?php echo S_IMG_DIR; ?>/gallery.png" alt="Logo">
                <div class="hover-item">
                    <p class="tiles-name">Keith Ruiz</p>
                    <p class="tiles-work">Comedian</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-1 tile-item">
                <img src="<?php echo S_IMG_DIR; ?>/gallery.png" alt="Logo">
                <div class="hover-item">
                    <p class="tiles-name">Keith Ruiz</p>
                    <p class="tiles-work">Comedian</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-1 tile-item">
                <img src="<?php echo S_IMG_DIR; ?>/gallery.png" alt="Logo">
                <div class="hover-item">
                    <p class="tiles-name">Keith Ruiz</p>
                    <p class="tiles-work">Comedian</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-1 tile-item">
                <img src="<?php echo S_IMG_DIR; ?>/gallery.png" alt="Logo">
                <div class="hover-item">
                    <p class="tiles-name">Keith Ruiz</p>
                    <p class="tiles-work">Comedian</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-1 tile-item">
                <img src="<?php echo S_IMG_DIR; ?>/gallery.png" alt="Logo">
                <div class="hover-item">
                    <p class="tiles-name">Keith Ruiz</p>
                    <p class="tiles-work">Comedian</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-1 tile-item">
                <img src="<?php echo S_IMG_DIR; ?>/gallery.png" alt="Logo">
                <div class="hover-item">
                    <p class="tiles-name">Keith Ruiz</p>
                    <p class="tiles-work">Comedian</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-1 tile-item">
                <img src="<?php echo S_IMG_DIR; ?>/gallery.png" alt="Logo">
                <div class="hover-item">
                    <p class="tiles-name">Keith Ruiz</p>
                    <p class="tiles-work">Comedian</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-1 tile-item">
                <img src="<?php echo S_IMG_DIR; ?>/gallery.png" alt="Logo">
                <div class="hover-item">
                    <p class="tiles-name">Keith Ruiz</p>
                    <p class="tiles-work">Comedian</p>
                </div>
            </div>


        </div>
        <button class="explore-more">explore more</button>
    </div>
</section>
<section class="latest-news">
    <h2>Latest News</h2>
    <div class="container">
        <div class="row">
            <?php $news = get_posts('post', 3); ?>

            <div class="news col-lg-4 col-md-4 col-xs-1">
                <a href=<?php echo get_permalink($news[0]->ID); ?>>
                    <div class="news-photo">
                        <?php echo get_the_post_thumbnail($news[0]->ID, array(200, 140)); ?>
                    </div>
                    <div class="news-desc">
                        <h4 class="news-header">
                            <?php
                            $text = get_the_title($news[0]->ID);
                            $trimmed_content = wp_trim_words($text, 7, "...");
                            echo $trimmed_content;
                            ?>
                        </h4>

                        <p class="news-date">
                            <?php
                            echo get_the_date('d.m.Y', $news[0]->ID);
                            ?>
                        </p>

                    </div>
                </a>
            </div>

            <div class="news col-lg-4 col-md-4 col-xs-1 ">
                <a href=<?php echo get_permalink($news[1]->ID); ?>>
                    <div class="news-photo">
                        <?php
                        echo get_the_post_thumbnail($news[1]->ID, array(200, 140));
                        ?>
                    </div>
                    <div class="news-desc">
                        <h4 class="news-header"><?php
                            $text = get_the_title($news[1]->ID);
                            $trimmed_content = wp_trim_words($text, 7, "...");
                            echo $trimmed_content;
                            ?></h4>
                        <p class="news-date"><?php
                            echo get_the_date('d.m.Y', $news[1]->ID);
                            ?></p>

                    </div>
                </a>
            </div>

            <div class="news col-lg-4 col-md-4 col-xs-1">
                <a href=<?php echo get_permalink($news[2]->ID); ?>>
                    <div class="news-photo">
                        <?php
                        echo get_the_post_thumbnail($news[2]->ID, array(200, 140));
                        ?>
                    </div>
                    <div class="news-desc">
                        <h4 class="news-header"><?php
                            $text = get_the_title($news[2]->ID);
                            $trimmed_content = wp_trim_words($text, 7, "...");
                            echo $trimmed_content;
                            ?></h4>

                        <p class="news-date"><?php
                            echo get_the_date('d.m.Y', $news[2]->ID);
                            ?></p>

                    </div>
                </a>
            </div>

        </div>
    </div>
</section>
<section class="more-news">

    <div class="container">
        <div class="row">
            <?php $posts = get_posts('post', 4); ?>

            <div class="col-lg-8 col-md-12 col-xs-12">
                <div class="row more-news-row">
                    <div class="col-lg-12 col-md-12 col xs-12">
                        <a href=<?php echo get_permalink($news[0]->ID); ?>>
                            <div class="more-news-photo">
                                <?php echo get_the_post_thumbnail($news[0]->ID, array(650, 520)); ?>
                            </div>
                            <p class="more-news-header"><?php
                                $text = get_the_title($news[0]->ID);
                                echo $text;
                                ?></p>
                            <p class="more-news-date"><?php echo get_the_date('d.m.Y', $news[0]->ID);
                                ?>
                            </p>
                    </div>
                </div>
                <div class="row more-news-row">
                    <div class="col-lg-6 col-md-12 col xs-12">
                        <a href=<?php echo get_permalink($news[1]->ID); ?>>
                            <div class="more-news-photo">
                                <?php echo get_the_post_thumbnail($news[1]->ID, array(200, 140)); ?>
                            </div>
                            <p class="more-news-header"><?php
                                $text = get_the_title($news[1]->ID);
                                echo $text;
                                ?></p>
                            <p class="more-news-date"><?php echo get_the_date('d.m.Y', $news[1]->ID);
                                ?>
                            </p>
                    </div>
                    <div class="col-lg-6 col-md-12 col xs-12">
                        <a href=<?php echo get_permalink($news[2]->ID); ?>>
                            <div class="more-news-photo">
                                <?php echo get_the_post_thumbnail($news[2]->ID, array(200, 140)); ?>
                            </div>
                            <p class="more-news-header"><?php
                                $text = get_the_title($news[2]->ID);
                                echo $text;
                                ?></p>

                            <p class="more-news-date"><?php echo get_the_date('d.m.Y', $news[2]->ID);
                                ?>
                            </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-xs-12 more-news-row">
                <a href=<?php echo get_permalink($news[3]->ID); ?>>
                    <div class="more-news-photo">
                        <?php echo get_the_post_thumbnail($news[3]->ID, array(200, 140)); ?>
                    </div>
                    <p class="more-news-header"><?php
                        $text = get_the_title($news[3]->ID);
                        echo $text;
                        ?></p>
                    <p class="more-news-date"><?php echo get_the_date('d.m.Y', $news[3]->ID);
                        ?>
                    </p>
            </div>

        </div>
    </div>
</section>
<?php get_footer(); ?>
