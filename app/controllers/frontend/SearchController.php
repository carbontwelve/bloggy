<?php namespace App\Controllers\Frontend;

use App\Controllers\BaseController;
use \Bloggy\Repositories\PageRepositoryInterface;
use View;
use Input;

/**
 * Class SearchController
 * @package App\Controllers\Frontend
 */
class SearchController extends BaseController {

    private $records = array();

    /**
     * @var \Bloggy\Repositories\DbPageRepository
     */
    protected $page;

    public function __construct( PageRepositoryInterface $pageServiceProvider )
    {
        $this->page = $pageServiceProvider;
    }

    public function find()
    {
        return View::make('frontend.search')
            ->with('searchResults', $this->records)
            ->with('searchTerm', Input::get('s'));
    }

}
