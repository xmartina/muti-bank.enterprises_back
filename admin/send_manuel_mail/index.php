<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Send Email</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Send Email</h2>
    <form action="send_email.php" method="POST">
        <div class="mb-3">
            <label for="receiverEmail" class="form-label">Receiver Email</label>
            <input type="email" class="form-control" id="receiverEmail" name="receiver_email" required>
        </div>
        <div class="mb-3">
            <label for="language" class="form-label">Receiver Language</label>
            <select class="form-select" id="language" name="language" required>
                <option value="">Select Language</option>
                <option value="English">English</option>
                <option value="Spanish">Spanish</option>
                <option value="French">French</option>
                <!-- Add more languages as needed -->
            </select>
        </div>
        <div class="mb-3">
            <label for="subject" class="form-label">Subject</label>
            <input type="text" class="form-control" id="subject" name="subject" required>
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Send Email</button>
    </form>
    <?php
    if (isset($_GET['error'])) {
        echo '<div class="alert alert-danger mt-3" role="alert">'.htmlspecialchars($_GET['error']).'</div>';
    }
    if (isset($_GET['success'])) {
        echo '<div class="alert alert-success mt-3" role="alert">'.htmlspecialchars($_GET['success']).'</div>';
    }
    ?>
</div>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
