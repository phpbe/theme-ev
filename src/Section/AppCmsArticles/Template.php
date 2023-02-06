<?php

namespace Be\Theme\Ev\Section\AppCmsArticles;

use Be\Be;
use Be\Theme\Section;

class Template extends Section
{

    public array $positions = ['center'];

    private function css()
    {
        echo '<style type="text/css">';
        echo $this->getCssPadding('app-cms-articles');
        echo $this->getCssMargin('app-cms-articles');

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
        echo $this->getCssSpacing('app-cms-articles-items', 'app-cms-articles-item', $itemWidthMobile, $itemWidthTablet, $itemWidthDesktop);

        echo '#' . $this->id . ' .app-cms-articles-items-container {';
        echo 'overflow: hidden;';
        echo '}';

        echo '#' . $this->id . ' .app-cms-articles-image {';
        echo 'display: block;';
        echo '}';

        echo '#' . $this->id . ' .app-cms-articles-image img {';
        echo 'width: 100%;';
        echo '}';

        if ($cols > 1) {
            echo '@media (min-width: 768px) {';
            echo '#' . $this->id . ' .app-cms-articles-image img {';
            echo 'object-fit: cover;';
            echo 'height: 15rem;';
            echo '}';
            echo '}';

            echo '@media (min-width: 992px) {';
            echo '#' . $this->id . ' .app-cms-articles-image img {';
            echo 'height: 20rem;';
            echo '}';
            echo '}';
        }

        echo '#' . $this->id . ' .app-cms-articles-title {';
        echo 'color: var(--font-color);';
        echo 'display: block;';
        echo '}';

        echo '#' . $this->id . ' .app-cms-articles-title:hover {';
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

        echo '<div class="app-cms-articles">';
        ?>
        <div class="app-cms-articles-items-container">
            <div class="app-cms-articles-items">
                <?php
                $i = 0;
                foreach ($this->page->result['rows'] as $article) {
                    ?>
                    <div class="app-cms-articles-item">
                        <a class="app-cms-articles-image" href="<?php echo beUrl('Cms.Article.detail', ['id'=> $article->id]); ?>" title="<?php echo $article->title; ?>">
                            <img src="<?php
                            if ($article->image === '') {
                                echo \Be\Be::getProperty('App.Cms')->getWwwUrl() . '/article/images/no-image-m.jpg';
                            } else {
                                echo $article->image;
                            }
                            ?>" alt="<?php echo $article->title; ?>">
                        </a>

                        <a class="app-cms-articles-title be-mt-100 be-fs-125 be-fw-bold be-lh-200 be-t-ellipsis" href="<?php echo beUrl('Cms.Article.detail', ['id'=> $article->id]); ?>" title="<?php echo $article->title; ?>">
                            <?php echo $article->title; ?>
                        </a>

                        <div class="be-mt-100 be-lh-150 be-c-666 be-t-ellipsis-2">
                            <?php echo $article->summary; ?>
                        </div>

                        <div class="be-mt-150">
                            <a href="<?php echo beUrl('Cms.Article.detail', ['id'=> $article->id]); ?>" title="<?php echo $article->title; ?>">Read more <i class="bi-arrow-right"></i></a>
                        </div>
                    </div>
                    <?php

                    $i++;
                }
                ?>
            </div>
        </div>

        <?php
        $total = $this->page->result['total'];
        $pageSize = $this->page->result['pageSize'];
        $pages = ceil($total / $pageSize);
        if ($pages > 1) {
            $page = $this->page->result['page'];
            if ($page > $pages) $page = $pages;

            $paginationUrl = $this->page->paginationUrl;
            $paginationUrl .= strpos($paginationUrl, '?') === false ? '?' : '&';

            $html = '<nav class="be-mt-300">';
            $html .= '<ul class="be-pagination" style="justify-content: center;">';
            $html .= '<li>';
            if ($page > 1) {
                $url = $paginationUrl;
                $url .= http_build_query(['page' => ($page - 1)]);
                $html .= '<a href="' . $url . '">Previous</a>';
            } else {
                $html .= '<span>Previous</span>';
            }
            $html .= '</li>';

            $from = null;
            $to = null;
            if ($pages < 9) {
                $from = 1;
                $to = $pages;
            } else {
                $from = $page - 4;
                if ($from < 1) {
                    $from = 1;
                }

                $to = $from + 8;
                if ($to > $pages) {
                    $to = $pages;
                }
            }

            if ($from > 1) {
                $html .= '<li><span>...</span></li>';
            }

            for ($i = $from; $i <= $to; $i++) {
                if ($i == $page) {
                    $html .= '<li class="active">';
                    $html .= '<span>' . $i . '</span>';
                    $html .= '</li>';
                } else {
                    $url = $paginationUrl;
                    $url .= http_build_query(['page' => $i]);
                    $html .= '<li>';
                    $html .= '<a href="' . $url . '">' . $i . '</a>';
                    $html .= '</li>';
                }
            }

            if ($to < $pages) {
                $html .= '<li><span>...</span></li>';
            }

            $html .= '<li>';
            if ($page < $pages) {
                $url = $paginationUrl;
                $url .= http_build_query(['page' => ($page + 1)]);
                $html .= '<a href="' . $url . '">Next</a>';
            } else {
                $html .= '<span>Next</span>';
            }
            $html .= '</li>';
            $html .= '</ul>';
            $html .= '</nav>';

            echo $html;
        }
        echo '</div>';
    }
}

