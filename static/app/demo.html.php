<?php
/**
 * @var $components \Letweb\UI\Component
 * @var $groups []
 */
$activeTab = isset($_GET['tab']) ? $_GET['tab'] : 0;
?>
<style>
    [x-cloak] {
        display: none;
    }
</style>
<div x-data="mainTab()" x-init="init(<?php echo $activeTab; ?>)">
    <div class="flex p-8 items-center sticky top-0 z-50 bg-white">
        <div class="pr-8">
            <img style="max-width: 100px;" src="./images/letweb-logo.svg" alt="letweb">
        </div>
        <div class="pl-8">
            <ul class="flex">
                <?php
                $index = 0;
                foreach ($groups as $slug => $group) {
                    ?>
                    <li>
                        <a @click.prevent="activeTab = <?php echo $index; ?>; history.pushState({tab: <?php echo $index; ?>}, '<?php echo $group['title'] . ' - '; ?>' + document.title, '?tab=<?php echo $index; ?>');"
                           href="?tab=<?php echo $index; ?>"
                           :class="{'text-text font-bold bg-primary text-white': activeTab == <?php echo $index; ?>}"
                           class="block hover:bg-accent hover:text-primary rounded-3 transition-all px-16 py-8 cursor-pointer">
                            <?php echo $group['title']; ?>
                        </a>
                    </li>
                    <?php
                    $index++;
                }
                ?>
            </ul>
        </div>

    </div>
    <div class="gap-30">
        <div class="demo-content md:col-span-5 py-16 px-24">
            <?php
            $index = 0;
            foreach ($groups as $slug => $group) {
                $components = $group['components'];
                $description = $group['description'];
                ?>
                <div x-show="activeTab == <?php echo $index; ?>" x-cloak>
                    <?php
                    if (!empty($description)) {
                        ?>
                        <div class="rounded-sm mb-16 p-16 border border-solid border-accent">
                            <?php echo $description; ?>
                        </div>
                        <?php
                    }
                    if (empty($components)) {
                        ?>
                        <p>Chưa có component nào trong group <?php echo $group['title']; ?></p>
                        <?php
                    } else {
                        ?>
                        <?php
                        foreach ($components as $component) {
                            ?>
                            <div class="mb-32">
                                <?php $component->renderTabs(); ?>
                            </div>
                            <hr class="mb-32">
                            <?php
                        }
                        ?>
                        <?php
                    }
                    $index++;
                    ?>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>
