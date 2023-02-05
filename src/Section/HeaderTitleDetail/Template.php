<?php

namespace Be\Theme\Cafe\Section\HeaderTitle;

use Be\Theme\Section;

class Template extends Section
{
    public array $positions = ['north'];

    private function css()
    {
        $wwwUrl = \Be\Be::getProperty('Theme.Cafe')->getWwwUrl();

        echo '<style type="text/css">';
        echo $this->getCssBackgroundColor('header-title');
        echo $this->getCssPadding('header-title');

        echo '#' . $this->id . ' .header-title {';
        echo 'background-position: center center;';
        echo 'background-repeat: no-repeat;';
        echo 'background-size: cover;';
        if ($this->config->backgroundImage === '') {
            echo 'background-image: url(' . $wwwUrl . '/images/header-bg.png);';
        } else {
            echo 'background-image: url(' . $this->config->backgroundImage . ');';
        }
        echo '}';

        // ============================================================================================================= 手机端
        echo '@media (max-width: 992px) {';

        echo '#' . $this->id . ' .header-title-container {';
        echo 'text-align: center;';
        echo '}';

        echo '}';
        // ============================================================================================================= 手机端


        // ============================================================================================================= 电脑端
        echo '@media (min-width: 992px) {';

        echo '#' . $this->id . ' .header-title-container {';
        echo 'text-align: left;';
        echo 'width: 50%;';
        echo '}';

        echo '}';
        // ============================================================================================================= 电脑端
        echo '</style>';
    }


    public function display()
    {
        $this->css();
        ?>
        <div class="header-title">
            <div class="be-container">
                <div class="header-title-container">
                    <div class="title-separator"><div class="title-separator-diamond"></div></div>
                    <div class="be-mt-100 be-fs-400 be-fw-600 title-font">
                        <?php
                        if (isset($this->page->pageTitle) && $this->page->pageTitle !== '') {
                            echo $this->page->pageTitle;
                        } elseif (isset($this->page->title) && $this->page->title !== '') {
                            echo $this->page->title;
                        } else {
                            echo 'Page Title';
                        }
                        ?>
                    </div>
                    <div class="be-mt-150">
                        <?php
                        if (isset($this->page->metaDescription) && $this->page->metaDescription !== '') {
                            echo $this->page->metaDescription;
                        } else {
                            echo 'Page description text';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }

}
