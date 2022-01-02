<?php

if(!isset($base_url)) $base_url = "./";
if(!isset($title_partners)) $title_partners = "Partners";
if(!isset($subtitle_partners)) $subtitle_partners = "Out assocaities ";
if(!isset($description_partners)) $description_partners = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas viverra nibh sit quam aliquet pretium. Quam morbi in etiam interdum ipsum, et varius in. Egestas amet, hendrerit neque volutpat venenatis tincidunt. Odio mauris velit at odio feugiat id. Sed mattis neque ipsum elit, imperdiet tincidunt pellentesque est a. Sit commodo molestie maecenas.";
if(!isset($list_partners)){
    $list_partners = [
        [
            'link' => '#.',
            'image' => $base_url . 'images/placeholder.jpg',
        ],
        [
            'link' => '#.',
            'image' => $base_url . 'images/placeholder.jpg',
        ],
        [
            'link' => '#.',
            'image' => $base_url . 'images/placeholder.jpg',
        ],
        [
            'link' => '#.',
            'image' => $base_url . 'images/placeholder.jpg',
        ],
        [
            'link' => '#.',
            'image' => $base_url . 'images/placeholder.jpg',
        ],
        [
            'link' => '#.',
            'image' => $base_url . 'images/placeholder.jpg',
        ],
        [
            'link' => '#.',
            'image' => $base_url . 'images/placeholder.jpg',
        ],
        [
            'link' => '#.',
            'image' => $base_url . 'images/placeholder.jpg',
        ],
        [
            'link' => '#.',
            'image' => $base_url . 'images/placeholder.jpg',
        ],
        [
            'link' => '#.',
            'image' => $base_url . 'images/placeholder.jpg',
        ],
    ];
}

$options_partners = [
    'arrows' => true,
    'type'   => 'loop',
    'perPage' =>  2,
    'perMove' =>  1,
    'gap' => 50,
    'pagination' => false,
    'autoplay' =>true,
    'breakpoints' => [
        1200 => [
            'perPage' => 3,
            'gap' => 30,
        ],
        710 => [
            'perPage' => 2,
            'gap' => 10,
        ],
        500 => [
            'perPage' => 2,
            'gap' => 0,
        ],
    ],
];
?>

<div class="container relative pt-40 lg:pt-64 pb-70 lg:pb-101">
    <div class="grid gap-20 lg:gap-64 grid-cols-12">
        <div class="col-span-12 lg:col-span-4">
            <div class="flex justify-center items-center flex-col lg:justify-start lg:items-start">
                <h6 class="text-grey-2 text-18 mb-6"><?php echo $subtitle_partners ?></h6>
                <h2 class="text-30 lg:text-36 font-bold text-primary"><?php echo $title_partners ?></h2>
            </div>
        </div>
        <div class="col-span-12 lg:col-span-8">
            <div class="splide" data-splide='<?php echo json_encode($options_partners); ?>'>
                <div class="splide__arrows">
                    <button class="splide__arrow splide__arrow--prev w-20 h-20 sm:w-36 sm:h-36 flex justify-center items-center bg-grey-4 absolute top-1/2 transform -translate-y-1/2 z-50 left-0 lg:-left-50"><svg width="11" height="16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.939.939.879 8l7.06 7.061 2.122-2.122L5.121 8l4.94-4.939L7.939.939Z" fill="#000"/></svg></button>
                    <button class="splide__arrow splide__arrow--next w-20 h-20 sm:w-36 sm:h-36 flex justify-center items-center bg-grey-4 absolute top-1/2 transform -translate-y-1/2 z-50 right-0 lg:-right-50"><svg style="transform: rotate(180deg)" width="11" height="16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.939.939.879 8l7.06 7.061 2.122-2.122L5.121 8l4.94-4.939L7.939.939Z" fill="#000"/></svg></button>
                </div>
                <div class="splide__track">
                    <div class="splide__list">
                        <?php foreach ($list_partners as $key => $item) {
                            ?>
                            <div class="splide__slide flex justify-center items-center relative">
                                <a href="<?php echo $item['link'] ?>">
                                    <div class="max-w-full h-auto overflow-hidden">
                                        <img class="w-full-h-full object-cover" src="<?php echo $item['image'] ?>" alt="" />
                                    </div>

                                </a>
                            </div>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
