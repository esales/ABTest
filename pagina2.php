<?php
require 'vendor/autoload.php';
use Optimizely\OptimizelyFactory;

$userId='2';

$sdkKey = "Kt3p3xkdwFCAMSWm15Erz";

$optimizelyClient = OptimizelyFactory::createDefaultInstance($sdkKey);

$optimizelyClient->track('purchase', $userId);
?>
<a href="index.php">Página principal</a>