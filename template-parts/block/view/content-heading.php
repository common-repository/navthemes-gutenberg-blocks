<?php
/**
 * Block Name: Heading
 *
 * This is the template that displays the Heading block.
 */


// create id attribute for specific styling
$id = 'heading-' . $block['id'];


// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';
?>

      <section id="services" class="services_section  py-70">
         <div class="container">
            <div class="row">
               <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                  <div class="section-title text-center">
                     <h1 class="display-s aos-init aos-animate" data-aos="fade-up"><?php echo esc_html__(the_field('heading'),'navthemes_blocks'); ?></h1>
                     <p class="display_p"><?php echo esc_html__(the_field('subheading'),'navthemes_blocks'); ?></p>
                  </div>
               </div>
            </div>
          </div>
      </section>

<style type="text/css">
   #<?php echo $id; ?> {
      background: <?php the_field('background_color'); ?>;
      color: <?php the_field('text_color'); ?>;
   }
</style>
