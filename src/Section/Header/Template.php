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
        echo 'line-height: 5rem;';
        echo '}';

        echo '#' . $this->id . ' .header-logo img {';
        echo 'vertical-align: middle;';
        echo 'width: ' . $this->config->mobileLogoWidth . 'px;';
        echo '}';
        // ============================================================================================================= LOGO



        // ------------------------------------------------------------------------------------------------------------- 菜单
        echo '#' . $this->id . ' .header-menu {';
        echo 'display: none;';
        echo '}';

        echo '#' . $this->id . ' .header-menu ul {';
        echo 'padding: 0;';
        echo 'margin: 0;';
        echo '}';

        echo '#' . $this->id . ' .header-menu li {';
        echo 'list-style: none;';
        echo '}';

        echo '#' . $this->id . ' .header-menu-lv1-ul {';
        echo 'position: relative;';
        echo '}';

        echo '#' . $this->id . ' .header-menu-lv1-li {';
        echo 'display: inline-block;';
        echo 'padding: 0;';
        echo 'position: relative;';
        echo '}';

        echo '#' . $this->id . ' .header-menu-lv1-a {';
        echo 'height: 5rem;';
        echo 'line-height: 5rem;';
        echo 'padding: 0 1rem;';
        echo 'color: #fff;';
        echo 'font-size: .75rem;';
        echo 'font-weight: 600;';
        echo '}';


        echo '#' . $this->id . ' .header-menu-lv1-li-active .header-menu-lv1-a,';
        echo '#' . $this->id . ' .header-menu-lv1-a:hover {';
        echo 'color: var(--major-color);';
        echo '}';

        echo '#' . $this->id . ' .header-menu-lv2-ul {';
        echo 'border-top: var(--major-color) 2px solid;';
        echo 'position: absolute;';
        echo 'top: 4rem;';
        echo 'min-width: 180px;';
        echo 'background-color: #fff;';
        echo 'opacity: 0;';
        echo 'transition: all 0.5s ease;';
        echo 'transform-origin: 0 0;';
        echo 'transform: rotateX(-90deg);';
        echo 'padding: .25rem 0 !important;';
        echo '}';

        echo '#' . $this->id . ' .header-menu-lv1-li:hover .header-menu-lv2-ul {';
        echo 'opacity: 1;';
        echo 'transform: rotateX(0)';
        echo '}';

        echo '#' . $this->id . ' .header-menu-lv2-li {';
        echo 'padding: 0 1.5rem;';
        echo '}';

        echo '#' . $this->id . ' .header-menu-lv2-a {';
        echo 'display: block;';
        echo 'color: var(--minor-color);';
        echo 'padding: 1rem 0;';
        echo 'line-height: 1;';
        echo 'border-bottom: #eee 1px solid;';
        echo 'position: relative;';
        echo 'font-size: .75rem;';
        echo 'font-weight: 600;';
        echo '}';

        echo '#' . $this->id . ' .header-menu-lv2-a:before {';
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

        echo '#' . $this->id . ' .header-menu-lv2-a:hover:before {';
        echo 'transform: scaleX(1);';
        echo '}';

        echo '#' . $this->id . ' .header-menu-lv2-li-active header-menu-lv2-a, ';
        echo '#' . $this->id . ' .header-menu-lv2-a:hover {';
        echo 'color: var(--major-color);';
        echo '}';
        // ============================================================================================================= 菜单


        // ------------------------------------------------------------------------------------------------------------- 联系我们按钮
        echo '#' . $this->id . ' .header-contact-us {';
        echo 'display: none;';
        echo 'height: 5rem;';
        echo 'line-height: 5rem;';
        echo '}';
        // ============================================================================================================= 联系我们按钮



        // ------------------------------------------------------------------------------------------------------------- 手机商 菜单按钮
        echo '.header-toggle {';
        echo 'display: block;';
        echo 'height: 5rem;';
        echo 'line-height: 5rem;';
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

        echo '#' . $this->id . ' .header-menu {';
        echo 'display: block;';
        echo '}';

        echo '#' . $this->id . ' .header-contact-us {';
        echo 'display: block;';
        echo '}';

        echo '#' . $this->id . ' .header-toggle {';
        echo 'display: none;';
        echo '}';

        echo '}';

        echo '</style>';
    }


    public function display()
    {
        if ($this->config->enable === 0) {
            return;
        }

        $beUrl = beUrl();

        $this->css();

        echo '<div class="header">';
        echo '<div class="be-container">';

        echo '<div class="be-row">';

        echo '<div class="be-col-auto">';
        echo '<div class="header-logo">';
        echo '<a href="' . $beUrl . '"><img src="' . $this->config->logo . '" alt=""></a>';
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
