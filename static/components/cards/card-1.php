<?php
/**
 * @var $base_url
 * @var $image
 * @var $title
 * @var $link
 * @var $excerpt
 */
if (!isset($base_url)) $base_url = './';
if (!isset($list_card_1)) $list_card_1 = [
    [
        'image' => $base_url . 'images/placeholder.jpg',
        'title' => 'There’s no I in team, but there’s one in “team branding',
        'link' => '#',
        'excerpt' => 'There’s no I in team, but there’s one in “team branding”'
    ],
    [
        'image' => $base_url . 'images/placeholder.jpg',
        'title' => 'There’s no I in team, but there’s one in “team branding',
        'link' => '#',
        'excerpt' => 'There’s no I in team, but there’s one in “team branding”'
    ],
    [
        'image' => $base_url . 'images/placeholder.jpg',
        'title' => 'There’s no I in team, but there’s one in “team branding',
        'link' => '#',
        'excerpt' => 'There’s no I in team, but there’s one in “team branding”'
    ],
];
?>
<div class="grid grid-cols-3 gap-30">
    <?php
    foreach ($list_card_1 as $key => $item){
        ?>
        <div class="col-span-3 lg:col-span-1">
            <div class="max-w-md">
                <div class="group pt-1/1 relative bg-cover text-white"
                     style="background-image: url(<?php echo $item['image']; ?>)">
                    <div class="group-hover:bg-opacity-80 transition-all absolute inset-0 bg-primary bg-opacity-30"></div>
                    <a href="<?php echo $item['link']; ?>" class="absolute inset-0 flex items-center">
                        <div class="p-16">
                            <h3 class="font-bold font-heading z-40 mb-16 text-24"><?php echo $item['title']; ?></h3>
                            <div class="z-40"><?php echo $item['excerpt']; ?></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>