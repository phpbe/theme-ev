<?php

namespace Be\Theme\Ev\Section\AppCompanyContact;

use Be\Be;
use Be\Theme\Section;

class Template extends Section
{

    public array $positions = ['middle', 'center'];

    private function css()
    {
        echo '<style type="text/css">';
        echo $this->getCssPadding('app-company-contact');
        echo $this->getCssMargin('app-company-contact');

        if ($this->config->backgroundImage !== '') {
            echo '#' . $this->id . ' .app-company-contact {';
            echo 'background-color: #FFFFFF;';
            echo 'background-image: url(' . $this->config->backgroundImage . ');';
            echo 'background-position: center right;';
            echo 'background-repeat: no-repeat;';
            echo 'background-size: 10% auto;';
            echo '}';
        }

        if ($this->config->overlayImage !== '') {
            echo '#' . $this->id . ' .app-company-contact {';
            echo 'position: relative;';
            echo '}';

            echo '#' . $this->id . ' .app-company-contact-overlay {';
            echo 'background-image: url(' . $this->config->overlayImage . ');';
            echo 'background-position: 0% 50%;';
            echo 'background-repeat: no-repeat;';
            echo 'background-size: 10% auto;';
            echo 'opacity: .5;';
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

        echo '#' . $this->id . ' .app-company-contact-side-left {';
        echo '}';

        echo '#' . $this->id . ' .app-company-contact-side-left img {';
        echo 'max-width: 100%;';
        echo '}';

        echo '#' . $this->id . ' .app-company-contact-side-right {';
        echo 'display: flex;';
        echo 'align-items: center;';
        echo '}';



        echo '#' . $this->id . ' .app-company-contact-icon-circle {';
        echo 'width: 3rem;';
        echo 'height: 3rem;';
        echo 'padding: .75rem;';
        echo 'border-radius: 50%;';
        echo 'background-color: var(--major-color);';
        echo '}';

        echo '#' . $this->id . ' .app-company-contact-icon {';
        echo 'display: inline-block;';
        echo 'width: 1.5rem;';
        echo 'height: 1.5rem;';
        echo 'background-size: 1.5rem 1.5rem;';
        echo 'background-repeat: no-repeat;';
        echo 'background-position: center center;';
        echo '}';

        echo '#' . $this->id . ' .app-company-contact-icon-phone {';
        echo 'background-image: url("data:image/svg+xml,%3csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 16 16\'%3e%3cpath fill=\'%23fff\' fill-rule=\'evenodd\' d=\'M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z\'/%3e%3c/svg%3e");';
        echo '}';

        echo '#' . $this->id . ' .app-company-contact-icon-email {';
        echo 'background-image: url("data:image/svg+xml,%3csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 16 16\'%3e%3cpath fill=\'%23fff\' d=\'M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z\'/%3e%3c/svg%3e");';
        echo '}';

        echo '#' . $this->id . ' .working-hours-items {';
        echo 'border: #CBBCA4 2px solid;';
        echo 'padding: 3rem 2rem;';
        echo '}';

        echo '#' . $this->id . ' .working-hours-item-title-line {';
        echo 'border-top: #777 1px dotted;';
        echo 'margin: .75rem 1rem 0 1rem;';
        echo '}';

        echo '</style>';
    }

    public function display()
    {
        if ($this->config->enable) {
            $this->css();

            $configCompanyContact = Be::getConfig('App.Company.Contact');
            ?>
            <div class="app-company-contact">
                <div class="app-company-contact-overlay"></div>
                <div class="be-container">
                    <div class="be-row">
                        <div class="be-col-24 be-lg-col app-company-contact-side-left">
                            <img src="<?php echo $this->config->image; ?>" alt="<?php echo $this->config->title; ?>">
                        </div>
                        <div class="be-col-24 be-lg-col-auto"><div class="be-pl-400 be-mt-200"></div></div>
                        <div class="be-col-24 be-lg-col app-company-contact-side-right">
                            <div>
                                <div class="title-separator"><div class="title-separator-diamond"></div></div>
                                <div class="be-mt-100 be-fs-300 be-fw-600 title-font"><?php echo $this->config->title; ?></div>
                                <div class="be-mt-200 be-fs-110 be-c-444 be-lh-200"><?php echo $this->config->description; ?></div>
                                <div class="be-row be-mt-200">
                                    <div class="be-col-auto">
                                        <div class="app-company-contact-icon-circle">
                                            <i class="app-company-contact-icon app-company-contact-icon-phone"></i>
                                        </div>
                                    </div>
                                    <div class="be-col-auto">
                                        <div class="be-pl-100 be-pt-60 be-fs-125 be-fw-bold"><?php echo $configCompanyContact->phone; ?></div>
                                    </div>
                                    <div class="be-col-auto">
                                        <div class="be-pl-200">
                                            <div class="app-company-contact-icon-circle">
                                                <i class="app-company-contact-icon app-company-contact-icon-email"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="be-col-auto">
                                        <div class="be-pl-100 be-pt-60 be-fs-125 be-fw-bold"><?php echo $configCompanyContact->email; ?></div>
                                    </div>
                                </div>
                                <div class="working-hours-items be-mt-200">
                                    <div class="be-fs-150 be-fw-bold be-c-777 title-font"><?php echo $configCompanyContact->workingHoursTitle; ?></div>
                                    <div class="be-row be-mt-200">
                                        <div class="be-col-auto"><div class="be-c-777"><?php echo $configCompanyContact->workingHoursMonday; ?></div></div>
                                        <div class="be-col"><div class="be-row working-hours-item-title-line"></div></div>
                                        <div class="be-col-auto"><div class="be-c-777"><?php echo $configCompanyContact->workingHoursMondayRange; ?></div></div>
                                    </div>
                                    <div class="be-row be-mt-200">
                                        <div class="be-col-auto"><div class="be-c-777"><?php echo $configCompanyContact->workingHoursTuesday; ?></div></div>
                                        <div class="be-col"><div class="be-row working-hours-item-title-line"></div></div>
                                        <div class="be-col-auto"><div class="be-c-777"><?php echo $configCompanyContact->workingHoursTuesdayRange; ?></div></div>
                                    </div>
                                    <div class="be-row be-mt-200">
                                        <div class="be-col-auto"><div class="be-c-777"><?php echo $configCompanyContact->workingHoursWednesday; ?></div></div>
                                        <div class="be-col"><div class="be-row working-hours-item-title-line"></div></div>
                                        <div class="be-col-auto"><div class="be-c-777"><?php echo $configCompanyContact->workingHoursWednesdayRange; ?></div></div>
                                    </div>
                                    <div class="be-row be-mt-200">
                                        <div class="be-col-auto"><div class="be-c-777"><?php echo $configCompanyContact->workingHoursThursday; ?></div></div>
                                        <div class="be-col"><div class="be-row working-hours-item-title-line"></div></div>
                                        <div class="be-col-auto"><div class="be-c-777"><?php echo $configCompanyContact->workingHoursThursdayRange; ?></div></div>
                                    </div>
                                    <div class="be-row be-mt-200">
                                        <div class="be-col-auto"><div class="be-c-777"><?php echo $configCompanyContact->workingHoursFriday; ?></div></div>
                                        <div class="be-col"><div class="be-row working-hours-item-title-line"></div></div>
                                        <div class="be-col-auto"><div class="be-c-777"><?php echo $configCompanyContact->workingHoursFridayRange; ?></div></div>
                                    </div>
                                    <div class="be-row be-mt-200">
                                        <div class="be-col-auto"><div class="be-c-777"><?php echo $configCompanyContact->workingHoursSaturday; ?></div></div>
                                        <div class="be-col"><div class="be-row working-hours-item-title-line"></div></div>
                                        <div class="be-col-auto"><div class="be-c-777"><?php echo $configCompanyContact->workingHoursSaturdayRange; ?></div></div>
                                    </div>
                                    <div class="be-row be-mt-200">
                                        <div class="be-col-auto"><div class="be-c-777"><?php echo $configCompanyContact->workingHoursSunday; ?></div></div>
                                        <div class="be-col"><div class="be-row working-hours-item-title-line"></div></div>
                                        <div class="be-col-auto"><div class="be-c-777"><?php echo $configCompanyContact->workingHoursSundayRange; ?></div></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <?php
        }
    }
}

