<?php
/**
 * CollegeAll Environment Validation Suite
 * Tests both LOCAL and PRODUCTION configurations across core application pages.
 */

require_once __DIR__ . '/config/bootstrap.php';

$rootDir = realpath(__DIR__);
$results = [
    'local' => ['passed' => [], 'failed' => []],
    'production' => ['passed' => [], 'failed' => []]
];

function runTest($envName, $testName, $condition, $details = '') {
    global $results;
    if ($condition) {
        $results[$envName]['passed'][] = $testName;
        echo "[PASS] [$envName] $testName\n";
    } else {
        $results[$envName]['failed'][] = "$testName - Details: $details";
        echo "[FAIL] [$envName] $testName - Details: $details\n";
    }
}

// ==============================================================================
// 1. LOCAL ENVIRONMENT VALIDATION
// ==============================================================================
echo "\n========================================\n";
echo "1. TESTING LOCAL CONFIGURATION (localhost:8001)\n";
echo "========================================\n";

// Force local env
putenv('APP_ENV=local');
putenv('APP_URL=http://localhost:8001');
putenv('ASSET_BASE_URL=http://localhost:8001');
putenv('API_BASE_URL=https://api.collegeall.com');
$_ENV['APP_ENV'] = 'local';
$_ENV['APP_URL'] = 'http://localhost:8001';
$_ENV['ASSET_BASE_URL'] = 'http://localhost:8001';
$_ENV['API_BASE_URL'] = 'https://api.collegeall.com';

// Reload config
$GLOBALS['COLLEGEALL_CONFIG'] = require __DIR__ . '/config/app.php';

runTest('local', 'Config app_env is local', config('app_env') === 'local');
runTest('local', 'Config app_url is http://localhost:8001', config('app_url') === 'http://localhost:8001');
runTest('local', 'Config asset_url is http://localhost:8001', config('asset_url') === 'http://localhost:8001');
runTest('local', 'Config api_url is https://api.collegeall.com', config('api_url') === 'https://api.collegeall.com');
runTest('local', 'Asset URL generator generates local asset URL', asset_url('/assets/css/bootstrap.min.css') === 'http://localhost:8001/assets/css/bootstrap.min.css');
runTest('local', 'App URL generator generates local route URL', app_url('/search/') === 'http://localhost:8001/search/');
runTest('local', 'API URL generator generates correct API URL', api_url('/api/v1/topcourse') === 'https://api.collegeall.com/api/v1/topcourse');

// Test rendering index.php
ob_start();
include __DIR__ . '/index.php';
$indexOutput = ob_get_clean();

runTest('local', 'Home page renders successfully', strlen($indexOutput) > 1000);
runTest('local', 'Home page contains local APP_CONFIG script', strpos($indexOutput, '"appEnv":"local"') !== false && strpos($indexOutput, '"appUrl":"http://localhost:8001"') !== false);
runTest('local', 'Home page loads local CSS asset', strpos($indexOutput, 'http://localhost:8001/assets/css/bootstrap.min.css') !== false);
runTest('local', 'Home page renders local header nav', strpos($indexOutput, 'navbar navbar-expand-lg') !== false);
runTest('local', 'Home page renders local footer modern', strpos($indexOutput, 'footer-modern') !== false);
runTest('local', 'Home page header brand links to local app URL', strpos($indexOutput, 'href="http://localhost:8001/"') !== false);
runTest('local', 'Home page contains NO remote header file_get_contents', strpos($indexOutput, "file_get_contents('https://collegeall.com/header.php')") === false);
runTest('local', 'Home page contains NO remote footer file_get_contents', strpos($indexOutput, "file_get_contents('https://collegeall.com/footer.php')") === false);

// Test rendering about/index.php
ob_start();
include __DIR__ . '/about/index.php';
$aboutOutput = ob_get_clean();

runTest('local', 'About page renders successfully', strlen($aboutOutput) > 1000);
runTest('local', 'About page contains local APP_CONFIG script', strpos($aboutOutput, '"appEnv":"local"') !== false);
runTest('local', 'About page renders local header and footer', strpos($aboutOutput, 'navbar navbar-expand-lg') !== false && strpos($aboutOutput, 'footer-modern') !== false);
runTest('local', 'About page loads local CSS asset', strpos($aboutOutput, 'http://localhost:8001/assets/css/all.min.css') !== false);

// Test rendering a university course page
ob_start();
include __DIR__ . '/universities/manipal-university-jaipur/bba/general/index.php';
$courseOutput = ob_get_clean();

runTest('local', 'Course page renders successfully', strlen($courseOutput) > 1000);
runTest('local', 'Course page contains local APP_CONFIG script', strpos($courseOutput, '"appEnv":"local"') !== false);
runTest('local', 'Course page loads local bootstrap CSS asset', strpos($courseOutput, 'http://localhost:8001/assets/css/bootstrap.min.css') !== false);
runTest('local', 'Course page renders local header and footer', strpos($courseOutput, 'navbar navbar-expand-lg') !== false && strpos($courseOutput, 'footer-modern') !== false);

// Test data.json accessibility and local curriculum matching
$dataJsonPath = __DIR__ . '/data.json';
runTest('local', 'Local data.json exists', file_exists($dataJsonPath));
$dataJson = json_decode(file_get_contents($dataJsonPath), true);
runTest('local', 'Local data.json is valid JSON with records', is_array($dataJson) && count($dataJson) > 0);

