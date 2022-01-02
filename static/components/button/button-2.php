<?php


/**
 * @var $btn_title string
 * @var $btn_icon string
 * @var $btn_link string
 */
if(!isset($btn_title2)) $btn_title2 = "READ MORE";
if(!isset($btn_link2)) $btn_link2 = ['url' => '#'];
if(!isset($btn_icon2)) $btn_icon2 = '';
?>

<a href="<?php echo $btn_link2['url'] ?>" class="btn btn-white-border">
    <?php echo $btn_title2 ?>
    <?php if ($btn_icon2 != ''){ ?>
        <span class="ml-8">
          <?php echo $btn_icon2 ?>
      </span>
    <?php } ?>
</a>
