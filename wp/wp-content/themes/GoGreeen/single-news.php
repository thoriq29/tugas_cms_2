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
    <section id="detail-news">
        <div class="container">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="content">
                    <img src="<?= get_the_post_thumbnail() ?>
                <h3 class="text-center text-header">
                    <?= the_title(); ?>
                    </h3>
                    <p>
                        <?= the_content(); ?>
                    </p>
                </div>
            <?php endwhile; endif; ?>
        </div>
    </section>

    <div id="other-news">
        <div class="container">
            <ul>
                <?php foreach($news_data as $news) : ?>
                    <li>
                        <a href="<?= get_the_permalink($news->ID) ?>">
                            <?= $news->post_title ?>
                        </a>
                    </li>x
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</main>

<?php get_footer(); ?>
</body>
</html>