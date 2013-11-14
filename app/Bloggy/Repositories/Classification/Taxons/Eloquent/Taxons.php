<?php namespace Bloggy\Repositories\Classification\Taxons\Eloquent;
/**
* --------------------------------------------------------------------------
* Taxons Eloquent Model
* --------------------------------------------------------------------------
*
* @extends  \Illuminate\Database\Eloquent\Model
* @package  Carbontwelve/Bloggy
* @category Model
* @since    0.0.1
* @author   Simon Dann <simon@photogabble.co.uk>
*/

use Bloggy\Repositories\Classification\Taxons\TaxonsInterface;
use Illuminate\Database\Eloquent\Model;
use Validator;
use Input;
use Str;

/**
 * Class Taxons
 * @package Bloggy\Repositories\Classification\Taxons\Eloquent
 */
class Taxons extends Model implements TaxonsInterface {

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = array(
        'id',
        'created_at',
        'updated_at',
        'deleted_at',
    );

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'taxons';

    /**
     * The number of models to return for pagination.
     *
     * @var int
     */
    protected $perPage = 10;

    /**
     * Indicates if the model should soft delete.
     *
     * @var bool
     */
    protected $softDelete = false;

    /**
     * The default rules for this model to validate
     *
     * @var array
     */
    public static $rules = array(

        'save' => array(),
        'update' => array(),
        'delete' => array()

    );

    /**
     * --------------------------------------------------------------------------
     * Return the key
     * --------------------------------------------------------------------------
     *
     * On boards the key is the id field.
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->getKey();
    }

    /**
     * --------------------------------------------------------------------------
     * Overloading of Save method
     * --------------------------------------------------------------------------
     *
     * Just adding some validation here so we can throw exceptions on validation
     * errors.
     *
     * @param array $options
     * @return bool
     */
    public function save(array $options = array())
    {
        if ( ! isset($this->attributes->slug) )
        {
            $this->setAttribute('slug', Str::slug( $this->getAttribute('name') ) );
        }

        $this->validate('save');
        return parent::save();
    }

    /**
     * --------------------------------------------------------------------------
     * Overloading of Update method
     * --------------------------------------------------------------------------
     *
     * Just adding some validation here so we can throw exceptions on validation
     * errors.
     *
     * @param array $attributes
     * @return bool
     */
    public function update(array $attributes = array())
    {

        $newSlug = Str::slug( $this->attributes->name);

        if ( ! isset($this->attributes->slug) )
        {
            $this->attributes->slug = $newSlug;
        }elseif( $this->attributes->slug != $newSlug )
        {
            $this->attributes->slug = $newSlug;
        }

        $this->validate('update');
        return parent::update();
    }

    /**
     * --------------------------------------------------------------------------
     * Overloading of Delete method
     * --------------------------------------------------------------------------
     *
     * @return bool|void
     */
    public function delete()
    {
        return parent::delete();
    }


    /**
     * --------------------------------------------------------------------------
     * Data Validation
     * --------------------------------------------------------------------------
     *
     * @param $rule
     * @return bool
     * @throws TaxonsNotValidException
     */
    public function validate($rule)
    {
        // If there are no validation rules then no point in continuing
        if (count(self::$rules[$rule]) == 0){ return true; }

        $validator = Validator::make( Input::all(), self::$rules[$rule] );

        if ( ! $validator->passes() ){
            throw new TaxonsNotValidException( $validator->errors() );
        }

        return true;
    }

    /**
     * --------------------------------------------------------------------------
     * Taxon HasOne TaxonomicUnit
     * --------------------------------------------------------------------------
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function unit()
    {
        // @todo: make $model a configurable variable
        $model = '\Bloggy\Repositories\Classification\TaxonomicUnits\Eloquent\TaxonomicUnit';
        return $this->belongsTo($model, 'taxonomic_unit_id');
    }

    /**
     * --------------------------------------------------------------------------
     * Taxon HasOne Parent
     * --------------------------------------------------------------------------
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function parent()
    {
        // @todo: make $model a configurable variable
        $model = '\Bloggy\Repositories\Classification\Taxons\Eloquent\Taxon';
        return $this->belongsTo($model, 'parent_id');
    }

}
