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
</main>

<?php get_footer(); ?>
