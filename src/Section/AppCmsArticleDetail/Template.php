<?php

namespace Be\Theme\Ev\Section\AppCmsArticleDetail;

use Be\Be;
use Be\Theme\Section;

class Template extends Section
{

    public array $positions = ['center'];

    private function css()
    {
        echo '<style type="text/css">';
        echo $this->getCssPadding('app-cms-article-detail');
        echo $this->getCssMargin('app-cms-article-detail');

        echo '#' . $this->id . ' .app-cms-article-detail-image {';
        echo '}';

        echo '#' . $this->id . ' .app-cms-article-detail-image img {';
        echo 'max-width: 100%;';
        echo '}';

        echo '</style>';
    }

    public function display()
    {
        if ($this->config->enable) {
            $this->css();
            ?>
            <div class="app-cms-article-detail-image">
                <img src="<?php
                if ($this->page->article->image === '') {
                    echo \Be\Be::getProperty('App.Cms')->getWwwUrl() . '/article/images/no-image-m.jpg';
                } else {
                    echo $this->page->article->image;
                }
                ?>" alt="<?php echo $this->page->article->title; ?>">
            </div>

            <div class="be-mt-200">
                <?php echo $this->page->article->description; ?>
            </div>

            <div class="be-mt-200">
                Tags:
                <?php
                foreach ($this->page->article->tags as $tag) {
                    ?>
                    <a class="be-mt-50 be-ml-50" href="<?php echo beUrl('Cms.Article.search', ['tag'=> $tag]); ?>" title="<?php echo $tag; ?>">
                        <?php echo $tag; ?>
                    </a>
                    <?php
                }
                ?>
            </div>
            <?php
        }
    }
}

