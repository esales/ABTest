<?php
require 'vendor/autoload.php';
use Optimizely\OptimizelyFactory;

$userId='2';

$sdkKey = "Kt3p3xkdwFCAMSWm15Erz";

$optimizelyClient = OptimizelyFactory::createDefaultInstance($sdkKey);

$enabled = $optimizelyClient->isFeatureEnabled('discount', $userId);

if ($enabled){
    $discountAmount = $optimizelyClient->getFeatureVariableInteger('discount', 'amount', $userId);
    print("${userId} got a discount of $${discountAmount}.");
}else{
    print("${userId} did not get the discount feature.");
};
?>
<a href="pagina2.php">Comprar</a>

<!-- Hotjar Tracking Code for My site -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:2126604,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>

