<?php
namespace Be\Theme\Ev\Section\Footer\Item;

/**
 * @BeConfig("联系我们", icon="el-icon-fa fa-edit")
 */
class Contact
{

    /**
     * @BeConfigItem("是否启用",
     *     driver = "FormItemSwitch")
     */
    public int $enable = 1;

    /**
     * @BeConfigItem("LOGO",
     *     driver="FormItemStorageImage"
     * )
     */
    public string $logo = '';

    /**
     * @BeConfigItem("描述",
     *     driver="FormItemInput"
     * )
     */
    public string $description = 'Lorem ipsum dolor sit amet, consectet adipiscing elit, sed do eiusmod';

    /**
     * @BeConfigItem("地址",
     *     driver="FormItemInput"
     * )
     */
    public string $address = 'Shenzhen, Guangdong, China';

    /**
     * @BeConfigItem("电话",
     *     driver="FormItemInput"
     * )
     */
    public string $phone = '(+86)1234-123456';

    /**
     * @BeConfigItem("邮箱",
     *     driver="FormItemInput"
     * )
     */
    public string $email = 'support@domain.com';


    public function __construct()
    {
        $wwwUrl = \Be\Be::getProperty('Theme.Ev')->getWwwUrl();

        $this->logo = $wwwUrl . '/images/logo.png';
    }
}
