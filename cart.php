<?php
session_start();

$products = [
    ["name" => "Product A", "price" => 10, "description" => "Description of Product A", "brand" => "Brand A", "cpu" => "CPU A", "ram" => "4GB", "sim_count" => "Dual SIM", "hdd" => "256GB SSD", "os" => "Android"],
    ["name" => "Product B", "price" => 15, "description" => "Description of Product B", "brand" => "Brand B", "cpu" => "CPU B", "ram" => "8GB", "sim_count" => "Single SIM", "hdd" => "512GB SSD", "os" => "iOS"],
    ["name" => "Product C", "price" => 20, "description" => "Description of Product C", "brand" => "Brand C", "cpu" => "CPU C", "ram" => "16GB", "sim_count" => "Dual SIM", "hdd" => "1TB SSD", "os" => "Windows"],
];

$sessionId = isset($_GET['sessionId']) ? $_GET['sessionId'] : "";

echo "<h2>Products in Session: $sessionId</h2>";
echo "<ul>";
foreach ($products as $product) {
    echo "<li>";
    echo "<strong>Name:</strong> {$product["name"]}<br>";
    echo "<strong>Price:</strong> {$product["price"]}<br>";
    echo "<strong>Description:</strong> {$product["description"]}<br>";
    echo "<strong>Brand:</strong> {$product["brand"]}<br>";
    echo "<strong>CPU:</strong> {$product["cpu"]}<br>";
    echo "<strong>RAM:</strong> {$product["ram"]}<br>";
    echo "<strong>SIM Count:</strong> {$product["sim_count"]}<br>";
    echo "<strong>HDD:</strong> {$product["hdd"]}<br>";
    echo "<strong>OS:</strong> {$product["os"]}<br>";
    echo "</li>";
}
echo "</ul>";