// Verify curriculum path matching
$testPath = '/universities/manipal-university-jaipur/bba/general';
$found = false;
foreach ($dataJson as $key => $val) {
    if (rtrim(parse_url($key, PHP_URL_PATH), '/') === $testPath) {
        $found = true;
        break;
    }
}
runTest('local', 'Curriculum key matching by path succeeds for course', $found);


// ==============================================================================
// 2. PRODUCTION ENVIRONMENT VALIDATION
// ==============================================================================
echo "\n========================================\n";
echo "2. TESTING PRODUCTION CONFIGURATION (collegeall.com)\n";
echo "========================================\n";

putenv('APP_ENV=production');
putenv('APP_URL=https://collegeall.com');
putenv('ASSET_BASE_URL=https://collegeall.com');
putenv('API_BASE_URL=https://api.collegeall.com');
$_ENV['APP_ENV'] = 'production';
$_ENV['APP_URL'] = 'https://collegeall.com';
$_ENV['ASSET_BASE_URL'] = 'https://collegeall.com';
$_ENV['API_BASE_URL'] = 'https://api.collegeall.com';

// Reload config
$GLOBALS['COLLEGEALL_CONFIG'] = require __DIR__ . '/config/app.php';

runTest('production', 'Config app_env is production', config('app_env') === 'production');
runTest('production', 'Config app_url is https://collegeall.com', config('app_url') === 'https://collegeall.com');
runTest('production', 'Config asset_url is https://collegeall.com', config('asset_url') === 'https://collegeall.com');
runTest('production', 'Config api_url is https://api.collegeall.com', config('api_url') === 'https://api.collegeall.com');
runTest('production', 'Asset URL generator generates production asset URL', asset_url('/assets/css/bootstrap.min.css') === 'https://collegeall.com/assets/css/bootstrap.min.css');
runTest('production', 'App URL generator generates production route URL', app_url('/search/') === 'https://collegeall.com/search/');

// Test rendering index.php in production mode
ob_start();
include __DIR__ . '/index.php';
$prodIndexOutput = ob_get_clean();

runTest('production', 'Home page renders in production mode', strlen($prodIndexOutput) > 1000);
runTest('production', 'Production APP_CONFIG contains production appUrl', strpos($prodIndexOutput, '"appUrl":"https://collegeall.com"') !== false);
runTest('production', 'Production APP_CONFIG contains production assetBaseUrl', strpos($prodIndexOutput, '"assetBaseUrl":"https://collegeall.com"') !== false);
runTest('production', 'Production CSS assets resolve to https://collegeall.com', strpos($prodIndexOutput, 'https://collegeall.com/assets/css/bootstrap.min.css') !== false);
runTest('production', 'NO localhost URL exposed in production home page', strpos($prodIndexOutput, 'localhost') === false);

// Test rendering about/index.php in production mode
ob_start();
include __DIR__ . '/about/index.php';
$prodAboutOutput = ob_get_clean();

runTest('production', 'About page renders in production mode', strlen($prodAboutOutput) > 1000);
runTest('production', 'About page CSS assets resolve to https://collegeall.com', strpos($prodAboutOutput, 'https://collegeall.com/assets/css/all.min.css') !== false);
runTest('production', 'NO localhost URL exposed in production about page', strpos($prodAboutOutput, 'localhost') === false);

// Test rendering course page in production mode
ob_start();
include __DIR__ . '/universities/manipal-university-jaipur/bba/general/index.php';
$prodCourseOutput = ob_get_clean();

runTest('production', 'Course page renders in production mode', strlen($prodCourseOutput) > 1000);
runTest('production', 'Course page CSS assets resolve to https://collegeall.com', strpos($prodCourseOutput, 'https://collegeall.com/assets/css/bootstrap.min.css') !== false);
runTest('production', 'NO localhost URL exposed in production course page', strpos($prodCourseOutput, 'localhost') === false);

// Restore local env for local development workflow
putenv('APP_ENV=local');
putenv('APP_URL=http://localhost:8001');
putenv('ASSET_BASE_URL=http://localhost:8001');
putenv('API_BASE_URL=https://api.collegeall.com');
$_ENV['APP_ENV'] = 'local';
$_ENV['APP_URL'] = 'http://localhost:8001';
$_ENV['ASSET_BASE_URL'] = 'http://localhost:8001';
$_ENV['API_BASE_URL'] = 'https://api.collegeall.com';
$GLOBALS['COLLEGEALL_CONFIG'] = require __DIR__ . '/config/app.php';

echo "\n========================================\n";
echo "VALIDATION SUMMARY:\n";
echo "Local Passed: " . count($results['local']['passed']) . ", Failed: " . count($results['local']['failed']) . "\n";
echo "Production Passed: " . count($results['production']['passed']) . ", Failed: " . count($results['production']['failed']) . "\n";
echo "========================================\n";

if (count($results['local']['failed']) === 0 && count($results['production']['failed']) === 0) {
    echo "ALL TESTS PASSED SUCCESSFULLY!\n";
} else {
    echo "TEST FAILURES OCCURRED.\n";
}
