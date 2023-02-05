<?php
namespace Be\Theme\Ev\Config;

/**
 * @BeConfig("主题")
 */
class Theme
{

    /**
     * @BeConfigItem("主色调",
     *     driver="FormItemColorPicker")
     */
    public string $majorColor = '#57B33E';

    /**
     * @BeConfigItem("主色调",
     *     driver="FormItemColorPicker")
     */
    public string $minorColor = '#02121E';

    /**
     * @BeConfigItem("字体大小",
     *     driver="FormItemInputNumberInt")
     */
    public int $fontSize = 16;

    /**
     * @BeConfigItem("背景颜色",
     *     driver="FormItemColorPicker")
     */
    public string $backgroundColor = '#FFFFFF';

    /**
     * @BeConfigItem("字体颜色",
     *     driver="FormItemColorPicker")
     */
    public string $fontColor = '#253745';

    /**
     * @BeConfigItem("超链接颜色",
     *     driver="FormItemColorPicker")
     */
    public string $linkColor = '#57B33E';

    /**
     * @BeConfigItem("超链接悬停颜色",
     *     driver="FormItemColorPicker")
     */
    public string $linkHoverColor = '#253745';

}
