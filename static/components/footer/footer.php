<?php
if (!isset($base_url)) $base_url = './';
if (!isset($company)) {
    $company = [
        [
            "title" => "Destinations",
            "link" => "#",
        ],
        [
            "title" => "About us",
            "link" => "#",
        ],
        [
            "title" => "Contact",
            "link" => "#",
        ],
        [
            "title" => "Privacy Policy",
            "link" => "#",
        ],
    ];
};
if (!isset($style)) {
    $style = [
        [
            "title" => "Family tour",
            "link" => "#",
        ],
        [
            "title" => "Classic tour",
            "link" => "#",
        ],
        [
            "title" => "Adventure  tour",
            "link" => "#",
        ],
        [
            "title" => "Golf tour",
            "link" => "#",
        ],
        [
            "title" => "Mice",
            "link" => "#",
        ],
    ];
};
if (!isset($support)) {
    $support = [
        [
            "title" => "Contact",
            "link" => "#",
        ],
        [
            "title" => "Privacy Policy",
            "link" => "#",
        ],
    ];
}
?>
<div class="relative z-10">
    <div class="footer relative bg-footer">
        <div class="block sm:hidden"> <?php include __DIR__ . '/../form/contact.php' ?></div>
        <div style="height: 0.5px" class="container w-full opacity-80 bg-grey-1"></div>
        <div class="container">
            <div class="grid pt-40 md:pt-50 lg:pt-56 gap-20 md:gap-y-30 lg:gap-y-30 pb-20 lg:pb-36 lg:gap-64 grid-cols-10">
                <div class="col-span-10 md:col-span-5 mb-20 sm:mb-0 lg:col-span-4">
                    <h4 class="uppercase text-white text-16 font-bold max-w-21 mb-16">
                        NEED HELP?
                    </h4>
                    <div class="mb-30 relative">
                        <div class="pl-30 line-left">
                            <p class="text-14 text-white font-normal mb-0">Call us</p>
                            <a class="text-white hover:text-secondary font-bold" href="tel:+84 90 7383599">+84 90
                                7383599</a>
                        </div>
                    </div>
                    <div class="mb-30 relative">
                        <div class="pl-30 line-left">
                            <p class="text-14 text-white font-normal mb-0">Email for us</p>
                            <a class="text-white hover:text-secondary font-bold" href="mailto:Hello@indochinaGo.vn">
                                Hello@indochinaGo.vn
                            </a>
                        </div>
                    </div>
                    <div class="mb-0 relative">
                        <div class="pl-30 line-left">
                            <p class="text-14 text-white font-normal mb-0">Follow for us</p>
                            <div class="flex item-center">
                                <a class="text-white ic-fb mr-16" href="mailto:Hello@indochinaGo.vn">
                                    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.001 2.002c-5.522 0-9.999 4.477-9.999 9.999 0 4.99 3.656 9.126 8.437 9.879v-6.988h-2.54v-2.891h2.54V9.798c0-2.508 1.493-3.891 3.776-3.891 1.094 0 2.24.195 2.24.195V8.56h-1.264c-1.24 0-1.628.772-1.628 1.563v1.875h2.771l-.443 2.891h-2.328v6.988C18.344 21.129 22 16.992 22 12.001c0-5.522-4.477-10-9.999-10Z"
                                              fill="#fff"/>
                                    </svg>
                                </a>
                                <a class="text-white ic-insta mr-16" href="mailto:Hello@indochinaGo.vn">
                                    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.999 7.377a4.624 4.624 0 1 0 0 9.248 4.624 4.624 0 0 0 0-9.248Zm0 7.627a3.004 3.004 0 1 1 0-6.008 3.004 3.004 0 0 1 0 6.008ZM16.806 8.285a1.078 1.078 0 1 0 0-2.156 1.078 1.078 0 0 0 0 2.156Z"
                                              fill="#fff"/>
                                        <path d="M20.533 6.11A4.605 4.605 0 0 0 17.9 3.48a6.606 6.606 0 0 0-2.186-.42c-.963-.042-1.268-.054-3.71-.054s-2.755 0-3.71.054a6.554 6.554 0 0 0-2.184.42A4.6 4.6 0 0 0 3.477 6.11a6.585 6.585 0 0 0-.419 2.186c-.043.962-.056 1.267-.056 3.71 0 2.442 0 2.753.056 3.71.015.748.156 1.486.419 2.187a4.61 4.61 0 0 0 2.634 2.632 6.583 6.583 0 0 0 2.185.45c.963.042 1.268.055 3.71.055s2.755 0 3.71-.055a6.616 6.616 0 0 0 2.186-.42 4.614 4.614 0 0 0 2.633-2.632c.263-.7.404-1.438.419-2.186.043-.962.056-1.267.056-3.71s0-2.753-.056-3.71a6.58 6.58 0 0 0-.421-2.217Zm-1.218 9.533a5.044 5.044 0 0 1-.311 1.688 2.988 2.988 0 0 1-1.712 1.71c-.535.2-1.1.305-1.67.312-.95.044-1.218.055-3.654.055-2.438 0-2.687 0-3.655-.055a4.961 4.961 0 0 1-1.669-.311 2.984 2.984 0 0 1-1.719-1.711 5.08 5.08 0 0 1-.311-1.67c-.043-.95-.053-1.217-.053-3.653 0-2.437 0-2.686.053-3.655a5.038 5.038 0 0 1 .311-1.687c.305-.79.93-1.41 1.719-1.712a5.01 5.01 0 0 1 1.669-.311c.951-.043 1.218-.055 3.655-.055s2.687 0 3.654.055a4.96 4.96 0 0 1 1.67.31 2.992 2.992 0 0 1 1.712 1.713c.197.535.302 1.099.311 1.669.043.95.054 1.218.054 3.655 0 2.436 0 2.698-.043 3.654h-.011v-.001Z"
                                              fill="#fff"/>
                                    </svg>
                                </a>
                                <a class="text-white ic-whatapp mr-16" href="mailto:Hello@indochinaGo.vn">
                                    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M12 22.5c5.799 0 10.5-4.701 10.5-10.5S17.799 1.5 12 1.5 1.5 6.201 1.5 12c0 1.883.496 3.65 1.364 5.179L1.5 22.5l5.486-1.272A10.452 10.452 0 0 0 12 22.5Zm0-1.615a8.885 8.885 0 1 0-7.281-3.792l-.796 2.984 3.037-.76A8.844 8.844 0 0 0 12 20.886Z"
                                              fill="#fff"/>
                                        <mask id="a" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="3" y="3"
                                              width="18" height="18">
                                            <path d="M21 12a9 9 0 0 1-14.106 7.413l-3.076.769.806-3.023A9 9 0 1 1 21 12Z"
                                                  fill="#fff"/>
                                        </mask>
                                        <g mask="url(#a)">
                                            <path d="M9.375 7.125c-.25-.501-.633-.457-1.02-.457-.69 0-1.77.828-1.77 2.37 0 1.263.558 2.646 2.433 4.714 1.81 1.996 4.189 3.03 6.164 2.994 1.974-.035 2.38-1.734 2.38-2.308 0-.255-.157-.381-.266-.416-.673-.323-1.914-.925-2.196-1.038-.283-.113-.43.04-.522.123-.256.245-.764.964-.937 1.126-.174.161-.433.08-.541.018-.397-.159-1.473-.638-2.33-1.469-1.061-1.028-1.123-1.382-1.323-1.697-.16-.252-.043-.406.016-.474.228-.263.544-.67.686-.873.141-.202.029-.51-.039-.7-.29-.823-.535-1.512-.735-1.913Z"
                                                  fill="#fff"/>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-10 md:col-span-5 mb-20 sm:mb-0 lg:col-span-2">
                    <h4 class="uppercase text-white text-16 font-bold mb-16 lg:mb-32">
                        COMPANY
                    </h4>
                    <ul>
                        <?php foreach ($company as $key => $item) {
                            ?>
                            <li class="mb-14 md:mb-20">
                                <a class="text-white text-14 font-medium hover:text-secondary"
                                   href="<?php echo $item['link'] ?>">
                                    <?php echo $item['title'] ?>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="col-span-10 md:col-span-5 mb-20 sm:mb-0 lg:col-span-2">
                    <h4 class="uppercase text-white text-16 font-bold mb-16 lg:mb-32">
                        STYLE
                    </h4>
                    <ul>
                        <?php foreach ($style as $key => $item) {
                            ?>
                            <li class="mb-14 md:mb-20">
                                <a class="text-white text-14 font-medium hover:text-secondary"
                                   href="<?php echo $item['link'] ?>">
                                    <?php echo $item['title'] ?>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="col-span-10 md:col-span-5 mb-20 sm:mb-0 lg:col-span-2">
                    <h4 class="uppercase text-white text-16 font-bold mb-16 lg:mb-32">
                        SUPPORT
                    </h4>
                    <ul>
                        <?php foreach ($support as $key => $item) {
                            ?>
                            <li class="mb-14 md:mb-20">
                                <a class="text-white text-14 font-medium hover:text-secondary"
                                   href="<?php echo $item['link'] ?>">
                                    <?php echo $item['title'] ?>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
        <div style="height: 0.5px" class="container opacity-80 bg-grey-1"></div>
        <div class="container sm:grid py-20 grid-cols-12">
            <div class="col-span-12 max-w-full">
                <p class="text-grey-1 text-left text-16 sm:mb-0">
                <h6>© Copyright <a href="#">IndochinaGo</a> 2021. All right reserved</h6>
                </p>
            </div>
        </div>
    </div>
</div>
