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

<header id="header">
    <div class="container">
        <div class="left__side">
            <h1>
                Let's <span class="text-primary">revive</span> the cool earth with us
            </h1>
            <span class="d-block">
                Are you one of those people who care about the environment ?
            </span>
            <a class="btn btn-primary" href="#sympathy">
                Why we do this ?
            </a>
        </div>
        <div class="right__side">
            <img src="<?= get_template_directory_uri() . '/images/before_dawn.svg' ?>" alt="" class="img-header">
        </div>
    </div>
</header>
