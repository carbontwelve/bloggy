<?php namespace Bloggy\Exceptions;

/**
 * Class BloggyException
 *
 * This class extends the core PHP exception class and adds a validation getter and setter so that validation
 * error data can be preserved when a validation exception is thrown.
 *
 * I don't know if this is the very best method for adding this functionality, but I quite like keeping data validation
 * within my repositories and therefore when they throw an error it should provide context.
 *
 * @package Bloggy\Exceptions
 */
class BloggyException extends \Exception {

    private $validationErrors;

    /**
     * @param $errors
     * @return void
     */
    public function setValidationErrors ( \Illuminate\Support\MessageBag $errors )
    {
        $this->validationErrors = $errors;
    }

    /**
     * @return mixed
     */
    public function getValidationErrors ()
    {
        return $this->validationErrors;
    }

};
