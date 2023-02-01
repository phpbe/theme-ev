<?php

namespace Be\Theme\Ev\Section\Header;

use Be\Theme\Section;

class Template extends Section
{
    public array $positions = ['north'];

    private function css()
    {
        $configTheme = \Be\Be::getConfig('Theme.Ev.Theme');
        echo '<style type="text/css">';

        echo '#' . $this->id . '{';
        echo 'position: absolute;';
        echo 'background: transparent;';
        echo 'width: 100%;';
        echo 'z-index: 10;';
        echo '}';


        echo '#' . $this->id . ' .header {';
        echo 'border-bottom: #FFFFFF1C 1px solid;';
        echo '}';


        // ------------------------------------------------------------------------------------------------------------- LOGO
        echo '#' . $this->id . ' .header-logo {';
        echo 'line-height: 100px;';
        echo '}';

        echo '#' . $this->id . ' .header-logo img {';
        echo 'vertical-align: middle;';
        echo 'width: ' . $this->config->mobileLogoWidth . 'px;';
        echo '}';
        // ============================================================================================================= LOGO



        // ------------------------------------------------------------------------------------------------------------- 菜单
        echo '.header-menu {';
        echo 'display: none;';
        echo '}';

        echo '.header-menu ul {';
        echo 'padding: 0;';
        echo 'margin: 0;';
        echo '}';

        echo '.header-menu li {';
        echo 'list-style: none;';
        echo '}';

        echo '.header-menu-lv1-ul {';
        echo 'position: relative;';
        echo '}';

        echo '.header-menu-lv1-li {';
        echo 'display: inline-block;';
        echo 'padding: 0;';
        echo 'position: relative;';
        echo '}';

        echo '.header-menu-lv1-a {';
        echo 'height: 100px;';
        echo 'line-height: 100px;';
        echo 'padding: 0 1rem;';
        echo 'color: #ccc;';
        echo 'font-size: 1.5rem;';
        echo '}';


        echo '.header-menu-lv1-li-active .header-menu-lv1-a,';
        echo '.header-menu-lv1-a:hover {';
        //echo 'color: var(--major-color);';
        echo 'color: #fff;';
        echo '}';

        echo '.header-menu-lv2-ul {';
        echo 'border-top: var(--major-color) 2px solid;';
        echo 'position: absolute;';
        echo 'top: 80px;';
        echo 'min-width: 240px;';
        echo 'background-color: #fff;';
        echo 'opacity: 0;';
        echo 'transition: all 0.5s ease;';
        echo 'transform-origin: 0 0;';
        echo 'transform: rotateX(-90deg);';
        echo 'padding: .25rem 0 !important;';
        echo '}';

        echo '.header-menu-lv1-li:hover .header-menu-lv2-ul {';
        echo 'opacity: 1;';
        echo 'transform: rotateX(0)';
        echo '}';

        echo '.header-menu-lv2-li {';
        echo 'padding: 0 1.5rem;';
        echo '}';

        echo '.header-menu-lv2-a {';
        echo 'display: block;';
        echo 'color: var(--minor-color);';
        echo 'padding: 1rem 0;';
        echo 'line-height: 1;';
        echo 'border-bottom: #eee 1px solid;';
        echo 'position: relative;';
        echo 'font-size: 1.25rem;';
        echo '}';

        echo '.header-menu-lv2-a:before {';
        echo 'content: \'\';';
        echo 'position: absolute;';
        echo 'left: 0;';
        echo 'right: 0;';
        echo 'height: 1px;';
        echo 'bottom: 0;';
        echo 'background-color: var(--major-color);';
        echo 'transition: all 0.3s linear;';
        echo 'transform: scaleX(0);';
        echo '}';

        echo '.header-menu-lv2-a:hover:before {';
        echo 'transform: scaleX(1);';
        echo '}';

        echo '.header-menu-lv2-li-active header-menu-lv2-a, ';
        echo '.header-menu-lv2-a:hover {';
        echo 'color: var(--major-color);';
        echo '}';
        // ============================================================================================================= 菜单



        // ------------------------------------------------------------------------------------------------------------- 手机商 菜单按钮
        echo '.header-toggle {';
        echo 'display: block;';
        echo 'height: 100px;';
        echo 'line-height: 100px;';
        echo 'color: #fff;';
        echo 'cursor: pointer;';
        echo '}';

        echo '.header-toggle-icon,';
        echo '.header-toggle-icon:before,';
        echo '.header-toggle-icon:after {';
        echo 'display: inline-block;';
        echo 'width: 28px;';
        echo 'height: 2px;';
        echo 'background-color: #fff;';
        echo 'transition: all 0.3s ease;';
        echo '}';

        echo '.header-toggle-icon {';
        echo 'position: relative;';
        echo '}';

        echo '.header-toggle-icon:before,';
        echo '.header-toggle-icon:after {';
        echo 'position: absolute;';
        echo 'left: 0;';
        echo 'content: \'\';';
        echo '}';

        echo '.header-toggle-icon:before {';
        echo 'top: -8px;';
        echo '}';

        echo '.header-toggle-icon:after {';
        echo 'top: 8px;';
        echo '}';

        echo '.js-open-drawer-menu .header-toggle-icon {';
        echo 'background-color: transparent;';
        echo '}';

        echo '.js-open-drawer-menu .header-toggle-icon:before {';
        echo 'top: 0;';
        echo 'transform: rotate3d(0, 0, 1, 45deg);';
        echo '}';

        echo '.js-open-drawer-menu .header-toggle-icon:after {';
        echo 'top: 0;';
        echo 'transform: rotate3d(0, 0, 1, -45deg);';
        echo '}';
        // ============================================================================================================= 手机商 菜单按钮



        // 电脑端
        echo '@media (min-width: 1200px) {';
        echo '.header-logo img {';
        echo 'width: ' . $this->config->logoWidth . 'px;';
        echo '}';

        echo '.header-menu {';
        echo 'display: block;';
        echo '}';

        echo '.header-contact-us {';
        echo 'display: block;';
        echo '}';

        echo '.header-toggle {';
        echo 'display: none;';
        echo '}';

        echo '}';
















        // ============================================================================================================= 手机端
        echo '@media (max-width: 992px) {';

        echo '#' . $this->id . ' .header-icon {';
        echo 'display: inline-block;';
        echo 'border: none;';
        echo 'background-repeat: no-repeat;';
        echo 'background-position: center center;';
        echo 'cursor: pointer;';
        echo '}';

        echo '#' . $this->id . ' .header-icon-menu {';
        echo 'width: 36px;';
        echo 'height: 36px;';
        echo 'background-size: 36px 36px;';
        echo 'background-image: url("data:image/svg+xml,%3csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 16 16\'%3e%3cpath fill=\'' . str_replace('#', '%23', $configTheme->fontColor) . '\' d=\'M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z\'/%3e%3c/svg%3e");';
        echo '}';

        echo '}';
        // ============================================================================================================= 手机端


        // ============================================================================================================= 电脑端
        echo '@media (min-width: 992px) {';

        echo '}';

        // ------------------------------------------------------------------------------------------------------------- 菜单
        echo '#' . $this->id . ' .header-desktop-menu {';
        echo 'flex: 1 1 auto;';
        echo 'padding-left: 5rem;';
        echo 'position: relative;';
        echo 'z-index: 100;';
        //echo 'font-weight: 300;';
        echo '}';

        echo '#' . $this->id . ' .header-desktop-menu-lv1 {';
        echo 'margin: 0;';
        echo 'padding: 0;';
        echo 'text-align: right;';
        echo '}';

        echo '#' . $this->id . ' .header-desktop-menu-lv1-item,';
        echo '#' . $this->id . ' .header-desktop-menu-lv1-item-with-dropdown {';
        echo 'list-style: none;';
        echo 'display: inline-block;';
        echo 'padding: 0;';
        echo 'margin: 0 3rem 0 0;';
        echo 'position: relative;';
        echo 'height: 3rem;';
        echo 'line-height: 3rem;';
        echo 'text-align: left;';
        echo '}';

        echo '#' . $this->id . ' .header-desktop-menu-lv1-item-active > .header-desktop-menu-lv1-item-link {';
        echo 'color: var(--major-color);';
        echo '}';

        echo '#' . $this->id . ' .header-desktop-menu-lv1-item-link {';
        echo 'color: #fff;';
        echo 'transition: all 0.3s ease;';
        echo 'display: inline-block;';
        echo 'height: 1.75rem;';
        echo 'line-height: 1.75rem;';
        echo 'font-size: .75rem;';
        echo 'font-weight: 600;';
        echo '}';

        echo '#' . $this->id . ' .header-desktop-menu-lv1-item-link:hover {';
        echo 'color: var(--major-color);';
        echo 'text-decoration: none;';
        echo '}';

        echo '#' . $this->id . ' .header-desktop-menu-lv2 {';
        echo 'margin: 0;';
        echo 'padding: 0;';
        echo 'position: absolute;';
        echo 'left: -.5rem;';
        echo 'background-color: #FFFFFF;';
        echo 'min-width: 170px;';
        echo 'border-top: 2px solid var(--major-color);';
        echo 'box-shadow: 0 0.5rem 1.875rem rgb(0 0 0 / 15%);';
        echo 'z-index: 120;';
        echo 'transition: all 0.2s linear;';
        echo 'transform: translateY(30px);';
        echo 'visibility: hidden;';
        echo 'opacity:0.1;';
        echo '}';

        echo '#' . $this->id . ' .header-desktop-menu-lv1-item-with-dropdown:hover .header-desktop-menu-lv2 {';
        echo 'visibility: visible;';
        echo 'opacity:1;';
        echo 'transform: translateY(-1px)';
        echo '}';

        echo '#' . $this->id . ' .header-desktop-menu-lv2-item {';
        echo 'list-style: none;';
        echo 'padding: 0 2rem;';
        echo '}';

        echo '#' . $this->id . ' .header-desktop-menu-lv2-item-active > .header-desktop-menu-lv2-item-link {';
        echo 'color: var(--major-color);';
        echo '}';

        echo '#' . $this->id . ' .header-desktop-menu-lv2-item:hover {';
        echo 'background-color: #fafafa;';
        echo '}';

        echo '#' . $this->id . ' .header-desktop-menu-lv2-item-link {';
        echo 'transition: all 0.3s ease;';
        echo 'display: block;';
        echo 'height: 2.5rem;';
        echo 'line-height: 2.5rem;';
        echo 'font-size: .75rem;';
        echo 'font-weight: 600;';
        echo 'color: ' . $configTheme->fontColor . ';';
        echo '}';

        echo '#' . $this->id . ' .header-desktop-menu-lv2-item-link:hover {';
        echo 'color: var(--major-color);';
        echo 'text-decoration: none;';
        echo '}';
        // ------------------------------------------------------------------------------------------------------------- 菜单

        echo '#' . $this->id . ' .header-desktop-contact-us {';
        echo 'flex: 0 1 auto;';
        echo 'padding-top: .5rem;';
        echo '}';


        echo '}';
        // ============================================================================================================= 电脑端
        echo '</style>';
    }


