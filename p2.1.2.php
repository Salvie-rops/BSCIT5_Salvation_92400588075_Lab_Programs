<?php
// Multidimensional array for laptops
$laptops = array(
    array(
        "company" => "Dell",
        "model"   => "Inspiron 15",
        "price"   => 55000
    ),
    array(
        "company" => "HP",
        "model"   => "Pavilion x360",
        "price"   => 62000
    )
);

// Display laptops
echo "Laptop Details:\n";
foreach ($laptops as $laptop) {
    echo "Company: " . $laptop["company"] . "\n";
    echo "Model: " . $laptop["model"] . "\n";
    echo "Price: ₹" . $laptop["price"] . "\n\n";
}

?>