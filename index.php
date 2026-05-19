<?php
    namespace App;
    use App\User;
    use Database\Model\ProductModel;
    
    require 'vendor/autoload.php';
    $user = new User();
    echo $user->getName();
    echo "<br>";
    $productModel = new ProductModel();
    echo $productModel->getId();
?>