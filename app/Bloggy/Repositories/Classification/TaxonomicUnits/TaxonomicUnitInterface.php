<?php namespace Bloggy\Repositories\Classification\TaxonomicUnits;

/**
 * Class TaxonomicUnitInterface
 * @package Bloggy\Repositories\Classification\TaxonomicUnits
 */
interface TaxonomicUnitInterface {

    /**
     * Returns the records ID.
     *
     * @return mixed
     */
    public function getId();

    /**
     * Save the records.
     *
     * @return bool
     */
    public function save();

    /**
     * Delete the records.
     *
     * @return bool
     */
    public function delete();

}

