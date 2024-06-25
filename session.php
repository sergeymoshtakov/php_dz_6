<?php
require("User.php");

class Session{
    private $sessionId;
    private $date;
    public function __construct($sessionId, $date){
        $this->sessionId = $sessionId;
        $this->date = $date;
    }

    public function getSession(){
        return "$this->date, $this->sessionId";
    }

    public function getSessionDate(){
        return $this->date;
    }

    public function getSessionId(){
        return $this->sessionId;
    }
}

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
    new Session("ABC123", "2024-06-25"),
    new Session("DEF456", "2024-06-24"),
    new Session("GHI789", "2024-06-23"),
    new Session("JKL012", "2024-06-22"),
    new Session("MNO345", "2024-06-21"),
];

echo "<h2>{$user->getUser()}</h2>";
echo "<ul>";
foreach ($purchaseHistory as $purchase) {
    echo "<li>{$purchase->getSessionDate()} - <a href='cart.php?sessionId={$purchase->getSessionId()}'>{$purchase->getSessionId()}</a></li>";
}
echo "</ul>";