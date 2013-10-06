<?php namespace App\Controllers\Backend;

use Carbontwelve\Admin\Controllers\Backend\AdminBaseController;

/**
 * Class DashboardController
 * @package App\Controllers\Admin
 */
class DashboardController extends AdminBaseController {

    private $widgets;

    public function __construct()
    {

    }

    public function index()
    {
        $numberOfCategories = 0;
        $numberOfTags = 0;

        return $this->adminView( 'dashboard', array(
            'numberOfCategories' => $numberOfCategories,
            'numberOfTags'       => $numberOfTags
        ) );
    }
}
