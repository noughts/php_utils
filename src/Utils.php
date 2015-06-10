<?php namespace Noughts\Utils;

use Parse\ParseAggregateException;

class Utils {

    /** saveAllなどで発生した、ParseAggregateException をログする */
    static public function logParseAggregateException( ParseAggregateException $e ){
        Logging::error( $e->getMessage() );
        /** @var array $error */
        foreach( $e->getErrors() as $error ){
            Logging::error( json_encode($error) );
        }
    }
}