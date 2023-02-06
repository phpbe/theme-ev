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
        if ($this->config->enable === 0) {
            return;
        }

        $this->css();

        echo '<div class="app-cms-article-detail">';

        if ($this->page->article->image !== '') {
            echo '<div class="app-cms-article-detail-image">';
            echo '<img src="' . $this->page->article->image . '" alt="' . $this->page->article->title . '">';
            echo '</div';
        }

        echo '<div class="be-mt-200">';
        echo $this->page->article->description;
        echo '</div>';

        echo '<div class="be-mt-200">';
        echo 'Tags: ';
        foreach ($this->page->article->tags as $tag) {
            echo '<a class="be-mt-50 be-ml-50" href="';
            echo beUrl('Cms.Article.search', ['tag' => $tag]);
            echo '" title="' . $tag . '">';
            echo $tag;
            echo '</a>';
        }
        echo '</div>';

        echo '</div>';
    }
}

