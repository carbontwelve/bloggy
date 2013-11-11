<?php namespace App\Controllers\Frontend;

use App\Controllers\BaseController;
use \Bloggy\Repositories\PageRepositoryInterface;
use View;

/**
 * Class DashboardController
 * @package App\Controllers\Admin
 */
class PageController extends BaseController {

    /**
     * @var \Bloggy\Repositories\DbPageRepository
     */
    protected $page;

    public function __construct( PageRepositoryInterface $pageServiceProvider )
    {
        $this->page = $pageServiceProvider;
    }

    public function home()
    {
        return View::make('frontend.index');
    }

}
