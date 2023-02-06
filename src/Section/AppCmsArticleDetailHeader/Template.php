<?php

namespace Be\Theme\Ev\Section\AppCmsArticleDetailHeader;

use Be\Theme\Section;

class Template extends Section
{
    public array $positions = ['north'];

    public array $routes = ['Cms.Article.detail'];

    private function css()
    {
        echo '<style type="text/css">';
        echo $this->getCssBackgroundColor('app-cms-article-detail-header');
        echo $this->getCssPadding('app-cms-article-detail-header');
        echo $this->getCssMargin('app-cms-article-detail-header');

        echo '#' . $this->id . ' .app-cms-article-detail-header {';
        if ($this->config->backgroundImage !== '') {
            echo 'background-image: url(' . $this->config->backgroundImage . ');';
            echo 'background-position: 0px 20%;';
            echo 'background-repeat: no-repeat;';
            echo 'background-size: cover;';
        }
        echo '}';

        // 背景图像半透效果
        if ($this->config->backgroundImage !== '') {
            echo '#' . $this->id . ' .app-cms-article-detail-header {';
            echo 'position: relative;';
            echo '}';

            echo '#' . $this->id . ' .app-cms-article-detail-header-overlay {';
            echo 'background-color: ' . $this->config->backgroundColor . ';';
            echo 'opacity: 0.85;';
            echo 'position: absolute;';
            echo 'width: 100%;';
            echo 'height: 100%;';
            echo 'left: 0;';
            echo 'top: 0;';
            echo '}';

            echo '#' . $this->id . ' .app-cms-article-detail-header .be-container {';
            echo 'position: relative;';
            echo '}';
        }

        echo '#' . $this->id . ' .app-cms-article-detail-header-title {';
        echo 'color: #fff;';
        echo 'font-size: 2rem;';
        echo 'text-align: center;';
        echo '}';

        echo '</style>';
    }


    public function display()
    {
        if ($this->config->enable === 0) {
            return;
        }

        $this->css();

        echo '<div class="app-cms-article-detail-header">';
        echo '<div class="app-cms-article-detail-header-overlay"></div>';
        echo '<div class="be-container">';

        echo '<h1 class="app-cms-article-detail-header-title">';
        echo $this->page->article->title;
        echo '</h1>';

        echo '<div class="be-mt-200 be-ta-center">';

        echo '<span class="be-c-major"><i class="bi-file-person"></i></span>';
        echo '<span class="be-c-fff be-pl-50">'. $this->page->article->author . '</span>';

        echo '<span class="be-c-major"><i class="bi-calendar be-ml-100"></i></span>';
        echo '<span class="be-c-fff be-pl-50">'. date('F j, Y', strtotime($this->page->article->publish_time)) . '</span>';

        echo '<span class="be-c-major"><i class="bi-folder2 be-ml-100"></i></span>';
        echo '<span class="be-c-fff be-pl-50">'. $this->page->article->author . '</span>';
        echo '</div>';

        echo '</div>';
        echo '</div>';
    }

}
