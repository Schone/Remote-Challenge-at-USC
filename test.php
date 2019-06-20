<?php
use App\Controller\ShapeController;

spl_autoload_register(function ($class) {
    require_once sprintf('%s/%s.php', __DIR__, str_replace('\\', '/', $class));
});

$fp = fopen("php://stdin", "r");
$shapes = '';
echo "Please enter shapes in JSON \n";
echo "\$shapes = ";
$shapes=trim(fgets($fp));
$shapes = json_decode($shapes, true);

if($shapes != null) {
    try {
        $points = ShapeController::drawShape($shapes);
        var_dump($points);
    } catch (\Exception $e) {
        echo 'Caught exception: ' . $e->getMessage() . "\n";
    }

}
