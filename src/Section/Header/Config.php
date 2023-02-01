<?php
namespace Be\Theme\Ev\Section\Header;

/**
 * @BeConfig("头部", ordering="1")
 */
class Config
{

    /**
     * @BeConfigItem("LOGO",
     *     driver="FormItemStorageImage"
     * )
     */
    public string $logo = '';

    /**
     * @BeConfigItem("LOGO宽度（像素）",
     *     driver="FormItemInputNumberInt"
     * )
     */
    public int $logoWidth = 180;

    /**
     * @BeConfigItem("LOGO宽度（手机端）",
     *     driver="FormItemInputNumberInt"
     * )
     */
    public int $mobileLogoWidth = 140;

    /**
     * @BeConfigItem("菜单下拉效果",
     *     driver = "FormItemSelect",
     *     keyValues = "return ['default' => '默认', 'fade' => '淡入淡出', 'cube' => '方块'];"
     * )
     */
    public string $mennDropdownEffect = 'default';

    /**
     * @BeConfigItem("联系我们按钮",
     *     driver = "FormItemInput"
     * )
     */
    public string $contactUsText = 'CONTACT US';

    /**
     * @BeConfigItem("联系我们按钮链接",
     *     driver = "FormItemInput"
     * )
     */
    public string $contactUsLink = '#';


    public function __icon() {
        return '<svg viewBox="0 0 20 20" focusable="false" aria-hidden="true"><path d="M1 2.5V9h18V2.5A1.5 1.5 0 0 0 17.5 1h-15A1.5 1.5 0 0 0 1 2.5zM2 19a1 1 0 0 1-1-1v-2h2v1h1v2H2zm17-1a1 1 0 0 1-1 1h-2v-2h1v-1h2v2zM1 14v-3h2v3H1zm16-3v3h2v-3h-2zM6 17h3v2H6v-2zm8 0h-3v2h3v-2z"></path></svg>';
    }

}
