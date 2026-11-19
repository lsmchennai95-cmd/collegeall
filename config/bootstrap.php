<?php
 
if (!defined('COLLEGEALL_BOOTSTRAPPED')) {
    define('COLLEGEALL_BOOTSTRAPPED', true);
    define('COLLEGEALL_ROOT', dirname(__DIR__));

    // Load application configuration
    $GLOBALS['COLLEGEALL_CONFIG'] = require __DIR__ . '/app.php';
 
    function config(?string $key = null, $default = null) {
        $cfg = $GLOBALS['COLLEGEALL_CONFIG'] ?? [];
        if ($key === null) {
            return $cfg;
        }
        return array_key_exists($key, $cfg) ? $cfg[$key] : $default;
    }

   
    function app_url(string $path = ''): string {
        $base = config('app_url', 'https://collegeall.com');
        if ($path === '' || $path === '/') {
            return $base . '/';
        }
        return rtrim($base, '/') . '/' . ltrim($path, '/');
    }

    
    function asset_url(string $path = ''): string {
        $base = config('asset_url', 'https://collegeall.com');
        if ($path === '' || $path === '/') {
            return $base . '/';
        }
        return rtrim($base, '/') . '/' . ltrim($path, '/');
    }

    
    function api_url(string $path = ''): string {
        $base = config('api_url', 'https://api.collegeall.com');
        if ($path === '' || $path === '/') {
            return $base;
        }
        return rtrim($base, '/') . '/' . ltrim($path, '/');
    }

     
    function get_public_config(): array {
        return [
            'appEnv'       => config('app_env', 'production'),
            'appUrl'       => config('app_url', 'https://collegeall.com'),
            'assetBaseUrl' => config('asset_url', 'https://collegeall.com'),
            'apiBaseUrl'   => config('api_url', 'https://api.collegeall.com'),
            'dataJsonUrl'  => config('data_json_url', 'https://collegeall.com/data.json'),
        ];
    }

     
    function render_app_config_script(): string {
        $json = json_encode(get_public_config(), JSON_UNESCAPED_SLASHES);
        return "<script>window.APP_CONFIG = {$json};</script>\n";
    }

    // Require centralized SEO & metadata helpers
    require_once __DIR__ . '/seo.php';
}
