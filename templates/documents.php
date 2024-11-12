<?php /* Template Name: Documents */ ?>

<?php get_header(); ?>

    <div class="price-container document">
      <p class="price-header">
        <?php  echo get_the_title(); ?>
      </p>
    <div class="price-table">
        <div class="level-menu-first">

                    <?php
                    $docs = get_field('doc-table');
                    foreach ($docs as $doc) {
                        $text = $doc['doc-name'];
                        $link = $doc['doc-link'];
                        ?>
                        <div class="price-container-ul">
                            <div class="text"><a href="<?php echo $link; ?>"><?php echo $text; ?></a></div>
                        </div>
                        <?php
                    }
                    ?>

            </div>
        </div>
    </div>

<?php get_footer(); ?>