<?php
/**
 * @var $title string
 * @var $image string
 * @var $link string
 * @var $tag string
 */
if (!isset($base_url)) $base_url = './';
if (!isset($title)) $title = 'Phân tích SWOT ngành Thiết bị y tế tại Việt Nam tính đến năm 2024';
if (!isset($tag)) $tag = 'Chuyên mục tin tức';
if (!isset($image)) $image = $base_url.'images/placeholder.jpg';
if (!isset($link)) $link = ['url' => '#'];
?>
<div class="relative min-h-300 group">
    <a class="text-white z-40 absolute bottom-0 left-16 group-hover:-translate-y-8 transform transition-all"
       href="<?php echo $link; ?>">
        <div class="py-8 px-16 opacity-80 rounded-3 bg-primary text-white mb-16 inline-block"><?php echo $tag; ?></div>
        <h1 class="text-32 font-bold text-white"><?php echo $title; ?></h1>
    </a>
    <div class="z-20 inset-0 absolute bg-gradient-to-t from-black to-transparent group-hover:opacity-90 transition-all"></div>
    <div class="z-10 bg-no-repeat bg-fixed bg-top bg-cover inset-0 absolute"
         style="background-image: url('<?php echo $image; ?>')"></div>
</div>