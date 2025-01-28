<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cake Shop</title>
  <style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Arial', sans-serif;
  line-height: 1.6;
  background-color: #f9f9f9;
  color: #333;
}

a {
  text-decoration: none;
  color: inherit;
}

header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: #f8b400;
  padding: 20px;
  color: #fff;
}

header .logo h1 {
  font-size: 2.5rem;
}

header nav ul {
  list-style: none;
  display: flex;
}

header nav ul li {
  margin: 0 15px;
}

header nav ul li a {
  font-size: 1.2rem;
  color: #fff;
  transition: color 0.3s ease;
}

header nav ul li a:hover {
  color: #333;
}

/* Hero Section */
#home {
  background-image: url('hero-bg.jpg'); /* Put your image path here */
  background-size: cover;
  background-position: center;
  padding: 80px 0;
  text-align: center;
  color: #fff;
}

#home h2 {
  font-size: 3rem;
  margin-bottom: 10px;
}

#home p {
  font-size: 1.5rem;
}

/* Menu Section */
#menu {
  padding: 60px 20px;
  text-align: center;
  background-color: #f2f2f2;
}

#menu h2 {
  font-size: 2.5rem;
  margin-bottom: 20px;
}

.cake-menu {
  display: flex;
  justify-content: space-around;
  gap: 30px;
  flex-wrap: wrap;
}

.cake-item {
  background-color: #fff;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  padding: 20px;
  text-align: center;
  width: 250px;
}

.cake-item img {
  width: 100%;
  height: 200px;
  object-fit: cover;
  margin-bottom: 15px;
}

.cake-item h3 {
  font-size: 1.8rem;
  color: #333;
}

.cake-item p {
  color: #777;
}

/* About Section */
#about {
  padding: 60px 20px;
  text-align: center;
  background-color: #fff;
}

#about h2 {
  font-size: 2.5rem;
  margin-bottom: 20px;
}

#about p {
  font-size: 1.2rem;
  max-width: 800px;
  margin: 0 auto;
  color: #555;
}

/* Footer Section */
footer {
  background-color: #333;
  color: #fff;
  padding: 20px;
  text-align: center;
}

footer h3 {
  font-size: 1.8rem;
  margin-bottom: 10px;
}

footer p {
  font-size: 1rem;
}

/* Responsive Design */
@media (max-width: 768px) {
  header {
    flex-direction: column;
    text-align: center;
  }

  header .logo h1 {
    margin-bottom: 15px;
  }

  header nav ul {
    flex-direction: column;
  }

  .cake-menu {
    flex-direction: column;
    align-items: center;
  }

  .cake-item {
    margin-bottom: 30px;
  }
}
</style>
   <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header>
    <div class="logo">
      <h1>Cake Shop</h1>
    </div>
    <nav>
      <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#menu">Menu</a></li>
        <li><a href="#about">About Us</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav>
  </header>

  <section id="home">
    <div class="hero">
      <h2>Welcome to Our Delicious Cake Shop!</h2>
      <p>Freshly baked cakes made with love</p>
    </div>
  </section>

  <section id="menu">
    <h2>Our Cakes</h2>
    <div class="cake-menu">
      <div class="cake-item">
        <img src="chocolate-cake.jpg" alt="Chocolate Cake">
        <h3>Chocolate Cake</h3>
        <p>Deliciously rich and moist chocolate cake.</p>
      </div>
      <div class="cake-item">
        <img src="vanilla-cake.jpg" alt="Vanilla Cake">
        <h3>Vanilla Cake</h3>
        <p>Classic and creamy vanilla cake with buttercream frosting.</p>
      </div>
      <div class="cake-item">
        <img src="red-velvet-cake.jpg" alt="Red Velvet Cake">
        <h3>Red Velvet Cake</h3>
        <p>A rich, velvety texture with cream cheese frosting.</p>
      </div>
    </div>
  </section>

  <section id="about">
    <h2>About Us</h2>
    <p>We are passionate about baking the most delicious cakes. Our mission is to bring sweetness to your special moments with our freshly baked goods.</p>
  </section>

  <footer id="contact">
    <h3>Contact Us</h3>
     <p id="wel"><span>W</span>elcome <span>T</span>o <span>P</span>lant <span>W</span>ebsite</p>
  </footer>
</body>
</html>
