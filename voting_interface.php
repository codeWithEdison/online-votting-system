<?php
// Include the header
include('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting Interface</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Voting Interface</h2>
        <form action="submit_vote.php" method="post">
            <p>Select your preferred candidate:</p>
            <div class="candidates">
                <label for="candidate1">
                    <input type="radio" id="candidate1" name="candidate" value="1">
                    Candidate A
                </label>
                <label for="candidate2">
                    <input type="radio" id="candidate2" name="candidate" value="2">
                    Candidate B
                </label>
                <label for="candidate3">
                    <input type="radio" id="candidate3" name="candidate" value="3">
                    Candidate C
                </label>
            </div>
            <button type="submit">Vote</button>
        </form>
    </div>
</body>
</html>
