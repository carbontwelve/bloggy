<?php namespace App\Controllers\Backend;

use Bloggy\Facades\Classification;
use Bloggy\Repositories\Classification\TaxonomicUnits\Eloquent\TaxonomicUnitNotValidException;
use Input;
use Redirect;
use Session;

/**
 * Class TaxonomicUnitAdminController
 *
 * @author  Simon Dann <simon@photogabble.co.uk>
 * @since   0.0.2
 * @package Carbontwelve\BloggyKernel\Controllers\Backend
 */

class ArticleAdminController extends \Carbontwelve\Admin\Controllers\Backend\AdminBaseController
{

    /**
     * Class Init
     */
    public function __construct()
    {
        // I do this first as the AdminBaseController __construct() sets up breadcrumbs and stuff
        parent::__construct();

        // Lets add the class base breadcrumb here
        $this->getBreadcrumbProvider()->addBreadcrumb(
            array( 'href' => route('administration.articles.index'), 'text' => 'Articles' )
        );
    }

    public function index()
    {
        $articles = array();

        return $this->adminView( 'articles.index', array(
            'articles' => $articles
        ));
    }

}
