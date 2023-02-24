<?php
namespace Be\Theme\Ev\Section\AppCompanyContact;

/**
 * @BeConfig("联系我们", icon="el-icon-phone-outline")
 */
class Config
{

    /**
     * @BeConfigItem("是否启用",
     *     driver = "FormItemSwitch")
     */
    public int $enable = 1;

    /**
     * @BeConfigItem("背景图像（左）",
     *     driver="FormItemStorageImage"
     * )
     */
    public string $backgroundImage = '';

    /**
     * @BeConfigItem("背景图像（右）",
     *     driver="FormItemStorageImage"
     * )
     */
    public string $overlayImage = '';

    /**
     * @BeConfigItem("图像",
     *     driver="FormItemStorageImage"
     * )
     */
    public string $image = '';

    /**
     * @BeConfigItem("内容标题",
     *     driver = "FormItemInput"
     * )
     */
    public string $title = 'Visit our coffee shops';

    /**
     * @BeConfigItem("内容详细",
     *     driver = "FormItemInputTextArea"
     * )
     */
    public string $description = 'There are people who can’t start their day without having a freshly brewed cup of coffee and we understand them.';

    /**
     * @BeConfigItem("内边距 （手机端）",
     *     driver = "FormItemInput",
     *     description = "上右下左（CSS padding 语法）"
     * )
     */
    public string $paddingMobile = '4rem 0';

    /**
     * @BeConfigItem("内边距 （平板端）",
     *     driver = "FormItemInput",
     *     description = "上右下左（CSS padding 语法）"
     * )
     */
    public string $paddingTablet = '5rem 0';

    /**
     * @BeConfigItem("内边距 （电脑端）",
     *     driver = "FormItemInput",
     *     description = "上右下左（CSS padding 语法）"
     * )
     */
    public string $paddingDesktop = '6rem 0';

    /**
     * @BeConfigItem("外边距 （手机端）",
     *     driver = "FormItemInput",
     *     description = "上右下左（CSS margin 语法）"
     * )
     */
    public string $marginMobile = '0';

    /**
     * @BeConfigItem("外边距 （平板端）",
     *     driver = "FormItemInput",
     *     description = "上右下左（CSS margin 语法）"
     * )
     */
    public string $marginTablet = '0';

    /**
     * @BeConfigItem("外边距 （电脑端）",
     *     driver = "FormItemInput",
     *     description = "上右下左（CSS margin 语法）"
     * )
     */
    public string $marginDesktop = '0';


    public function __construct()
    {
        $wwwUrl = \Be\Be::getProperty('Theme.Ev')->getWwwUrl();

        $this->backgroundImage = $wwwUrl . '/images/app-company-contact/bg.png';
        $this->overlayImage = $wwwUrl . '/images/app-company-contact/overlay.png';
        $this->image = $wwwUrl . '/images/app-company-contact/image.png';

    }

}
