<?php

namespace Letweb\UI;

class Component
{
    protected $view;
    protected $data = [];

    function __construct($view, $data = [])
    {
        $this->view = $view;
        $this->data = $data;
    }

    function render()
    {
        lw_include_template_part($this->view, $this->data);
    }

    function renderTabs(){
        lw_include_template_part(LWS_ROOT_PATH.'/app/component-tabs.html.php', [
            'component' => $this
        ]);
    }

    function viewSourceCode()
    {
        echo htmlspecialchars(file_get_contents($this->view));
    }

    function sourceCodeUrl()
    {
        echo '#';
    }

    function filePath(){
        return str_replace(LWS_ROOT_PATH, '', $this->view);
    }

    function downloadUrl()
    {
        $relativePath = str_replace(LWS_ROOT_PATH, '', $this->view);
        echo './app/download.html.php?file='.$relativePath;
    }
}