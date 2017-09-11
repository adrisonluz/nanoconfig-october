<?php namespace AdrisonLuz\NanoConfig\Models;

use Model;
use Backend\Models\User;

/**
 * Model
 */
class Usuario extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Validation
     */
    public $rules = [
        'email' => 'required|between:6,255|email|unique:backend_users',
        'login' => 'required|between:2,255|unique:backend_users',
        'password' => 'required:create|between:4,255|confirmed',
        'password_confirmation' => 'required_with:password|between:4,255'
    ];

    protected $purgeable = [
        'first_name',
        'last_name',
        'login',
        'email',
        'password',
        'password_confirmation'
    ];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'adrisonluz_nanoconfig_usuarios';

    public $timestamps = false;

    public function beforeSave()
    {
        $user = new User;
        $user->first_name = $this->first_name;
        $user->last_name = $this->last_name;
        $user->login = $this->login;
        $user->email = $this->email;
        $user->password = $this->password;
        $user->password_confirmation = $this->password_confirmation;
        $user->is_superuser = 0;
        $user->permissions = '{"backend.manage_users":-1,"system.access_logs":-1,"system.manage_mail_settings":-1,"system.manage_mail_templates":-1,"backend.manage_branding":-1,"backend.manage_editor":-1,"backend.access_dashboard":-1,"backend.manage_preferences":-1,"system.manage_updates":-1}';

        // Registra o usuário na tabela padrão do October.
        if($user->save())
        {        
            $this->id_october = $user->id;
            unset($this->first_name,$this->last_name,$this->login,$this->email,$this->password,$this->password_confirmation);
        }else{
            return 'Não foi possivel registrar o usuário.';
        }
    }
}