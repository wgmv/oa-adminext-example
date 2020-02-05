<?php


namespace wgmv\AdminExtensionExample\Controllers\Admin;


class OaAdminExtExampleSingleController extends \OxidEsales\Eshop\Application\Controller\Admin\AdminDetailsController
{

    protected $_sThisTemplate = "oaadminext_test_calc_single.tpl";

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