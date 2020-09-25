<?php $news_data = get_posts([
    'post_type' => 'news',
    'numberposts' => 3,
    'exclude' => array( get_the_ID() )
]) ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GoGreeen</title>
    <?php wp_head(); ?>
</head>
<body>

<main class="detail-wrapper">
    <header>
        <img src="<?= get_the_post_thumbnail() ?>
    </header>
    <section id="detail-news">
        <div class="container">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="content">
                    <h3 class="text-center">
                    <?= the_title() ?>
                    </h3>
                    <p>
                        <?= the_content(); ?>
                    </p>
                </div>
            <?php endwhile; endif; ?>
        </div>
    </section>

    <section id="other-news">
        <div class="container">
            <div class="header text-center">
                <h3 class="section-header">
                    Other News
                </h3>
            </div>
            <div class="content">
                <?php foreach($news_data as $news) : ?>
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
</body>
</html>