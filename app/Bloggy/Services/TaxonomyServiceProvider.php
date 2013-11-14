<?php namespace Bloggy\Services;

use Illuminate\Support\ServiceProvider;
use Bloggy\Repositories\Classification;
use Bloggy\Repositories\Classification\TaxonomicUnits\Eloquent\TaxonomicUnitProvider;
use Bloggy\Repositories\Classification\Taxons\Eloquent\TaxonsProvider;
use Bloggy\Repositories\Classification\TaxonRelationship\Eloquent\TaxonRelationshipProvider;


/**
 * --------------------------------------------------------------------------
 * TaxonomyServiceProvider
 * --------------------------------------------------------------------------
 *
 * Class TaxonomyServiceProvider
 * @package  Bloggy\Services
 * @author   Simon Dann <simon@photogabble.co.uk>
 *
 */
class TaxonomyServiceProvider extends ServiceProvider{

    /**
     * --------------------------------------------------------------------------
     * Indicates if loading of the provider is deferred.
     * --------------------------------------------------------------------------
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * --------------------------------------------------------------------------
     * Package Init Script
     * --------------------------------------------------------------------------
     */
    public function boot()
    {

    }

    /**
     * --------------------------------------------------------------------------
     * Register the service provider.
     * --------------------------------------------------------------------------
     *
     * @return void
     */
    public function register()
    {
        $this->registerClassificationTaxonomicUnitProvider();
        $this->registerClassificationTaxonProvider();
        $this->registerClassificationTaxonRelationshipProvider();
        $this->registerClassification();
    }

    /**
     * --------------------------------------------------------------------------
     * Get the services provided by the provider.
     * --------------------------------------------------------------------------
     *
     * @return array
     */
    public function provides()
    {
        return array();
    }

    /**
     * --------------------------------------------------------------------------
     * Register TaxonomicUnit Provider Facade
     * --------------------------------------------------------------------------
     * @return void
     * @protected
     */
    protected function registerClassificationTaxonomicUnitProvider()
    {
        $this->app['classification.taxonomicUnit'] = $this->app->share(function($app)
        {
            $model = null; //$app['config']['bloggy::classification.models.taxonomy'];
            return new TaxonomicUnitProvider($model);
        });
    }

    /**
     * --------------------------------------------------------------------------
     * Register Taxon Provider Facade
     * --------------------------------------------------------------------------
     * @return void
     * @protected
     */
    protected function registerClassificationTaxonProvider()
    {
        $this->app['classification.taxon'] = $this->app->share(function($app)
        {
            $model = null; //$app['config']['bloggy::classification.models.taxonomy'];
            return new TaxonsProvider($model);
        });
    }

    /**
     * --------------------------------------------------------------------------
     * Register Taxon Relationship Provider Facade
     * --------------------------------------------------------------------------
     * @return void
     * @protected
     */
    protected function registerClassificationTaxonRelationshipProvider()
    {
        $this->app['classification.taxonRelationship'] = $this->app->share(function($app)
        {
            $model = null; //$app['config']['bloggy::classification.models.taxonomy'];
            return new TaxonRelationshipProvider($model);
        });
    }

    /**
     * --------------------------------------------------------------------------
     * Register Classification Facade
     * --------------------------------------------------------------------------
     * @return void
     * @protected
     */
    protected function registerClassification()
    {
        $this->app['classification'] = $this->app->share(function($app)
        {
            $app['classification.loaded'] = true;
            return new Classification(
                $app['classification.taxonomicUnit'],
                $app['classification.taxonRelationship'],
                $app['classification.taxon']
            );
        });
    }

}
