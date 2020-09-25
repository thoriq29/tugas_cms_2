<footer id="footer">
    <div class="container">
        <div class="invite">
            <h3>Let us invite you if you are interested</h3>
            <form action="" method="post">
                <input type="text" class="custom-input" placeholder="Your email address">
                <button type="submit" class="btn btn-primary">
                    Invite me
                </button>
            </form>
        </div>

        <div class="share">
            <h3>Share our community</h3>
            <?= do_shortcode('[DISPLAY_ULTIMATE_SOCIAL_ICONS] ') ?>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
