<?php

namespace Be\Theme\Ev\Section\Footer;

/**
 * @BeConfig("底部")
 */
class Config
{

    /**
     * @BeConfigItem("是否启用",
     *     driver = "FormItemSwitch")
     */
    public int $enable = 1;

    /**
     * @BeConfigItem("版权信息",
     *     driver = "FormItemTinymce"
     * )
     */
    public string $copyright = 'Copyright &copy;2023. All rights reserved.';

    /**
     * @BeConfigItem("内边距 （手机端）",
     *     driver = "FormItemInput",
     *     description = "上右下左（CSS padding 语法）"
     * )
     */
    public string $paddingMobile = '2rem 0 1rem 0';

    /**
     * @BeConfigItem("内边距 （平板端）",
     *     driver = "FormItemInput",
     *     description = "上右下左（CSS padding 语法）"
     * )
     */
    public string $paddingTablet = '2rem 0 1rem 0';

    /**
     * @BeConfigItem("内边距 （电脑端）",
     *     driver = "FormItemInput",
     *     description = "上右下左（CSS padding 语法）"
     * )
     */
    public string $paddingDesktop = '2rem 0 1rem 0';

    /**
     * @BeConfigItem("子项",
     *     driver = "FormItemsConfigs",
     *     items = "return [
     *          \Be\Theme\Ev\Section\Footer\Item\Contact::class,
     *          \Be\Theme\Ev\Section\Footer\Item\Menu::class,
     *          \Be\Theme\Ev\Section\Footer\Item\Subscribe::class,
     *          \Be\Theme\Ev\Section\Footer\Item\RichText::class,
     *     ]"
     * )
     */
    public array $items = [
        ['name' => 'Contact'],
        ['name' => 'Menu'],
        ['name' => 'Subscribe'],
    ];

    public function __icon()
    {
        return '<svg viewBox="0 0 20 20" focusable="false" aria-hidden="true"><path d="M1 2a1 1 0 0 1 1-1h2v2H3v1H1V2zm17-1a1 1 0 0 1 1 1v2h-2V3h-1V1h2zm1 16.5V11H1v6.5A1.5 1.5 0 0 0 2.5 19h15a1.5 1.5 0 0 0 1.5-1.5zM19 6v3h-2V6h2zM3 9V6H1v3h2zm11-8v2h-3V1h3zM9 3V1H6v2h3z"></path></svg>';
    }

}
