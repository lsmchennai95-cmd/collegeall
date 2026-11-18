<?php
/**
 * CollegeAll Bootstrap
 * Central initialization file for CollegeAll PHP application.
 * Prevents multiple inclusion, loads environment, and defines global helper functions.
 */

if (!defined('COLLEGEALL_BOOTSTRAPPED')) {
    define('COLLEGEALL_BOOTSTRAPPED', true);
    define('COLLEGEALL_ROOT', dirname(__DIR__));

    // Load application configuration
    $GLOBALS['COLLEGEALL_CONFIG'] = require __DIR__ . '/app.php';

    /**
     * Retrieve a configuration value by key or the full config array.
     *
     * @param string|null $key
     * @param mixed $default
     * @return mixed
     */
    function config(?string $key = null, $default = null) {
        $cfg = $GLOBALS['COLLEGEALL_CONFIG'] ?? [];
        if ($key === null) {
            return $cfg;
        }
        return array_key_exists($key, $cfg) ? $cfg[$key] : $default;
    }

    /**
     * Generate an absolute Application URL.
     *
     * @param string $path
     * @return string
     */
    function app_url(string $path = ''): string {
        $base = config('app_url', 'https://collegeall.com');
        if ($path === '' || $path === '/') {
            return $base . '/';
        }
        return rtrim($base, '/') . '/' . ltrim($path, '/');
    }

    /**
     * Generate an absolute Asset URL for CSS, JS, images, fonts, etc.
     *
     * @param string $path
     * @return string
     */
    function asset_url(string $path = ''): string {
        $base = config('asset_url', 'https://collegeall.com');
        if ($path === '' || $path === '/') {
            return $base . '/';
        }
        return rtrim($base, '/') . '/' . ltrim($path, '/');
    }

    /**
     * Generate an absolute API Base URL or endpoint URL.
     *
     * @param string $path
     * @return string
     */
    function api_url(string $path = ''): string {
        $base = config('api_url', 'https://api.collegeall.com');
        if ($path === '' || $path === '/') {
            return $base;
        }
        return rtrim($base, '/') . '/' . ltrim($path, '/');
    }

    /**
     * Expose only safe public configuration to client-side JavaScript.
     *
     * @return array
     */
    function get_public_config(): array {
        return [
            'appEnv'       => config('app_env', 'production'),
            'appUrl'       => config('app_url', 'https://collegeall.com'),
            'assetBaseUrl' => config('asset_url', 'https://collegeall.com'),
            'apiBaseUrl'   => config('api_url', 'https://api.collegeall.com'),
            'dataJsonUrl'  => config('data_json_url', 'https://collegeall.com/data.json'),
        ];
    }

    /**
     * Render the window.APP_CONFIG inline JavaScript tag.
     *
     * @return string
     */
    function render_app_config_script(): string {
        $json = json_encode(get_public_config(), JSON_UNESCAPED_SLASHES);
        return "<script>window.APP_CONFIG = {$json};</script>\n";
    }
}
