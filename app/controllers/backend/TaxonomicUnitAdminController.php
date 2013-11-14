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

class TaxonomicUnitAdminController extends \Carbontwelve\Admin\Controllers\Backend\AdminBaseController
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
            array( 'href' => route('administration.taxonomy.units.index'), 'text' => 'Taxonomy Units' )
        );
    }

    public function index()
    {
        $taxonomyUnits = Classification::getTaxonomicUnitsProvider()
            ->findAll();

        //$taxonomyUnits = array();

        return $this->adminView( 'taxonomy.units.index', array(
                'taxonomyUnits' => $taxonomyUnits
            ));
    }

    public function add()
    {
        $this->getBreadcrumbProvider()->addBreadcrumb(
            array( 'href' => route('administration.taxonomy.units.add'), 'text' => 'Create New Record' )
        );

        return $this->adminView( 'taxonomy.units.create', array());
    }

    public function create()
    {
        $taxonomyUnitProvider = Classification::getTaxonomicUnitsProvider();

        try{
            $taxonomyUnit = $taxonomyUnitProvider->create(
                Input::except('_token')
            );
        }
        catch( TaxonomicUnitNotValidException $errorMessage)
        {
            Session::flash('error', $errorMessage->getMessage() );
            return Redirect::back()
                ->withErrors( $errorMessage->getValidationErrors() )
                ->withInput(Input::except('_token'));
        }

        Session::flash('success','That TaxonomyUnit record was successfully created.');
        return Redirect::route( 'administration.taxonomy.units.edit', array( 'id' =>$taxonomyUnit->id ) );
    }

    public function edit( $id = null )
    {
        $this->getBreadcrumbProvider()->addBreadcrumb(
            array( 'href' => route('administration.taxonomy.units.add'), 'text' => 'Create New Record' )
        );

        $taxonomyUnit = Classification::getTaxonomicUnitsProvider()->findById($id);

        return $this->adminView( 'taxonomy.units.update', array( 'taxonomyUnit' => $taxonomyUnit ));
    }

    public function update( $id = null )
    {
        $taxonomyUnitProvider = Classification::getTaxonomicUnitsProvider();

        try{
            $taxonomyUnit = $taxonomyUnitProvider->update(
                $id,
                Input::except('_token')
            );
        }
        catch( TaxonomicUnitNotValidException $errorMessage)
        {
            Session::flash('error', $errorMessage->getMessage() );
            return Redirect::back()
                ->withErrors( $errorMessage->getValidationErrors() )
                ->withInput(Input::except('_token'));
        }

        Session::flash('success','That TaxonomyUnit record was successfully updated.');
        return Redirect::route( 'administration.taxonomy.units.edit', array( 'id' =>$taxonomyUnit->id ) );
    }

}
