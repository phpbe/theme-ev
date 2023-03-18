<?php
namespace Be\Theme\Ev\Section\Video;

use Be\Theme\Section;

class Template extends Section
{
    public array $positions = ['middle', 'center'];

    public function display()
    {
        if ($this->config->enable) {

            echo '<style type="text/css">';
            echo $this->getCssPadding('video');
            echo $this->getCssMargin('video');

            echo '#' . $this->id . ' .video-container {';
            echo 'position: relative;';
            echo 'background-color: var(--minor-color);';
            echo '}';

            echo '#' . $this->id . ' .video-image {';
            echo 'width: 100%;';
            echo 'z-index: 1;';
            echo 'min-height: 300px;';
            echo '}';

            echo '#' . $this->id . ' .video-icon {';
            echo 'z-index: 2;';
            echo 'position: absolute;';
            echo 'top: calc(50% - 2rem);';
            echo 'left: calc(50% - 2rem);';
            echo 'width: 4rem;';
            echo 'height: 4rem;';
            echo 'line-height: 4rem;';
            echo 'text-align: center;';
            echo 'font-size: 2.5rem;';
            echo 'color: #fff;';
            echo 'background-color: var(--major-color);';
            echo 'border-radius: 50%;';
            echo 'opacity: .8;';
            echo 'cursor: pointer;';
            echo 'transition: all .3s ease;';
            echo '}';

            echo '#' . $this->id . ' .video-icon:hover {';
            echo 'top: calc(50% - 2.5rem);';
            echo 'left: calc(50% - 2.5rem);';
            echo 'width: 5rem;';
            echo 'height: 5rem;';
            echo 'line-height: 5rem;';
            echo 'opacity: 1;';
            echo '}';

            echo '#' . $this->id . ' .video-player {';
            echo 'width: 100%;';
            echo 'z-index: 3;';
            echo 'display: none;';
            echo '}';

            echo '</style>';

            echo '<div class="video">';
            echo '<div class="be-container">';
            echo '<div class="video-container">';

            echo '<div class="video-image">';
            if ($this->config->image) {
                echo '<img src="' . $this->config->image . '">';
            }
            echo '</div>';

            echo '<div class="video-icon"><i class="bi-caret-right-fill"></i></div>';

            echo '<div class="video-player">';
            echo '<video>';
            echo '<source src="' . $this->config->video . '" type="video/mp4">';
            echo '</video>';
            echo '</div>';

            echo '</div>';
            echo '</div>';
            echo '</div>';

            echo '<script>';
            echo '$("#' . $this->id . ' .video-icon").click(function(){';
            echo '$(this).fadeOut();';
            echo '$("#' . $this->id . ' .video-player").fadeIn();';
            echo '$("#' . $this->id . ' .video-player video").play();';
            echo '});';
            echo '</script>';
        }
    }
}

