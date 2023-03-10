<?php

namespace Be\Theme\Ev\Config\Page\System\Home;

class index
{

    public int $north = 1;

    public array $northSections = [
        [
            'name' => 'Theme.Ev.Header',
        ],
        [
            'name' => 'Theme.Ev.HeaderSlider',
        ],
    ];


    public int $middle = 1;

    public array $middleSections = [
        [
            'name' => 'Theme.Ev.AppCmsLatestArticles',
        ],
    ];


    public array $southSections = [
        [
            'name' => 'Theme.Ev.Footer',
        ],
    ];

    /**
     * @BeConfigItem("HEAD头标题",
     *     description="HEAD头标题，用于SEO",
     *     driver = "FormItemInput"
     * )
     */
    public string $title = 'Electric Vehicle';

    /**
     * @BeConfigItem("Meta描述",
     *     description="填写页面内容的简单描述，用于SEO",
     *     driver = "FormItemInput"
     * )
     */
    public string $metaDescription = '';

    /**
     * @BeConfigItem("Meta关键词",
     *     description="填写页面内容的关键词，用于SEO",
     *     driver = "FormItemInput"
     * )
     */
    public string $metaKeywords = '';

    /**
     * @BeConfigItem("页面标题",
     *     description="展示在页面内容中的标题，一般与HEAD头标题一致，两者相同时可不填写此项",
     *     driver = "FormItemInput"
     * )
     */
    public string $pageTitle = '';


}
