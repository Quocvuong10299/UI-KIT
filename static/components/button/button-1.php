<?php


/**
 * @var $btn_title string
 * @var $btn_icon string
 * @var $btn_link string
 */
if(!isset($btn_title)) $btn_title = "Start your journey";
if(!isset($btn_link)) $btn_link = ['url' => '#'];
if(!isset($btn_icon)) $btn_icon = '<svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m10.725 20-.314-9.222 2.185-2.158-2.772.938-.082-.078L4 4l16 .064L10.725 20Z" fill="#fff"/></svg>';
?>

<a href="<?php echo $btn_link['url'] ?>" class="btn btn-primary">
    <?php echo $btn_title ?>
    <?php if ($btn_icon != ''){ ?>
        <span class="ml-8">
          <?php echo $btn_icon ?>
      </span>
    <?php } ?>
</a>
