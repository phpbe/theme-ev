<?php

namespace Be\Theme\Ev\Section\AppCmsLatestArticles;

use Be\Be;
use Be\Theme\Section;

class Template extends Section
{

    public array $positions = ['center'];

    private function css()
    {
        echo '<style type="text/css">';
        echo $this->getCssBackgroundColor('app-cms-latest-articles');
        echo $this->getCssPadding('app-cms-latest-articles');
        echo $this->getCssMargin('app-cms-latest-articles');

        echo '#' . $this->id . ' .app-cms-latest-articles-header {';
        echo 'text-align: center;';
        echo 'color: var(--major-color);';
        echo '}';

        echo '#' . $this->id . ' .app-cms-latest-articles-title {';
        echo 'text-align: center;';
        echo 'font-size: 2.5rem;';
        echo 'font-weight: 700;';
        echo '}';

        echo '#' . $this->id . ' .app-cms-latest-articles-description {';
        echo 'text-align: center;';
        echo 'color: #737A80;';
        echo '}';

        $cols = $this->config->cols;
        if ($cols < 1) {
            $cols = 1;
        } elseif ($this->config->cols > 3) {
            $cols = 3;
        }

        $itemWidthMobile = '100%';
        $itemWidthTablet = $cols > 1 ? '50%' : '100%';
        if ($cols > 2) {
            $itemWidthDesktop = (100 / 3) . '%';
        } elseif ($cols === 2) {
            $itemWidthDesktop = '50%';
        } else {
            $itemWidthDesktop = '100%';
        }
        echo $this->getCssSpacing('app-cms-latest-articles-items', 'app-cms-latest-articles-item', $itemWidthMobile, $itemWidthTablet, $itemWidthDesktop);

        echo '#' . $this->id . ' .app-cms-latest-articles-items-container {';
        echo 'overflow: hidden;';
        echo '}';


        echo '#' . $this->id . ' .app-cms-latest-articles-item-image {';
        echo 'display: block;';
        echo '}';

        echo '#' . $this->id . ' .app-cms-latest-articles-item-image img {';
        echo 'max-width: 100%;';
        echo 'border-radius: 1rem;';
        echo '}';

        echo '#' . $this->id . ' .app-cms-latest-articles-item-title {';
        echo 'display: block;';
        echo 'margin-top: 1rem;';
        echo 'font-size: 1.25rem;';
        echo 'font-weight: bold;';
        echo 'color: var(--font-color);';
        echo '}';

        echo '#' . $this->id . ' .app-cms-latest-articles-item-title:hover {';
        echo 'color: var(--major-color);';
        echo '}';
        echo '</style>';
    }

    public function display()
    {
        if ($this->config->enable === 0) {
            return;
        }

        $articles = Be::getService('App.Cms.Article')->getLatestArticles($this->config->quantity);

        $this->css();

        echo '<div class="app-cms-latest-articles">';
        if ($this->position === 'middle') {
            echo '<div class="be-container">';
        }

        echo '<div class="be-row">';
        echo '<div class="be-col-0 be-lg-col-6"></div>';
        echo '<div class="be-col-24 be-lg-col-12">';

        echo '<div class="app-cms-latest-articles-header">';
        echo $this->config->header;
        echo '</div>';

        echo '<div class="be-mt-100 app-cms-latest-articles-title">';
        echo $this->config->title;
        echo '</div>';

        echo '<div class="be-mt-100 app-cms-latest-articles-description">';
        echo $this->config->description;
        echo '</div>';

        echo '</div>';
        echo '<div class="be-col-0 be-lg-col-6"></div>';
        echo '</div>';

        echo '<div class="be-mt-200">';
        echo '<div class="app-cms-latest-articles-items-container">';
        echo '<div class="app-cms-latest-articles-items">';
        $i = 0;
        foreach ($articles as $article) {
            echo '<div class="app-cms-latest-articles-item">';
            ?>
                <a class="app-cms-latest-articles-item-image" href="<?php echo beUrl('Cms.Article.detail', ['id'=> $article->id]); ?>" title="<?php echo $article->title; ?>">
                    <img src="<?php
                    if ($article->image === '') {
                        echo \Be\Be::getProperty('App.Cms')->getWwwUrl() . '/article/images/no-image-m.jpg';
                    } else {
                        echo $article->image;
                    }
                    ?>" alt="<?php echo $article->title; ?>">
                </a>

                <a class="app-cms-latest-articles-item-title" href="<?php echo beUrl('Cms.Article.detail', ['id'=> $article->id]); ?>" title="<?php echo $article->title; ?>">
                    <?php echo $article->title; ?>
                </a>

                <div class="be-mt-100 be-c-999 be-t-ellipsis-2">
                    <?php echo $article->summary; ?>
                </div>

                <a class="be-d-block be-mt-100 be-fs-90" href="<?php echo beUrl('Cms.Article.detail', ['id'=> $article->id]); ?>" title="<?php echo $article->title; ?>">
                    READ MORE <i class="bi-arrow-right"></i>
                </a>
            <?php
            echo '</div>';
            $i++;
        }
        echo '</div>';
        echo '</div>';
        echo '</div>';

        if ($this->position === 'middle') {
            echo '</div>';
        }

        echo '</div>';
    }

}

