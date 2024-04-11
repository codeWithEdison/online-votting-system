<?php
// Include the header
include('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Election</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Create Election</h2>
        <form action="create_election.php" method="post">
            <label for="election_name">Election Name:</label>
            <input type="text" id="election_name" name="election_name" required>
            <label for="start_date">Start Date:</label>
            <input type="datetime-local" id="start_date" name="start_date" required>
            <label for="end_date">End Date:</label>
            <input type="datetime-local" id="end_date" name="end_date" required>
            <button type="submit">Create Election</button>
        </form>
    </div>
</body>
</html>
