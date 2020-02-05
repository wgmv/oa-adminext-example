<?php


namespace wgmv\AdminExtensionExample\Controllers\Admin;


use OxidEsales\Eshop\Application\Model\Order;
use OxidEsales\Eshop\Core\Model\ListModel;

class OaAdminExtExampleSingleController extends \OxidEsales\Eshop\Application\Controller\Admin\AdminDetailsController
{

    protected $_sThisTemplate = "oaadminext_test_calc_single.tpl";

    /**
     * Get Paymorrow Error Log contents
     */
    public function getOrdersPerDay() : ListModel
    {
        $sql = "SELECT
                     SUBSTRING(oxorderdate, 1, 10) as oxorderdate,
                     COUNT(*) as orderamount,
                     SUM(OXTOTALBRUTSUM) as totalbrutsum
                FROM
                    oxorder
                GROUP BY 
                    SUBSTRING(oxorderdate, 1, 10)";

        $orderList = oxNew(ListModel::class);
        $orderList->init(Order::class);
        $orderList->selectString($sql);

        return $orderList;
    }
}