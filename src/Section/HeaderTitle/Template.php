<?php

namespace Be\Theme\Ev\Section\HeaderTitle;

use Be\Theme\Section;

class Template extends Section
{
    public array $positions = ['north'];

    
    
    private function css()
    {
        echo '<style type="text/css">';
        echo $this->getCssBackgroundColor('header-title');
        echo $this->getCssPadding('header-title');
        echo $this->getCssMargin('header-title');

        echo '#' . $this->id . ' .header-title {';
        if ($this->config->backgroundImage !== '') {
            echo 'background-image: url(' . $this->config->backgroundImage . ');';
            echo 'background-position: 0px 20%;';
            echo 'background-repeat: no-repeat;';
            echo 'background-size: cover;';
        }
        echo '}';

        // 背景图像半透效果
        if ($this->config->backgroundImage !== '') {
            echo '#' . $this->id . ' .header-title {';
            echo 'position: relative;';
            echo '}';

            echo '#' . $this->id . ' .header-title-overlay {';
            echo 'background-color: ' . $this->config->backgroundColor . ';';
            echo 'opacity: 0.85;';
            echo 'position: absolute;';
            echo 'width: 100%;';
            echo 'height: 100%;';
            echo 'left: 0;';
            echo 'top: 0;';
            echo '}';

            echo '#' . $this->id . ' .header-title .be-container {';
            echo 'position: relative;';
            echo '}';
        }

        echo '#' . $this->id . ' .header-title-title {';
        echo 'color: #fff;';
        echo 'font-size: 2rem;';
        echo 'text-align: center;';
        echo '}';

        echo '#' . $this->id . ' .header-title-pathway a {';
        echo 'color: #fff;';
        echo '}';

        echo '#' . $this->id . ' .header-title-pathway a:hover {';
        echo 'color: var(--major-color);';
        echo '}';

        echo '</style>';
    }


    public function display()
    {

        if ($this->config->enable === 0) {
            return;
        }

        $this->css();

        echo '<div class="header-title">';
        echo '<div class="header-title-overlay"></div>';
        echo '<div class="be-container">';

        echo '<h1 class="header-title-title">';
        echo $this->page->pageTitle;
        echo '</h1>';

        echo '<div class="header-title-pathway be-mt-200 be-ta-center">';

        echo '<a href="">Home</a>';
        $menu = \Be\Be::getMenu('North');
        $menuTree = $menu->getTree();
        $menuActiveId = $menu->getActiveId();
        foreach ($menuTree as $item) {
            if ($item->active === 1) {

                echo '<span class="be-px-50 be-c-major"><i class="bi-chevron-right"></i></span>';
                echo '<a href="">' . $item->label . '</a>';

                if (isset($item->subItems) && is_array($item->subItems) && count($item->subItems) > 0) {
                    foreach ($item->subItems as $subItem) {
                        if ($subItem->active === 1) {

                            echo '<a href="">' . $item->label . '</a>';
                        }
                    }
                }
                break;
            }
        }

        echo '</div>';

        echo '</div>';
        echo '</div>';
        
    }

}
