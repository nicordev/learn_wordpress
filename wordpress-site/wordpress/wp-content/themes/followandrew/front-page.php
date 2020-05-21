<?php
/*
 * Home page
 */
get_header(); // Include header.php
?>

    <article class="content px-3 py-5 p-md-5">
        <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    the_content();
                }
            }
        ?>
    </article>

<?php
get_footer(); // Include footer.php
?>