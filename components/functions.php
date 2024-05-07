<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $requestData = json_decode(file_get_contents('php://input'), true);
    if ($requestData['action'] === 'changeLang') {
        $lang = $requestData['lang'];
        changeLang($lang);
    }
}

function includeWithVariables($filePath, $variables = array(), $print = true)
{
    extract($variables);
    ob_start();
    include $filePath;
    $output = ob_get_clean();
    if (!$print) {
        return $output;
    }
    echo $output;
}

function getValueFromJson($key)
{
    session_start();
    # Get session variable lang
    $lang = 'en';
    if (isset($_SESSION['lang'])) {
        $lang = $_SESSION['lang'];
    }

    # Get file name
    $callerFile = debug_backtrace()[0]['file'];
    $callerFileName = basename($callerFile);
    $file = substr($callerFileName, 0, -4); # Remove .php extension

    # Get value from json file
    $filePath = "lang/$lang/$file.json";
    $json = file_get_contents($filePath);
    $data = json_decode($json, true);

    if (isset($data[$key])) {
        print($data[$key]);
        return $data[$key];
    } else {
        print("Error: key not found in $filePath");
        return null;
    }
}

function changeLang($lang)
{
    session_start();
    $_SESSION['lang'] = $lang;
    exit();
}
?>