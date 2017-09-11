<?php namespace AdrisonLuz\NanoConfig\Models;

use Model;

/**
 * Model
 */
class Ativo extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Validation
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'adrisonluz_nanoconfig_ativos';
}