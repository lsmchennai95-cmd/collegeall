<?php
 

if (!function_exists('env')) {
    
    function env(string $key, $default = null) {
        $val = getenv($key);
        if ($val !== false) {
            return parse_env_value($val);
        }
        if (isset($_ENV[$key])) {
            return parse_env_value($_ENV[$key]);
        }
        if (isset($_SERVER[$key])) {
            return parse_env_value($_SERVER[$key]);
        }
        return $default;
    }
}

if (!function_exists('parse_env_value')) {
     
    function parse_env_value($val) {
        if (!is_string($val)) {
            return $val;
        }
        $lower = strtolower(trim($val));
        switch ($lower) {
            case 'true':
            case '(true)':
                return true;
            case 'false':
            case '(false)':
                return false;
            case 'empty':
            case '(empty)':
                return '';
            case 'null':
            case '(null)':
                return null;
        }
        return $val;
    }
}

if (!function_exists('load_dotenv')) {
    
    function load_dotenv(string $filePath): bool {
        if (!file_exists($filePath)) {
            return false;
        }

        $content = @file_get_contents($filePath);
        if ($content === false) {
            return false;
        }

        $lines = preg_split("/\r\n|\n|\r/", $content);

        foreach ($lines as $line) {
            $line = trim($line);
            // Skip comments and empty lines
            if ($line === '' || strpos($line, '#') === 0) {
                continue;
            }

            if (strpos($line, '=') === false) {
                continue;
            }

            list($name, $value) = explode('=', $line, 2);
            $name = trim($name);
            $value = trim($value);

            // Strip surrounding quotes
            if (strlen($value) >= 2) {
                $first = $value[0];
                $last = substr($value, -1);
                if (($first === '"' && $last === '"') || ($first === "'" && $last === "'")) {
                    $value = substr($value, 1, -1);
                }
            }

            if (!empty($name)) {
                // Do not overwrite existing system environment variables if already set
                if (getenv($name) === false) {
                    putenv("{$name}={$value}");
                }
                if (!isset($_ENV[$name])) {
                    $_ENV[$name] = $value;
                }
                if (!isset($_SERVER[$name])) {
                    $_SERVER[$name] = $value;
                }
            }
        }

        return true;
    }
}

// Automatically load .env from the project root if exists
$dotenvPath = dirname(__DIR__) . DIRECTORY_SEPARATOR . '.env';
load_dotenv($dotenvPath);
