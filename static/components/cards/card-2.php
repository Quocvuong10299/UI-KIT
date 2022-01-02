<?php
/**
 * @var $base_url
 * @var $image
 * @var $title
 * @var $link
 * @var $excerpt
 * @var $date
 */
if (!isset($base_url)) $base_url = './';
if (!isset($list_card_2)) $list_card_2 = [
    [
        'image' => $base_url . 'images/placeholder.jpg',
        'title' => 'There’s no I in team, but there’s one in “team branding" There’s no I in team, but there’s one in “team branding',
        'link' => '#',
        'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, consequatur culpa deserunt dolor dolorem earum, eos est facilis iusto libero maiores minima nam natus nemo nihil numquam quas quibusdam quis!',
        'date' => '1/1/2022'
    ],
    [
        'image' => $base_url . 'images/placeholder.jpg',
        'title' => 'There’s no I in team, but there’s one in “team branding',
        'link' => '#',
        'excerpt' => 'There’s no I in team, but there’s one in “team branding”',
        'date' => '1/1/2022'
    ],
    [
        'image' => $base_url . 'images/placeholder.jpg',
        'title' => 'There’s no I in team, but there’s one in “team branding',
        'link' => '#',
        'excerpt' => 'There’s no I in team, but there’s one in “team branding”',
        'date' => '1/1/2022'
    ],
];
?>
<div class="grid grid-cols-3 gap-30">
    <?php
    foreach ($list_card_2 as $key => $item){
        ?>
        <div class="col-span-3 lg:col-span-1">
            <article class="shadow-lg group max-w-xs h-full overflow-hidden">
                <div class="overflow-hidden rounded-t-3">
                    <a href="<?php echo $item['link']; ?>">
                        <img class="transform group-hover:scale-110 transition-all rounded-t-3" src="<?php echo $item['image']; ?>"
                             alt="<?php echo $item['title']; ?>">
                    </a>
                </div>
                <div class="p-24 group-hover:bg-primary transition-all rounded-b-3 relative h-full">
                    <h3 class="transition-color group-hover:text-white font-bold text-primary text-20 font-heading line-clamp-2"><?php echo $item['title']; ?></h3>
                    <div class="transition-color group-hover:text-accent text-14 mt-8">
                        <?php echo $item['date']; ?>
                    </div>
                    <div class="transition-color group-hover:text-white text-text mt-16">
                        <?php echo $item['excerpt']; ?>
                    </div>
                    <div class="transition-color group-hover:text-white text-primary mt-20 block flex items-center mt-20 transform hover:translate-x-10">Read More
                    </div>
                    <a href="<?php echo $item['link']; ?>" class="inset-0 absolute"></a>
                </div>
            </article>
        </div>
        <?php
    }
    ?>
</div>