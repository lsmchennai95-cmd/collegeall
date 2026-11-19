<?php
 

require_once __DIR__ . '/environment.php';

$appUrl = rtrim(env('APP_URL', 'https://collegeall.com'), '/');
$assetUrl = rtrim(env('ASSET_BASE_URL', $appUrl), '/');
$apiUrl = rtrim(env('API_BASE_URL', 'https://api.collegeall.com'), '/');
$canonicalBaseUrl = rtrim(env('CANONICAL_BASE_URL', 'https://collegeall.com'), '/');
$appEnv = env('APP_ENV', 'production');
$rootDir = dirname(__DIR__);

return [
    'app_env'            => $appEnv,
    'app_url'            => $appUrl,
    'asset_url'          => $assetUrl,
    'api_url'            => $apiUrl,
    'canonical_base_url' => $canonicalBaseUrl,
    'data_json_url'      => $assetUrl . '/data.json',
    'root_dir'           => $rootDir,
    'header_path'        => $rootDir . DIRECTORY_SEPARATOR . 'header.php',
    'footer_path'        => $rootDir . DIRECTORY_SEPARATOR . 'footer.php',
    'is_local'           => ($appEnv === 'local'),
    'is_production'      => ($appEnv === 'production'),
];
