<?php namespace Noughts\Utils;

use Illuminate\Support\Facades\Log;

class Logging {

    static public function debug($message, array $context = array()){
        Log::debug( var_export($message,true), $context );
    }

    static public function info($message, array $context = array()){
        Log::info( var_export($message,true), $context );
    }

    static public function warn($message, array $context = array()){
        Log::warn( $message, $context );
    }

    static public function error($message, array $context = array()){
        Log::error( $message, $context );
    }
}
