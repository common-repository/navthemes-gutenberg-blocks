<?php
/**
 * Block Name: Call Action
 *
 * This is the template that displays the call action block.
 */

?>

<div class="callaction-block">
   <div class="call-block-7">
    <p> <?php echo esc_html__(the_field('text'),'navthemes_blocks'); ?></p>
   </div>
   <div class="call-block-3">
    <a class="btn-block btnwidth" href="<?php esc_url(the_field('button_link')) ?>">
      <?php echo esc_html__(the_field('button_text'),'navthemes_blocks'); ?>
    </a>
   </div>
</div>