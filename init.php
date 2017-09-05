<?php

// Handle Error

// Enable Kohana exception handling, adds stack traces and error source.
set_exception_handler(['Kohana_Exception', 'handler']);

// Enable Kohana error handling, converts all PHP errors to exceptions.
set_error_handler(['\Kohana\Error', 'error_handler']);

// Enable the Kohana shutdown handler, which catches E_FATAL errors.
register_shutdown_function(['\Kohana\Error', 'shutdown_handler']);


if ( ! function_exists('__') ){
  function __($message, $variable = NULL, $language='en-US'){
    return $message;
  }
};

if( ! class_exists("Debug", false)) {

}