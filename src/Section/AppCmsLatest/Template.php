<?php

namespace Be\Theme\Ev\Section\AppCmsLatest;

use Be\Be;
use Be\Theme\Section;

class Template extends Section
{

    public array $positions = ['center'];

    private function css()
    {
        echo '<style type="text/css">';
        echo $this->getCssBackgroundColor('app-cms-latest');
        echo $this->getCssPadding('app-cms-latest');
        echo $this->getCssMargin('app-cms-latest');

        echo '#' . $this->id . ' .app-cms-latest {';
        echo 'box-shadow: 0px 3px 15px 0px rgb(0 0 0 / 10%);';
        echo '}';

        echo '#' . $this->id . ' .app-cms-latest-title {';
        echo 'font-size: 1.5rem;';
        echo 'font-weight: bold;';
        echo '}';

        echo '#' . $this->id . ' .app-cms-article-title {';
        echo 'display: block;';
        echo 'color: var(--font-color);';
        echo 'font-size: 1.1rem;';
        echo '}';

        echo '#' . $this->id . ' .app-cms-article-title:hover {';
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
        if (count($articles) === 0) {
            return;
        }

        $this->css();

        echo '<div class="app-cms-latest">';

        echo '<div class="app-cms-latest-title">';
        echo $this->config->title;
        echo '</div>';

        echo '<div class="be-mt-125">';
        $i = 0;
        foreach ($articles as $article) {

            echo '<div';
            if ($i > 0) {
                echo ' class="be-mt-200"';
            }
            echo '>';

            echo '<a class="app-cms-article-title" href="';
            echo beUrl('Cms.Article.detail', ['id'=> $article->id]);
            echo '" title="';
            echo $article->title;
            echo '">';
            echo $article->title;
            echo '</a>';

            echo '</div>';

            echo '<div class="be-mt-50">';
            echo '<span class="be-c-999"><i class="bi-calendar"></i></span>';
            echo '<span class="be-pl-50 be-c-999">'. date('F j, Y', strtotime($article->publish_time)) . '</span>';
            echo '</div>';

            $i++;
        }
        echo '</div>';


        echo '</div>';
    }

}

