<?php

namespace Be\Theme\Ev\Section\AppCompanyContactMap;

use Be\Be;
use Be\Theme\Section;

class Template extends Section
{

    public array $positions = ['middle', 'center'];

    private function css()
    {
        echo '<style type="text/css">';
        echo $this->getCssPadding('app-company-contact-map');
        echo $this->getCssMargin('app-company-contact-map');

        echo '#' . $this->id . ' .app-company-contact-map {';
        echo 'height: 450px;';
        echo '}';

        echo '#' . $this->id . ' .app-company-contact-map iframe {';
        echo 'width: 100%;';
        echo 'height: 450px;';
        echo 'filter: brightness( 62% ) contrast( 100% ) saturate( 0% ) blur( 0px ) hue-rotate( 22deg );';
        echo '}';

        echo '</style>';
    }

    public function display()
    {
        if ($this->config->enable) {
            $this->css();

            echo '<div class="app-company-contact-map">';
            if ($this->position === 'middle' && $this->config->width === 'default') {
                echo '<div class="be-container">';
            }

            $configCompanyContact = Be::getConfig('App.Company.Contact');
            echo '<iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="' . beUrl('Company.Contact.' . $configCompanyContact->mapType . 'Map') . '"></iframe>';

            if ($this->position === 'middle' && $this->config->width === 'default') {
                echo '</div>';
            }
            echo '</div>';
        }
    }
}

