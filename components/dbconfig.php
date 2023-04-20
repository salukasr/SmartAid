<?php
    require 'C:/xampp/htdocs/SmartAid/components/vendor/autoload.php';

    use Kreait\Firebase\Factory;
    use Kreait\Firebase\ServiceAccount;

    $factory = (new Factory)
        ->withServiceAccount('C:\xampp\htdocs\SmartAid\components\smartaid-de891-firebase-adminsdk-rgc7j-6669d88888.json')
        ->withDatabaseUri('https://smartaid-de891-default-rtdb.asia-southeast1.firebasedatabase.app');

    $database = $factory->createDatabase();

?>
