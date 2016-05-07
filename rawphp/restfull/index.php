<?php

$method = \filter_input(INPUT_SERVER, 'REQUEST_METHOD');
$uri = \filter_input(INPUT_SERVER, 'REQUEST_URI');

$paths = explode(DIRECTORY_SEPARATOR, trim($uri, '\\/'));
$resource = array_shift($paths);

ob_start();
if($resource == 'clients') {
    $id = array_shift($paths);
    if (empty($id)) {
        handle_resource($resource);
    } else {
        handle_action($id, $method);
    }
} else {
    header('HTTP/1.1 404 Not Found');
}

$result = ob_get_clean();
echo $result . "\n";

function handle_resource($resource) {
    echo "All $resource.";
}

function handle_action($resource, $action) {
    echo "{$action}ing $resource.";
}