<?php get_header(); ?>

<main id="main-content">
    <section id="sympathy">
        <div class="container">
            <div class="header text-center">
                <h3 class="section-header">
                    Our motivation
                </h3>

                <span class="d-block">
                    The following are a few examples of why we raise your concern
                </span>
            </div>
            <div class="content">
                <div class="img-wrapper">
                    <img src="<?= get_template_directory_uri() . '/images/forest_fires.jpg' ?>" alt="">
                </div>
                <div class="img-wrapper">
                    <img src="<?= get_template_directory_uri() . '/images/logging.jpg' ?>" alt="">
                </div>
                <div class="img-wrapper">
                    <img src="<?= get_template_directory_uri() . '/images/smog.jpg' ?>" alt="">
                </div>
                <div class="img-wrapper">
                    <img src="<?= get_template_directory_uri() . '/images/poor_animal.jpg' ?>" alt="">
                </div>
            </div>
        </div>
    </section>
    <section id="solution">
        <div class="container">
            <div class="header text-center">
                <h3 class="section-header">
                    What are the benefits
                </h3>

                <span class="d-block">
                    we can get so many benefits like
                </span>
            </div>

            <div class="content">
                <div class="wrapper">
                    <img src="<?= get_template_directory_uri() . '/images/friendship.svg' ?>" alt="">
                    <h3>No more polution</h3>
                </div>
                <div class="wrapper">
                    <img src="<?= get_template_directory_uri() . '/images/dreamer.svg' ?>" alt="">
                    <h3>animals live peacefully in their habitat</h3>
                </div>
                <div class="wrapper">
                    <img src="<?= get_template_directory_uri() . '/images/reading_at_tree.svg' ?>" alt="">
                    <h3>Enjoy the atmosphere</h3>
                </div>
            </div>
        </div>
    </section>
    <section id="news">
        <div class="container">
            <div class="header text-center">
                <h3 class="section-header">
                    News
                </h3>
                <span class="d-block">
                    Let see the information about our work below
                </span>
            </div>

            <div class="content">
                <?php $data_news = get_posts([
                        'post_type' => 'news',
                        'numberposts' => 3,
                ]) ?>

                <?php foreach($data_news as $news) : ?>
                    <div class="card">
                        <div class="card-body">
                            <img src="<?= get_the_post_thumbnail($news->ID); ?>
                            <h3 class="card-title">
                                <?= $news->post_title ?>
                            </h3>
                            <p>
                                <?= substr($news->post_content, 0, 140) ?>...
                            </p>
                            <a href="<?= get_the_permalink($news->ID) ?>" class="btn btn-primary">
                                Read more
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
