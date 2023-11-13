<?php get_header(); ?>

<div class="container">
    <!-- WP Loop: require code that gets the page content -->
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('card my-4'); ?>>
            <!-- Page Featured Image -->
            <?php if (has_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url('large'); ?>" class="card-img-top" alt="<?php the_title(); ?>">
            <?php endif; ?>

            <div class="card-body">
                <!-- gets the title of the page -->
                <h3 class="card-title"><?php the_title(); ?></h3>

                <!-- gets the content of the page -->
                <?php the_content(); ?>
            </div>
        </article>
        
    <?php endwhile; ?>
    <!-- endif of the WP loop -->
    <?php endif; ?>
</div>

<?php if (!is_home()) : ?>
    <!-- Google Map Embed Code -->
    <div class="google-map-container">
        <iframe src="<?php echo esc_url('https://maps.app.goo.gl/uFaWDWqNrrH3uRAA6'); ?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
<?php endif; ?>

<?php get_footer(); ?>




 <!-- Change the theme file uri ('images/1.jpg') once the hero banner image is uploaded to the folder images -->
 <img src="<?php echo get_theme_file_uri('images/colour_palette_1.png'); ?>" alt="banner" class="img-fluid">
        <div class="hero-overlay">
            <h1>Hero overlay text</h1>
        </div>



                <!-- Change the theme file uri ('images/1.jpg') once the hero banner image is uploaded to the folder images -->
                <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
        <img src="<?php echo get_theme_file_uri('images/john-lee-oMneOBYhJxY-unsplash.jpg'); ?>" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="1536" height="600" loading="lazy">
        </div>
        <div class="col-lg-6">
            <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Responsive left-aligned hero with image</h1>
            <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
                <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
            </div>
        </div>
    </div>
</div>