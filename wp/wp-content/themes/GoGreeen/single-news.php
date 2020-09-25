<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GoGreen</title>
    <?php wp_head(); ?>
</head>
<body>

<main id="detail-news">
    <div class="container">
        <div class="content">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>
</body>
</html>