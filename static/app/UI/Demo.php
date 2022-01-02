<?php

namespace Letweb\UI;

class Demo
{
    protected $components;
    protected $groups;
    protected $currentGroup = '';

    function addGroup($slug, $title)
    {
        $this->groups[$slug] = [
            'title' => $title,
            'description' => '',
            'components' => []
        ];
        $this->currentGroup = $slug;
        return $this;
    }

    function groupExist($slug)
    {
        return isset($this->groups[$slug]);
    }

    function addComponentToGroup(Component $component, $slug = null)
    {
        if ($slug == null) {
            $slug = $this->currentGroup;
        }
        if ($this->groupExist($slug)) {
            array_push($this->groups[$slug]['components'], $component);
        }
        return $this;
    }

    function makeUpName($slug)
    {
        $slug = str_replace('-', ' ', $slug);
        return ucwords($slug);
    }

    function renderDir($dir)
    {
        if (!is_dir($dir)) return false;
        $folders = array_diff(scandir($dir), ['.', '..']);
        foreach ($folders as $folder) {
            $this->addGroup($folder, $this->makeUpName($folder));
            $files = glob($dir . '/' . $folder . '/*.php');

            $info = $this->getGroupInfo($dir . '/' . $folder);
            $this->groups[$folder] = array_merge($this->groups[$folder], $info);

            foreach ($files as $file) {
                $this->addComponentToGroup(new Component($file), $folder);
            }
        }
        $this->render();
        return true;
    }

    function getGroupInfo($path)
    {
        $infoFile = $path . '/info.json';
        $info = [];
        if (is_file($infoFile)) {
            $info = json_decode(file_get_contents($infoFile), true);
            if (!$info) $info = [];
        }
        return $info;
    }

    function render()
    {
        lw_include_template_part(LWS_ROOT_PATH . '/app/demo.html.php', [
            'groups' => $this->groups
        ]);
    }
}