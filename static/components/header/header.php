<?php
/**
 * @var $menu
 */
/**
 * @var $menu
 * @var $logo
 */
if(!isset($base_url)) $base_url = './';
if(!isset($label_menu)) $label_menu = 'Download Brochure';
if(!isset($link_menu)) $link_menu = ['url' => '#'];
if (!isset($menu)) {
    $menu = [
        [
            "title" => "Home",
            "link" => "#",
        ],
        [
            "title" => "Destinations",
            "link" => "#",
        ],
        [
            "title" => "Styles",
            "link" => "#",
        ],
        [
            "title" => "Gallery",
            "link" => "#",
        ],
        [
            "title" => "Blog Insights",
            "link" => "#",
        ]
    ];
}
if (!isset($logo)) {
//    $logo = $base_url."images/logo.png";
    $logo = '<svg width="80" height="80" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill="#fff" fill-opacity=".9" d="M0 0h80v80H0z"/><path d="m21.286 41.02.012-.02 3.887-6.662 7.3-13.1 3.682 5.722-.746 1.5-2.33 4.667-2.214 4.438-1.335 2.674 2.055-3.473 2.525-4.268 2.655-4.49 3.695 6.333 2.838 4.865c-.01.002-.019.003-.028.006-4.505.838-9.377 1.557-14.297 1.968l-.076.006c-.567.047-1.136.09-1.706.128-2.509.169-4.445.045-5.917-.295ZM48.116 47.44H17.541l1.618-2.774c1.3.25 2.893.337 4.82.226a58.527 58.527 0 0 0 2.872-.237l.084-.009c5.711-.61 11.808-1.996 17.429-3.59l.025-.007.004.007 3.475 5.956.022.038.226.39Z" fill="#910202"/><path d="M54.339 36.784v.008a184.592 184.592 0 0 1-11.028 2.41l-.029.007c-4.505.84-9.377 1.56-14.297 1.97l.558-.943 2.054-3.473 2.525-4.268 2.655-4.49 6.917-10.455 8.108 14.945 1.769 2.99.768 1.3ZM60.64 47.44H25.283l1.647-2.785.005-.009c5.712-.61 11.809-1.996 17.43-3.59l.025-.007a180.48 180.48 0 0 0 10.496-3.341l.671 1.135 4.246 7.178.1.17.739 1.248ZM59.686 36.997l-.09-2.595.629-.608-.799.264-.023-.022-1.654-1.542 4.608.018-2.671 4.485Z" fill="#BF0113"/><path d="m22.382 60.42-.6 1.666-.6-1.666h-.354l.76 2.004h.384l.758-2.004h-.348ZM23.176 60.204a.21.21 0 1 0-.003.42.21.21 0 0 0 .003-.42Zm-.168.631v1.589h.33v-1.589h-.33ZM25.24 61.59c0-.467-.322-.781-.778-.781-.473 0-.8.32-.8.82 0 .498.34.82.8.82.392 0 .645-.221.735-.5h-.358c-.06.125-.174.223-.377.223a.439.439 0 0 1-.455-.42h1.222c.008-.054.011-.108.011-.162Zm-1.23-.103c.034-.25.214-.4.438-.4.246 0 .441.156.447.4h-.886ZM26.341 61.103v-.268h-.39v-.395h-.333v.395h-.189v.268h.19v.88c0 .322.176.44.46.44h.262v-.273h-.203c-.14 0-.186-.05-.186-.167v-.88h.39ZM27.452 60.809a.618.618 0 0 0-.476.208v-.182h-.33v1.589h.33v-.888c0-.292.16-.442.403-.442.244 0 .4.15.4.442v.888h.328v-.937c.003-.444-.278-.678-.655-.678ZM29.731 60.835v.231a.68.68 0 0 0-.554-.257c-.421 0-.755.323-.755.814 0 .49.334.827.75.827a.693.693 0 0 0 .56-.262v.236h.334v-1.589h-.335Zm-.485 1.33c-.247 0-.485-.2-.485-.542s.238-.529.485-.529.485.194.485.534-.235.536-.485.536ZM32.438 60.809c-.232 0-.458.121-.557.314-.11-.207-.323-.314-.575-.314a.612.612 0 0 0-.473.208v-.182h-.331v1.589h.33v-.888c0-.292.16-.442.404-.442.244 0 .4.15.4.442v.888h.329v-.888c0-.292.16-.442.403-.442.244 0 .4.15.4.442v.888h.328v-.937c0-.444-.284-.678-.658-.678ZM33.554 61.242v.276h1.194v-.276h-1.194ZM35.552 62.159V60.42h-.332v2.004h1.014v-.265h-.682ZM37.707 60.835v.231a.681.681 0 0 0-.554-.257c-.42 0-.755.323-.755.814 0 .49.334.827.75.827a.69.69 0 0 0 .56-.262v.236h.334v-1.589h-.335Zm-.484 1.33c-.247 0-.485-.2-.485-.542s.238-.529.485-.529.484.194.484.534-.235.536-.484.536ZM39.186 60.809c-.456 0-.816.32-.816.82 0 .498.346.82.8.82.454 0 .83-.322.83-.82 0-.5-.358-.82-.814-.82Zm-.014 1.355c-.25 0-.465-.176-.465-.536 0-.36.224-.534.473-.534.25 0 .482.174.482.534 0 .36-.243.536-.49.536ZM40.604 61.265c0-.107.093-.18.27-.18.177 0 .287.096.3.235h.328c-.018-.318-.255-.511-.619-.511-.377 0-.615.205-.615.459 0 .582.929.403.929.715 0 .11-.1.19-.293.19-.183 0-.308-.107-.32-.236h-.342c.014.288.285.513.667.513.383 0 .613-.2.613-.47-.015-.574-.918-.395-.918-.715ZM41.916 61.242v.276h1.194v-.276h-1.194ZM44.502 62.156c-.4 0-.69-.286-.69-.738s.29-.736.69-.736c.241 0 .432.1.54.314h.4c-.155-.391-.518-.6-.939-.6-.568 0-1.03.424-1.03 1.024 0 .6.462 1.024 1.03 1.024.421 0 .784-.208.939-.6h-.4c-.108.21-.299.312-.54.312ZM47.026 60.835v.231a.681.681 0 0 0-.555-.257c-.42 0-.754.323-.754.814 0 .49.334.827.75.827a.691.691 0 0 0 .56-.262v.236h.334v-1.589h-.335Zm-.485 1.33c-.246 0-.485-.2-.485-.542s.239-.529.485-.529c.247 0 .485.194.485.534s-.235.536-.485.536ZM49.733 60.809c-.232 0-.46.121-.558.314-.11-.207-.322-.314-.575-.314a.61.61 0 0 0-.472.208v-.182h-.331v1.589h.33v-.888c0-.292.16-.442.404-.442.244 0 .4.15.4.442v.888h.328v-.888c0-.292.16-.442.404-.442.244 0 .4.15.4.442v.888h.328v-.937c.001-.444-.284-.678-.658-.678ZM51.702 60.809a.688.688 0 0 0-.558.263v-.782h-.33v2.134h.33v-.23a.685.685 0 0 0 .558.256c.42 0 .75-.338.75-.827 0-.49-.325-.814-.75-.814Zm-.073 1.355c-.25 0-.485-.193-.485-.536s.238-.534.485-.534c.248 0 .488.185.488.529 0 .344-.237.541-.486.541h-.002ZM53.493 60.809c-.456 0-.816.32-.816.82 0 .498.345.82.8.82.455 0 .83-.322.83-.82 0-.5-.359-.82-.814-.82Zm-.015 1.355c-.25 0-.465-.176-.465-.536 0-.36.224-.534.473-.534.25 0 .482.174.482.534 0 .36-.244.536-.49.536ZM55.836 60.29v.767a.739.739 0 0 0-.55-.25c-.424 0-.758.323-.758.814 0 .49.334.827.755.827a.664.664 0 0 0 .554-.265v.239h.334v-2.134l-.335.002Zm-.484 1.874c-.247 0-.485-.2-.485-.541 0-.342.238-.529.485-.529.246 0 .484.194.484.534s-.234.536-.484.536ZM56.775 60.204a.21.21 0 1 0-.002.42.21.21 0 0 0 .002-.42Zm-.168.631v1.589h.33v-1.589h-.33ZM58.572 60.835v.231a.68.68 0 0 0-.554-.257c-.42 0-.755.323-.755.814 0 .49.334.827.75.827a.69.69 0 0 0 .56-.262v.236h.334v-1.589h-.335Zm-.485 1.33c-.246 0-.484-.2-.484-.542s.238-.529.484-.529c.247 0 .485.194.485.534s-.235.536-.485.536ZM16.51 53.27c-.45 0-.87.113-1.218.363v-.28h-1.09v5.211h1.154V55.51c.02-.771.546-1.095 1.154-1.095a1.168 1.168 0 0 1 1.154 1.147v3h1.166v-3.075c0-1.322-.978-2.218-2.32-2.218ZM23.73 51.267v2.513a2.611 2.611 0 0 0-1.553-.51c-1.5 0-2.718 1.208-2.718 2.688 0 1.48 1.217 2.692 2.718 2.692a2.59 2.59 0 0 0 1.585-.531v.45h1.123v-7.302H23.73ZM22.177 57.5a1.544 1.544 0 1 1 1.543-1.543 1.532 1.532 0 0 1-1.543 1.543ZM28.196 53.27c-1.512 0-2.718 1.2-2.718 2.678a2.708 2.708 0 1 0 2.718-2.679Zm0 4.22a1.532 1.532 0 1 1 .02-3.063 1.532 1.532 0 0 1-.02 3.064ZM35.422 56.709a1.486 1.486 0 0 1-1.344.782 1.53 1.53 0 0 1-1.44-2.125 1.532 1.532 0 0 1 1.44-.94c.62 0 1.029.292 1.313.636l.881-.656c-.482-.637-1.3-1.137-2.204-1.137-1.511 0-2.718 1.2-2.718 2.679a2.695 2.695 0 0 0 2.718 2.7c1.06 0 1.973-.583 2.404-1.48l-1.05-.46ZM39.392 53.27a2.206 2.206 0 0 0-1.144.312v-2.315h-1.164v7.297h1.154v-3.023c0-.771.546-1.126 1.154-1.126a1.167 1.167 0 0 1 1.155 1.147v3h1.165v-3.075c0-1.322-.976-2.218-2.32-2.218ZM43.168 51.643a.574.574 0 1 0 .577.563c0-.292-.273-.563-.577-.563Zm-.588 1.71v5.211h1.165v-5.212H42.58ZM46.922 53.27c-.45 0-.87.113-1.217.363v-.28h-1.092v5.211h1.155V55.51c.02-.771.546-1.095 1.154-1.095a1.168 1.168 0 0 1 1.154 1.147v3h1.166v-3.075c0-1.322-.976-2.218-2.32-2.218ZM54.157 53.352v.46a2.715 2.715 0 0 0-1.617-.543c-1.49 0-2.707 1.21-2.707 2.69s1.219 2.69 2.707 2.69a2.66 2.66 0 0 0 1.617-.53v.45h1.091v-5.217h-1.091Zm-1.617 4.15a1.544 1.544 0 1 1 1.438-.949 1.531 1.531 0 0 1-1.438.947v.002Z" fill="#000"/><path d="M59.874 54.437v1.188h1.858c.168 0 .336.01.483.02v1.022c-.336.428-1.05.772-1.953.772-1.595 0-2.854-1.25-2.854-2.784 0-1.533 1.26-2.773 2.792-2.773.692 0 1.437.282 1.91.679l.786-.928a4.315 4.315 0 0 0-2.696-.97c-2.225 0-4.02 1.783-4.02 3.992 0 2.21 1.795 3.995 4.022 3.995 1.616 0 2.718-.74 3.264-1.563v-2.65h-3.592ZM67.052 53.27c-1.512 0-2.72 1.2-2.72 2.678a2.708 2.708 0 1 0 2.72-2.679Zm0 4.22a1.533 1.533 0 1 1 .023-3.065 1.533 1.533 0 0 1-.023 3.066Z" fill="#BE2026"/><path d="M12.186 53.352v5.212h1.166v-5.212h-1.166Z" fill="#000"/><path d="M11.51 51.483c.695 0 1.258.656 1.258.656s-.563.657-1.257.657c-.695 0-1.26-.657-1.26-.657s.565-.656 1.26-.656Z" fill="#F2797B"/><path d="M12.347 50.792c.49.488.421 1.347.421 1.347s-.866.07-1.356-.419c-.49-.488-.422-1.347-.422-1.347s.866-.069 1.357.419Z" fill="#EB4544"/><path d="M14.026 51.483c-.695 0-1.258.656-1.258.656s.563.657 1.258.657c.694 0 1.257-.657 1.257-.657s-.563-.656-1.257-.656Z" fill="#8C181B"/><path d="M13.19 50.792c-.491.488-.422 1.347-.422 1.347s.866.07 1.357-.419c.49-.488.421-1.347.421-1.347s-.865-.069-1.356.419Z" fill="#A81E22"/><path d="M13.43 50.89c0 .69-.662 1.25-.662 1.25s-.66-.559-.66-1.25c0-.69.66-1.25.66-1.25s.661.56.661 1.25Z" fill="#BE2026"/></svg>';
}
if (!isset($logo_png)) {
    $logo_png = $base_url."images/logo.png";
}

