<?php namespace AdrisonLuz\NanoConfig\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Grupos extends Controller
{
    public $implement = ['Backend\Behaviors\ListController','Backend\Behaviors\FormController'];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'nanoconfig_grupos' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('AdrisonLuz.NanoConfig', 'usuarios', 'grupos');
    }
}