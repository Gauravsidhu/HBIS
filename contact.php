<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
</head>

<body>

  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="home.php">Home Services</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="services.php">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Contact Section -->
  <section id="contact" class="bg-light py-5">
    <div class="container">
      <h2 class="text-center mb-4">Contact Us</h2>
      <form action="insert_contact.php" method="POST">
        <div class="row">
          <div class="col-md-6">
            <div class="mb-3">
              <label for="name" class="form-label">Full Name</label>
              <input type="text" class="form-control" name="full_name" id="name" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email Address</label>
              <input type="email" class="form-control" name="email" id="email" required>
            </div>
            <div class="mb-3">
              <label for="phone" class="form-label">Phone Number</label>
              <input type="tel" class="form-control" name="phone" id="phone" required>
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-3">
              <label for="message" class="form-label">Your Message</label>
              <textarea class="form-control" name="message" id="message" rows="5" required></textarea>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Send Message</button>
      </form>

    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-dark text-white text-center py-3">
    <p>&copy; 2025 Home Services. All rights reserved.</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>