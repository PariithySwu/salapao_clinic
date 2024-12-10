<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dental Clinic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <style>
        .customer-reviews {
  text-align: center;
  margin: 40px auto;
  padding: 40px 20px;
  background-color: #fff;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.customer-reviews .section-title {
  font-size: 2rem;
  margin-bottom: 10px;
  color: #3366cc;
}

.customer-reviews .section-subtitle {
  font-size: 1.2rem;
  margin-bottom: 30px;
  color: #555;
}

.reviews-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 20px;
}

.review-card {
  background-color: #f9f9f9;
  border-radius: 10px;
  padding: 20px;
  width: 250px; /* Fixed width for consistent design */
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  text-align: center;
}

.review-card .review-text {
  font-size: 1rem;
  color: #333;
  margin-bottom: 15px;
}

.review-author {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
}

.review-author img {
  width: 60px; /* Ensure all images are consistent in size */
  height: 60px;
  border-radius: 50%;
  object-fit: cover;
  border: 2px solid #3366cc;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.review-author .reviewer-name {
  font-size: 0.9rem;
  color: #555;
  margin: 0;
  text-align: left;
}
</style>

</head>
<body>
    <header class="header">
        <h1>Dental Clinic</h1>
        <p>Welcome to Our Clinic!</p>
        <div class="button-group">
            <a href="services.php"><button>Our Services</button></a>
            <a href="appointment.php"><button>Book Appointment</button></a>
            <a href="contact.php"><button>Contact Us</button></a>
        </div>
        <a href="signin.php" class="signin-button"><button>Sign In</button></a>
    </header>

    <section class="featured-services">
        <h2>Featured Services</h2>
            <div class="services-container">
                <div class="service-card">
                    <p>Teeth Whitening</p>
                    <p>Starting from $99</p>
                </div>
                <div class="service-card">
                    <p>Dental Implants</p>
                    <p>Contact for Details</p>
                </div>
        </div>
    </section>

    <section class="customer-reviews">
    <div class="container">
        <h2 class="section-title">Customer Reviews</h2>
        <p class="section-subtitle">Hear what our happy patients have to say!</p>
        <div class="reviews-container">
            <div class="review-card">
                <p class="review-text">"Amazing service! My teeth look fantastic now."</p>
                <div class="review-author">
                    <img src="review1.jpg" alt="Kristoff">
                    <p class="reviewer-name">- Kristoff</p>
                </div>
            </div>
            <div class="review-card">
                <p class="review-text">"The staff was so kind and professional. Highly recommend!"</p>
                <div class="review-author">
                    <img src="review2.png" alt="Aladdin">
                    <p class="reviewer-name">- Aladdin</p>
                </div>
            </div>
            <div class="review-card">
                <p class="review-text">"Dr. Smith is the best dentist I've ever had. Thank you!"</p>
                <div class="review-author">
                    <img src="review3.webp" alt="Eric">
                    <p class="reviewer-name">- Eric</p>
                </div>
            </div>
        </div>
    </div>
</section>

    <section class="our-team">
        <h2>Our Team</h2>
        <div class="team-container">
            <div class="team-member">
                <h3>Dr. Panitta</h3>
            </div>
            <div class="team-member">
                <h3>Dr. Natnicha</h3>
            </div>
        </div>
        <div class="team-buttons">
            <a href="team.php"><button>Meet Our Team</button></a>
        </div>
    </section>

    <footer class="footer">
        <a href="index.php"><button>Home</button></a>
        <a href="contact.php"><button>Contact</button></a>
        <a href="about.php"><button>About Us</button></a>
  </footer>
</body>
</html>