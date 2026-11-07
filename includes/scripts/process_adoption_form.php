<?php

declare(strict_types=1);

session_start();

// special keyword: __DIR__ is the directory of the file we are currently in.
// __DIR__ = /Applications/MAMP/htdocs/week_nine_inclass/includes/scripts
// ../ = go up a directory

// include optionally includes the code, does not throw errors (just warnings) if it's not found
//include __DIR__ . '/../hfsadshhghghghghgelpers.php';


// require REQUIRES that the file exists and can be imported, blocking your code from running
// if it cannot find that file / script or if it cannot execute that script.
//require __DIR__ . '/../helpers.php';

// if we 'require' a file multiple times
// and there is a method or class, etc. defined in that file
// we will get "cannot redeclare xyz" errors

// use 'require_once' instead of 'require' to enforce that a file is only imported one time.
require_once __DIR__ . '/../helpers.php';
// when in doubt, use require_once

// we only want to accept POST requests to this page; so we should block all request that are not post requests

$requestType = $_SERVER['REQUEST_METHOD'];

if ($requestType !== 'POST') {
    http_response_code(500);
    exit('Must be a POST request!');
}
