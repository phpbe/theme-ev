<?php
namespace Be\Theme\Ev\Section\HeaderSlider;


/**
 * @BeConfig("首页轮播图", icon="el-icon-video-play", ordering="1")
 */
class Config
{
    /**
     * @BeConfigItem("是否启用",
     *     driver = "FormItemSwitch")
     */
    public int $enable = 1;

    /**
     * @BeConfigItem("背景颜色",
     *     driver = "FormItemColorPicker"
     * )
     */
    public string $backgroundColor = '#02121E';

    /**
     * @BeConfigItem("背景图像",
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
     * @BeConfigItem("内容标题",
     *     driver = "FormItemInput"
     * )
     */
    public string $title = 'Smarter Chargers For Your <span>Electric Vehicle</span>';

    /**
     * @BeConfigItem("内容详细",
     *     driver = "FormItemInputTextArea"
     * )
     */
    public string $description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';

    /**
     * @BeConfigItem("内容按钮",
     *     driver = "FormItemInput"
     * )
     */
    public string $linkText = 'EXPLORE MORE <i class="bi-arrow-right"></i>';

    /**
     * @BeConfigItem("内容按钮链接",
     *     driver = "FormItemInput"
     * )
     */
    public string $linkUrl = '#';

    /**
     * @BeConfigItem("切换效果",
     *     driver = "FormItemSelect",
     *     keyValues = "return ['slide' => '位移', 'fade' => '淡入淡出', 'cube' => '方块', 'coverflow' => '3D流', 'flip' => '3D翻转', 'cards' => '卡片式', 'creative' => '创意性'];"
     * )
     */
    public string $effect = 'fade';

    /**
     * @BeConfigItem("自动播放",
     *     driver = "FormItemSwitch")
     */
    public int $autoplay = 1;

    /**
     * @BeConfigItem("自动播放间隔（毫秒）",
     *     driver = "FormItemInputNumberInt",
     *     ui="return ['form-item' => ['v-show' => 'formData.autoplay === 1']];")
     */
    public int $delay = 5000;

    /**
     * @BeConfigItem("自动播放速度（毫秒）",
     *     driver = "FormItemInputNumberInt",
     *     ui="return ['form-item' => ['v-show' => 'formData.autoplay === 1']];")
     */
    public int $speed = 1000;

    /**
     * @BeConfigItem("循环",
     *     driver = "FormItemSwitch")
     */
    public int $loop = 1;

    /**
     * @BeConfigItem("显示分页器",
     *     driver = "FormItemSwitch")
     */
    public int $pagination = 0;

    /**
     * @BeConfigItem("显示前进后退按钮",
     *     driver = "FormItemSwitch")
     */
    public int $navigation = 0;

    /**
     * @BeConfigItem("前进后退按钮大小（像素）",
     *     driver = "FormItemInputNumberInt",
     *     ui="return ['form-item' => ['v-show' => 'formData.navigation === 1']];")
     */
    public int $navigationSize = 30;

    /**
     * @BeConfigItem("内边距 （手机端）",
     *     driver = "FormItemInput",
     *     description = "上右下左（CSS padding 语法）"
     * )
     */
    public string $paddingMobile = '5rem 0 2rem 0';

    /**
     * @BeConfigItem("内边距 （平板端）",
     *     driver = "FormItemInput",
     *     description = "上右下左（CSS padding 语法）"
     * )
     */
    public string $paddingTablet = '5rem 0 3rem 0';

    /**
     * @BeConfigItem("内边距 （电脑端）",
     *     driver = "FormItemInput",
     *     description = "上右下左（CSS padding 语法）"
     * )
     */
    public string $paddingDesktop = '5rem 0 4rem 0';

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

    /**
     * @BeConfigItem("子项",
     *     driver = "FormItemsMixedConfigs",
     *     items = "return [
     *          \Be\Theme\Ev\Section\HomeSlider\Item\Image::class,
     *     ]"
     * )
     */
    public array $items = [];


    public function __construct()
    {
        $wwwUrl = \Be\Be::getProperty('Theme.Ev')->getWwwUrl();

        //$this->backgroundImage = $wwwUrl . '/images/header-slider-bg.png';

        $this->overlayImage = $wwwUrl . '/images/header-slider/overlay.png';

        $this->items = [
            [
                'name' => 'Image',
                'config' => (object)[
                    'enable' => 1,
                    'image' => $wwwUrl . '/images/header-slider/1.jpg',
                ],
            ],
            [
                'name' => 'Image',
                'config' => (object)[
                    'enable' => 1,
                    'image' => $wwwUrl . '/images/header-slider/2.jpg',
                ],
            ],
            [
                'name' => 'Image',
                'config' => (object)[
                    'enable' => 1,
                    'image' => $wwwUrl . '/images/header-slider/3.jpg',
                ],
            ],
        ];

    }

}
