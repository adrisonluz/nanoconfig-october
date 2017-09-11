<?php namespace AdrisonLuz\NanoConfig\Models;

use Model;
use Backend\Models\UserGroup;

/**
 * Model
 */
class Grupo extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /*
     * Validation
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'adrisonluz_nanoconfig_grupos';

    public $timestamps = false;

    public function beforeSave()
    {
        $grupo = new UserGroup;
        $grupo->name = $this->name;
        $grupo->code = $this->code;
        $grupo->description = $this->description;
        $grupo->is_new_user_default = $this->is_new_user_default;
        
        // Registra o grupo na tabela padrão do October.
        if($grupo->save())
        {        
            $this->id_october = $grupo->id;
            unset($this->name,$this->code,$this->description,$this->is_new_user_default);
        }else{
            return 'Não foi possivel registrar o grupo.';
        }
    }
}