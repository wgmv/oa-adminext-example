<?php
namespace wgmv\AdminExtensionExample\Controllers\Admin;

/**
 * Class OxpsPaymorrowAdminErrorLog
 */
class OaAdminExtExampleList extends \OxidEsales\Eshop\Application\Controller\Admin\AdminListController
{

    /**
     * Current class template.
     *
     * @var string
     */
    protected $_sThisTemplate = 'oaadminext_test_calc_list.tpl';

//    public function render()
//    {
//        var_dump('yo ho mexico');
//    }

    /**
     * Get Paymorrow Error Log contents
     *
     * @return float - result of calc
     */
    public function calc() : float
    {
        return 1+2;
    }
}
