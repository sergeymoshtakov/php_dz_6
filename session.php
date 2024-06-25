<?php
require("User.php");
session_start();

$users = [
    new User("John Doe", "john@example.com"),
    new User("Jane Smith", "jane@example.com"),
    new User("Michael Johnson", "michael@example.com"),
    new User("Emily Brown", "emily@example.com"),
    new User("David Lee", "david@example.com"),
];

$userIndex = isset($_GET['user']) ? $_GET['user'] : 0;
$user = $users[$userIndex];

$purchaseHistory = [
    ["sessionId" => "ABC123", "date" => "2024-06-25"],
    ["sessionId" => "DEF456", "date" => "2024-06-24"],
    ["sessionId" => "GHI789", "date" => "2024-06-23"],
    ["sessionId" => "JKL012", "date" => "2024-06-22"],
    ["sessionId" => "MNO345", "date" => "2024-06-21"],
];

echo "<h2>{$user->getUser()}</h2>";
echo "<ul>";
foreach ($purchaseHistory as $purchase) {
    echo "<li><a href='cart.php?sessionId={$purchase["sessionId"]}'>{$purchase["date"]}, {$purchase["sessionId"]}</a></li>";
}
echo "</ul>";
