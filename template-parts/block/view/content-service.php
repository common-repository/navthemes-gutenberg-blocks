<?php
/**
 * Block Name: service
 *
 * This is the template that displays the service block.
 */

// get image field (array)
$service = get_field('service');
?>

<div class="service-width-100">
  <div class="col-block-service">
    <div class="service-fa-image">
      <?php if(!empty(get_field('image'))){ ?>
        <img src="<?php the_field('image') ?>">
      <?php } else { 
       
        the_field('icon');
     
      } ?>
   </div>
   <h2><?php echo esc_html__(the_field('heading'),'navthemes_blocks'); ?></h2>
   <p><?php echo esc_html__(the_field('text'),'navthemes_blocks'); ?></p>
   <div class="width-service-button block-margin-t">
      <a class="btn-block btnwidth" href="<?php esc_url(the_field('button_link')); ?>"><?php echo esc_html__(the_field('button_text'),'navthemes_blocks'); ?></a>
   </div>
 </div>
</div>