    public function display()
    {
        if ($this->config->enable === 0) {
            return;
        }

        $beUrl = beUrl();
        $wwwUrl = \Be\Be::getProperty('Theme.Ev')->getWwwUrl();

        $this->css();

        echo '<div class="header">';
        echo '<div class="be-container">';

        echo '<div class="be-row">';

        echo '<div class="be-col-auto">';
        echo '<div class="header-logo">';
        echo '<a href="' . $beUrl . '">';
        if ($this->config->logo === '') {
            echo '<img src="' . $wwwUrl . '/images/header/logo.png">';
        } else {
            echo '<img src="' . $this->config->logo . '">';
        }
        echo '</a>';
        echo '</div>';
        echo '</div>';

        echo '<div class="be-col">';
        echo '</div>';

        echo '<div class="be-col-auto">';
        echo '<div class="header-menu">';
        echo '<ul class="header-menu-lv1-ul">';
        $menu = \Be\Be::getMenu('North');
        $menuTree = $menu->getTree();
        $menuActiveId = $menu->getActiveId();
        foreach ($menuTree as $item) {
            $hasSubItem = false;
            if (isset($item->subItems) && is_array($item->subItems) && count($item->subItems) > 0) {
                $hasSubItem = true;
            }

            $active = false;
            if ($hasSubItem) {
                foreach ($item->subItems as &$subItem) {
                    if ($item->id === $menuActiveId) {
                        $subItem->active = true;
                        $active = true;
                        break;
                    }
                }
                unset($subItem);
            } else {
                if ($item->id === $menuActiveId) {
                    $active = true;
                }
            }

            echo '<li class="header-menu-lv1-li';
            if ($active) {
                echo ' header-menu-lv1-li-active';
            }
            echo '">';

            $url = 'javascript:void(0);';
            if ($item->route) {
                if ($item->params) {
                    $url = beUrl($item->route, $item->params);
                } else {
                    $url = beUrl($item->route);
                }
            } else {
                if ($item->url) {
                    if ($item->url === '/') {
                        $url = $beUrl;
                    } else {
                        $url = $item->url;
                    }
                }
            }

            echo '<a class="header-menu-lv1-a" href="' . $url . '"';
            if ($item->target === '_blank') {
                echo ' target="_blank"';
            }
            echo '>' . $item->label;
            if ($hasSubItem) {
                echo ' <i class="bi-chevron-down"></i>';
            }
            echo '</a>';


            if ($hasSubItem) {
                echo '<ul class="header-menu-lv2-ul">';
                foreach ($item->subItems as $subItem) {
                    echo '<li class="header-menu-lv2-li';
                    if (isset($subItem->active) && $subItem->active) {
                        echo ' header-menu-lv2-li-active';
                    }
                    echo '">';

                    $url = 'javascript:void(0);';
                    if ($subItem->route) {
                        if ($subItem->params) {
                            $url = beUrl($subItem->route, $subItem->params);
                        } else {
                            $url = beUrl($subItem->route);
                        }
                    } else {
                        if ($subItem->url) {
                            if ($subItem->url === '/') {
                                $url = $beUrl;
                            } else {
                                $url = $subItem->url;
                            }
                        }
                    }

                    echo '<a class="header-menu-lv2-a" href="' . $url . '"';
                    if ($subItem->target === '_blank') {
                        echo ' target="_blank"';
                    }
                    echo '>' . $subItem->label . '</a>';

                    echo '</li>';
                }
                echo '</ul>';
            }
            echo '</li>';
        }

        echo '</ul>';
        echo '</div>'; // header-menu
        echo '</div>';

        echo '<div class="be-col">';
        echo '</div>';

        if ($this->config->contactUsText !== '') {
            echo '<div class="be-col-auto">';
            echo '<div class="header-contact-us">';
            echo '<a href="' . $this->config->contactUsLink . '" class="be-btn be-btn-major">' . $this->config->contactUsText . '</a>';
            echo '</div>';
            echo '</div>';
        }

        echo '<div class="be-col-auto">';
        echo '<div class="header-toggle" onclick="toggleDrawerMenu();">';
        echo '<i class="header-toggle-icon"></i>';
        echo '</div>';
        echo '</div>';

        echo '</div>'; // be-row

        echo '</div>';
        echo '</div>';
    }

}
