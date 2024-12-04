<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
</head>
<body>
    <h1>Submit Your Details</h1>
    <form action="submit.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br><br>
        
        <label for="message">Message:</label>
        <textarea name="message" id="message" rows="5" required></textarea><br><br>
        
        <button type="submit">Submit</button>
    </form>
    <br>
    <a href="view.php">View Submissions</a>
</body>
</html>
