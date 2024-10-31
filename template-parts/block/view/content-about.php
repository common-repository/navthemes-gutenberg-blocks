<?php
/**
 * Block Name: About
 *
 * This is the template that displays the about block.
 */

// get image field (array)

// create id attribute for specific styling
$id = 'about-' . $block['id'];

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

?>
 <div class="about-field-block">
 	<div class="col-8-about-block">
     <h1><?php echo esc_html__(the_field('heading'),'navthemes_blocks'); ?></h1>
     <h3><?php echo esc_html__(the_field('sub_heading'),'navthemes_blocks'); ?></h3>
     <p><?php echo esc_html__(the_field('content'),'navthemes_blocks'); ?></p>
   <div class="about-field-width-100">
   	<div class="col-block-4 block-margin-t">
     <a type="submit" class="btn-block btnwidth" href="<?php esc_url(the_field('button_link')); ?>"><?php echo esc_html__(the_field('button_text'),'navthemes_blocks'); ?></a>
    </div>
	</div>
  </div>
<div class="col-4-about-block-image">
   <img src="<?php esc_url(the_field('image')); ?>" class="border_img">
</div>
</div>


