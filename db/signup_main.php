<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container py-5">
    <h1 class="text-center mb-4"><br><em>Karibu nyumbani!</em></h1>
    <br>
    <h2>Welcome to Octofarm! To unlock exclusive benefits and a more personalized experience, <em>Go LIVE</em> today.</h2>

    <section class="form-section">
    <form action="view_messages.php" method="post" id="registrationForm">

  <div class="mb-3">
    <label for="username" class="form-label">Username: </label>
    <input type="text" class="form-control" id="username" name="username" required>
  </div>
  
  <div class="mb-3">
    <label for="fullname" class="form-label">Full Name: </label>
    <input type="text" class="form-control" id="fullname" name="fullname" required>
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">Email Address: </label>
    <input type="email" class="form-control" id="email" name="email_address" required>
  </div>

  <div class="mb-3">
    <label for="password" class="form-label">Password:  </label>
    <input type="password" class="form-control" id="password" name="Password" required minlength="8">
  </div>

  <div class="mb-3">
            <label for="role">Role:</label>
            <select id="role" name="role" class="form-control">
                <option value="client">Client</option>
                <option value="worker">Worker</option>
                <option value="administrator">Manager</option>
                <option value="administrator">Administrator</option>
                <option value="administrator">Shareholder</option>
            </select>
        </div>

  <button type="submit" class="btn btn-primary" name="send_message">Submit </button>
</form>
</body>
</html>