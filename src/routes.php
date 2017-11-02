<?php
$routes = [
    'metadata',
    'listAvailableMetrics',
    'listLatestFairValues',
    'listFairValueModels',
    'getSingleDataForMetric',
    'getBatchDataForMetric',
    'getUsageLimits'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

