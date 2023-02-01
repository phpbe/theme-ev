<?php

namespace Be\Theme\Ev\Section\HeaderSlider;

use Be\Be;
use Be\Theme\Section;

class Template extends Section
{

    public array $positions = ['middle', 'center'];

    private function css()
    {
        echo '<style type="text/css">';
        echo $this->getCssPadding('header-slider');
        echo $this->getCssMargin('header-slider');
        echo $this->getCssBackgroundColor('header-slider');

        echo '#' . $this->id . ' .header-slider {';

        echo 'padding-top: 5rem;';

        if ($this->config->backgroundImage !== '') {
            echo 'background-position: center center;';
            echo 'background-repeat: no-repeat;';
            echo 'background-size: cover;';
            echo 'background-image: url(' . $this->config->backgroundImage . ');';
        }
        echo '}';


        if ($this->config->overlayImage !== '') {
            echo '#' . $this->id . ' .header-slider {';
            echo 'position: relative;';
            echo '}';

            echo '#' . $this->id . ' .header-slider-overlay {';

            if ($this->config->backgroundColor !== '') {
                echo 'background-color: ' . $this->config->backgroundColor . ';';
            }

            echo 'background-image: url(' . $this->config->overlayImage . ');';
            echo 'background-position: center center;';
            echo 'background-repeat: no-repeat;';
            echo 'background-size: cover;';
            echo 'opacity: 0.65;';
            echo 'mix-blend-mode: multiply;';
            echo 'position: absolute;';
            echo 'width: 100%;';
            echo 'height: 100%;';
            echo 'left: 0;';
            echo 'top: 0;';
            echo '}';

            echo '#' . $this->id . ' .be-container {';
            echo 'z-index: 9;';
            echo 'position: relative;';
            echo '}';
        }

        echo '#' . $this->id . ' .header-slider-summary {';
        echo 'padding: 6rem 0 4rem 0;';
        echo '}';

        echo '#' . $this->id . ' .header-slider-title {';
        echo 'color: #fff;';
        echo 'font-size: 3rem;';
        echo 'font-weight: 700;';
        echo '}';


        echo '#' . $this->id . ' .header-slider-title span {';
        echo 'background-image:linear-gradient(180deg, #57B33E00 60%, var(--major-color) 0%);';
        echo '}';

        echo '#' . $this->id . ' .header-slider-description {';
        echo 'color: #aaa;';
        echo '}';

        echo '#' . $this->id . ' .header-slider-link a:hover {';
        echo 'transform: translateY(-8px);';
        echo '}';


        echo '@media (max-width: 768px) {';
        echo '#' . $this->id . ' .header-slider-summary {';
        echo 'padding: 4rem 0 2rem 0;';
        echo 'text-align: center;';
        echo '}';

        echo '#' . $this->id . ' .header-slider-title {';
        echo 'font-size: 2rem;';
        echo '}';
        echo '}';



        // ------------------------------------------------------------------------------------------------------------- 轮播图
        echo '#' . $this->id . ' .swiper {';
        echo 'border-radius: 1rem;';
        echo '}';

        echo '#' . $this->id . ' .header-slider-image {';
        echo 'display: block;';
        echo 'width: 100%;';
        echo 'height: 600px;';
        echo 'background-position: center;';
        echo 'background-size: cover;';
        echo 'transition:5s linear 5s;';
        echo 'transform:scale(1,1);';
        echo '}';

        echo '#' . $this->id . ' .swiper-slide-active .header-slider-image,';
        echo '#' . $this->id . ' .swiper-slide-duplicate-active .header-slider-image{';
        echo 'transition:6s linear;';
        echo 'transform:scale(1.1,1.1);';
        echo '}';

        // 电脑端
        echo '@media (max-width: 768px) {';

        echo '#' . $this->id . ' .header-slider-image {';
        echo 'height: 600px;';
        echo 'max-height: 100vh;';
        echo '}';

        echo '}';
        // ============================================================================================================= 轮播图


        echo '</style>';
    }

    public function display()
    {
        if ($this->config->enable) {
            $count = 0;
            foreach ($this->config->items as $item) {
                if ($item['config']->enable) {
                    $count++;
                }
            }

            if ($count === 0) {
                return;
            }

            $this->css();

            echo '<div class="header-slider">';
            echo '<div class="header-slider-overlay"></div>';
            echo '<div class="be-container">';

            echo '<div class="header-slider-summary">';
            echo '<div class="be-row">';
            echo '<div class="be-col-24 be-md-col">';
            echo '<div class="header-slider-title">' . $this->config->title . '</div>';
            echo '</div>';

            echo '<div class="be-col-24 be-md-col-auto"><div class="be-pl-400 be-pt-100"></div></div>';
            echo '<div class="be-col-24 be-md-col">';
            echo '<div class="header-slider-description"><div class="be-pt-100">' . $this->config->description . '</div></div>';
            if ($this->config->linkText !== '') {
                echo '<div class="be-mt-200 header-slider-link">';
                echo '<a href="' . $this->config->linkUrl . '" class="be-fs-75">' . $this->config->linkText . '</a>';
                echo '</div>';
            }
            echo '</div>';
            echo '</div>';
            echo '</div>';

            echo '<div class="swiper be-mt-200">';

            echo '<div class="swiper-wrapper">';
            foreach ($this->config->items as $item) {
                $itemConfig = $item['config'];
                if ($itemConfig->enable) {
                    echo '<div class="swiper-slide">';
                    switch ($item['name']) {
                        case 'Image':
                            echo '<div class="header-slider-image" style="background-image: url(' . $itemConfig->image . ')">';
                            echo '</div>';
                            break;
                    }
                    echo '</div>';
                }
            }
            echo '</div>';

            if ($this->config->pagination && $count > 1) {
                echo '<div class="swiper-pagination"></div>';
            }

            if ($this->config->navigation && $count > 1) {
                echo '<div class="swiper-button-prev"></div>';
                echo '<div class="swiper-button-next"></div>';
            }

            echo '</div>';

            echo '</div>';
            echo '</div>';

            $key = 'Theme:Ev:swiper';
            if (!Be::hasContext($key)) {
                $wwwUrl = Be::getProperty('Theme.Ev')->getWwwUrl();
                echo '<link rel="stylesheet" href="' . $wwwUrl . '/lib/swiper/8.3.2/swiper-bundle.min.css">';
                echo '<script src="' . $wwwUrl . '/lib/swiper/8.3.2/swiper-bundle.min.js"></script>';
            }

            echo '<script>';
            echo '$(".header").addClass("header-float");';

            echo 'new Swiper(".header-slider .swiper", {';

            echo 'effect: \'' . $this->config->effect . '\',';

            if ($count > 1) {
                if ($this->config->loop) {
                    echo 'loop: true,';
                }

                if ($this->config->autoplay) {
                    echo 'autoplay: true,';
                    echo 'delay: ' . $this->config->delay . ',';
                    echo 'speed: ' . $this->config->speed . ',';
                }

                if ($this->config->pagination) {
                    echo 'pagination: {el: \'.swiper-pagination\', clickable :true},';
                }

                if ($this->config->navigation) {
                    echo 'navigation: {nextEl: \'.swiper-button-next\', prevEl: \'.swiper-button-prev\'},';
                }
                echo 'grabCursor : true';
            } else {
                echo 'enabled:false';
            }
            echo '});';
            echo '</script>';
        }
    }
}
