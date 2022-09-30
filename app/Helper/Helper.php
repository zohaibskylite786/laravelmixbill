<?php

use App\Models\AppConfig;
use Illuminate\Support\Facades\Session;

function app_config($key = ''){

    $config = AppConfig::where('setting', $key)->first();

    if($config){
        return $config->value;
    }

    return '';
}


function translate($key = ''){
    return __($key);
}

function notify($message = '', $type = 'e'){
    Session::flash('ntype', $type);
    Session::flash('notify', $message);
}