$parent_li = 'pr-50 inline-flex items-center relative font-medium text-14';
$parent_li_a = 'block text-black hover:text-secondary';
?>
<div class='static left-0 z-9999 top-0 w-full transition-all duration-200 bg-opacity-30'
     :class='{"shadow-sm bg-primary bg-opacity-100": !atTop, "": atTop}'>
    <div class="container relative flex items-center">
        <div class='flex justify-between items-center w-full'>
            <a href="#" class='logo max-w-48 lg:max-w-80'>
                <img class='block xl:hidden w-full h-auto transition duration-500 ease-in-out' src="<?php echo $logo_png; ?>"/>
                <span class="hidden xl:block">
                    <?php echo $logo ?>
                </span>
            </a>
            <ul class='xl:inline-flex hidden relative z-1 menu-item'>
                <?php foreach ($menu as $key => $item) {
                    ?>
                    <li class="<?php echo $key == 0 ? 'current-menu-item' : ''; ?> <?php echo $parent_li ?>">
                        <a class="<?php echo $parent_li_a ?>" href="<?php echo $item['link'] ?>">
                            <?php echo $item['title'] ?>
                        </a>
                    </li>
                <?php } ?>
            </ul>
            <div class="box-right flex justify-center items-center">
                <div class="relative mr-16 hidden md:block">
                    <input type="search" class="bg-white border border-secondary py-6 pl-20 pr-30 max-w-192 lg:max-w-210 outline-none"
                           placeholder="Search">
                    <div class="absolute top-8 right-10">
                        <svg class="cursor-pointer" width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8Zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6Z" fill="#000"/></svg>
                    </div>
                </div>


                <a href="<?php echo $link_menu['url'] ?>" class="btn btn-download flex">
                    <span class=""><?php echo $label_menu ?></span>
                    <span class="lg:ml-8">
                        <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m8 10.667 2.667-3.334h-2V2.667H7.333v4.666h-2L8 10.667Z" fill="#fff"/><path d="M13.333 12H2.667V7.333H1.333V12c0 .735.598 1.333 1.334 1.333h10.666c.736 0 1.334-.598 1.334-1.333V7.333h-1.334V12Z" fill="#fff"/></svg>
                    </span>
                </a>

                <div @click.away="activeSearch=false" class="block md:hidden ml-8">
                    <div @click.prevent="activeSearch=!activeSearch" class="search">
                        <span class="cursor-pointer"><svg width="16" height="16" fill="none"><path d="M8 14A6 6 0 107 1a6 6 0 001 13zM15 16l-3-4" stroke="#fff" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                    </div>
                    <div style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.1);" :class="{'hidden': !activeSearch, '': activeSearch}" class="shadow-xl bg-white py-8 pl-8 pr-3rem absolute rounded-full z-10 right-0 top-3rem w-full sm:w-4/6 lg:w-2/5 xl:w-1/3">
                        <form action="#" method="get">
                            <input name="s" id="s" value="" placeholder="Search" type="text" class="w-full h-2rem md:h-2_3rem bg-white focus:outline-none outline-none focus:border-primary rounded-99 border border-black border-opacity-5 py-5 px-16 text-16 text-black placeholder-primary placeholder-opacity-50">
                            <input type="hidden" name="post_type" value="product">
                            <button class="focus:outline-none absolute right-0_5rem top-1/2 transform -translate-y-1/2">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M32 16C32 7.16344 24.8366 0 16 0C7.16344 0 0 7.16344 0 16C0 24.8366 7.16344 32 16 32C24.8366 32 32 24.8366 32 16Z" fill="#6D0303"></path>
                                    <path d="M23.0199 23.0198L20.3199 20.3198" stroke="#fff" stroke-width="1.08" stroke-miterlimit="10" stroke-linecap="square"></path>
                                    <path d="M10.6 14.3801C10.6 13.3776 10.9982 12.4161 11.7071 11.7072C12.416 10.9983 13.3775 10.6001 14.38 10.6001" stroke="#fff" stroke-width="1.08" stroke-miterlimit="10"></path>
                                    <path d="M14.3799 20.3199C17.6605 20.3199 20.3199 17.6605 20.3199 14.3799C20.3199 11.0994 17.6605 8.43994 14.3799 8.43994C11.0994 8.43994 8.43994 11.0994 8.43994 14.3799C8.43994 17.6605 11.0994 20.3199 14.3799 20.3199Z" stroke="white" stroke-width="1.08" stroke-miterlimit="10" stroke-linecap="square"></path>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>

                <div class="ml-8 xl:hidden menu-icon">
                    <a class='w-34 flex justify-center items-end flex-col h-34 rounded-99' href="#menu">
                        <div class='h-3 w-24 my-2 rounded-8 bg-secondary'></div>
                        <div class='h-3 w-20 my-2 rounded-8 bg-secondary'></div>
                        <div class='h-3 w-16 my-2 rounded-8 bg-secondary'></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<nav class="xl:hidden relative bg-black-1 block" id="menu">
    <ul>
        <?php foreach ($menu as $key => $item) {
            ?>
            <li class="<?php echo $parent_li ?>">
                <a class="<?php echo $parent_li_a ?>"
                   href="<?php echo $item['link'] ?>"><?php echo $item['title'] ?></a>
            </li>
        <?php } ?>
    </ul>
</nav>
