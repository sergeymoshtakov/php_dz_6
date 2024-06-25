<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>
    <h1>Home</h1>
    <p>Welcome to the home page.</p>
    <ul>
        <?php
        require("User.php");

        $users = [
            new User("John Doe", "john@example.com"),
            new User("Jane Smith", "jane@example.com"),
            new User("Michael Johnson", "michael@example.com"),
            new User("Emily Brown", "emily@example.com"),
            new User("David Lee", "david@example.com"),
        ];

        foreach ($users as $index => $user) {
            echo "<li><a href='session.php?user=$index'>{$user->getUser()}</a></li>";
        }
        ?>
    </ul>
</body>
</html>
