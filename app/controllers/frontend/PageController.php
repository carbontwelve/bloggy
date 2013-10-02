<?php namespace App\Controllers\Frontend;

use App\Controllers\BaseController;

/**
 * Class DashboardController
 * @package App\Controllers\Admin
 */
class PageController extends BaseController {

    public function home()
    {
        /*
        $numberOfCategories = Classification::getTaxonomyTermProvider()
            ->countTaxonomies('category');

        $numberOfTags = Classification::getTaxonomyTermProvider()
            ->countTaxonomies('post_tag');

        return $this->adminView( 'dashboard', array(
            'numberOfCategories' => $numberOfCategories,
            'numberOfTags'       => $numberOfTags
        ) );
        */
    }
}
