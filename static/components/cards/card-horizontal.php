<?php
/**
 * @var $image
 * @var $title
 * @var $link
 * @var $excerpt
 * @var $date
 */
if (!isset($base_url)) $base_url = './';
if (!isset($list_card_horizontal)) $list_card_horizontal = [
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
<?php
foreach ($list_card_horizontal as $key => $item){
    ?>
    <div class="sm:grid grid-cols-4 gap-16 group mb-16">
        <div class="col-span-1 mb-16 sm:mb-0">
            <a href="<?php echo $item['link']; ?>" class="block relative bg-center pt-1/1 bg-no-repeat bg-cover" style="background-image: url('<?php echo $item['image']; ?>')"></a>
        </div>
        <div class="col-span-3 group-hover:text-primary">
            <a href="<?php echo $item['link']; ?>">
                <h3 class="font-bold"><?php echo $item['title']; ?></h3>
                <div class="mb-8 text-12"><?php echo $item['date']; ?></div>
                <div><?php echo $item['excerpt']; ?></div>
            </a>
        </div>
    </div>
    <?php
}
?>
