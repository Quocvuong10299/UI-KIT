<?php
/**
 * @var $component \Letweb\UI\Component
 */
    $tab_title_classes = 'px-16 py-8 rounded-3 mx-4';
?>
<div x-data="{activeTab: 0}">
    <div class="flex justify-end mb-48">
        <input type="text" readonly onclick="this.focus();this.select()"  class="font-code text-right w-256 border border-accent rounded-3 p-8 text-12 z-20" value="<?php echo $component->filePath(); ?>">
        <a :class="{'font-bold text-primary': activeTab == 0}" @click.prevent="activeTab = 0" href="#" class="<?php echo $tab_title_classes; ?>">View UI</a>
        <a :class="{'font-bold text-primary': activeTab == 1}" @click.prevent="activeTab = 1" href="#" class="flex <?php echo $tab_title_classes; ?>">
            <svg  style="width: 24px;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
            </svg>
            <span class="ml-8">View source</span>
        </a>
        <a target="_blank" href="<?php echo $component->downloadUrl(); ?>" class="flex <?php echo $tab_title_classes; ?>">
            <svg style="width: 24px;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10" />
            </svg>
            <span class="ml-8">Download</span>
        </a>
    </div>
    <div>
        <div x-show="activeTab == 0">
            <?php $component->render(); ?>
        </div>
        <div x-show="activeTab == 1">
            <textarea readonly onclick="this.focus();this.select()"  class="h-320 rounded-8 bg-black bg-opacity-80 p-16 text-white w-full font-code"><?php $component->viewSourceCode(); ?></textarea>
        </div>
    </div>
</div>