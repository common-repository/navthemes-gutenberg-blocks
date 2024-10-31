<?php
/**
 * Block Name: Team
 *
 * This is the template that displays the team block.
 */

// create id attribute for specific styling
$id = 'team-' . $block['id'];


// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

?>

<div class="team-section">
     <img src="<?php esc_url(the_field('photo')); ?>" alt="">
  <div>
     <h3><?php echo esc_html__(the_field('name'),'navthemes_blocks'); ?></h3>
     <p><?php echo esc_html__(the_field('extra_info'),'navthemes_blocks'); ?></p>
     <div>

      <?php 

        $teamicon = get_field('socials');
      ?>

      <a href="<?php echo esc_url($teamicon['first_link']); ?>'" target="_blank"><?php  echo $teamicon['first_icon']; ?></a>

     <a href="<?php echo esc_url($teamicon['second_link']); ?>'" target="_blank"><?php  echo $teamicon['second_icon']; ?></a>

    <a href="<?php echo esc_url($teamicon['third_link']); ?>'" target="_blank"><?php  echo $teamicon['third_icon']; ?></a>

     </div>
  </div>
</div>
