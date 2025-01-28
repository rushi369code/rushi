<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cake Management System</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f8f3e6;
            color: #333;
        }

        header {
            background-color: #ff8c00;
            padding: 20px;
            text-align: center;
            color: white;
        }

        header h1 {
            font-size: 2.5em;
        }

        nav {
            background-color: #333;
            display: flex;
            justify-content: center;
            padding: 10px 0;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-size: 1.2em;
        }

        nav a:hover {
            color: #ff8c00;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .section {
            margin-bottom: 30px;
        }

        .section h2 {
            margin-bottom: 20px;
            font-size: 2em;
            color: #ff8c00;
        }

        .cake-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .cake-item {
            background-color: #f9f9f9;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .cake-item img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .cake-item h3 {
            margin: 10px 0;
            font-size: 1.5em;
        }

        .cake-item p {
            font-size: 1em;
            color: #555;
        }

        .cake-item button {
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #ff8c00;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .cake-item button:hover {
            background-color: #e57700;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
            margin-top: 20px;
        }

        footer p {
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <header>
        <h1>Cake Management System</h1>
    </header>
    
    <nav>
        <a href="#dashboard">Dashboard</a>
        <a href="#cakes">Manage Cakes</a>
        <a href="#orders">Orders</a>
        <a href="#about">About</a>
    </nav>

    <div class="container">
        <section id="dashboard" class="section">
            <h2>Dashboard</h2>
            <p>Welcome to the Cake Management System. Use this platform to manage your cakes, view orders, and track performance.</p>
        </section>

        <section id="cakes" class="section">
            <h2>Our Cakes</h2>
            <div class="cake-list">
                <div class="cake-item">
                    <img src="https://via.placeholder.com/300" alt="Chocolate Cake">
                    <h3>Chocolate Cake</h3>
                    <p>Delicious chocolate cake with creamy frosting.</p>
                    <button>View Details</button>
                </div>
                <div class="cake-item">
                    <img src="https://via.placeholder.com/300" alt="Vanilla Cake">
                    <h3>Vanilla Cake</h3>
                    <p>Classic vanilla cake with a smooth buttercream.</p>
                    <button>View Details</button>
                </div>
                <div class="cake-item">
                    <img src="https://via.placeholder.com/300" alt="Red Velvet Cake">
                    <h3>Red Velvet Cake</h3>
                    <p>Rich and moist red velvet cake with cream cheese frosting.</p>
                    <button>View Details</button>
                </div>
            </div>
        </section>

        <section id="orders" class="section">
            <h2>Orders</h2>
            <p>Here you can view and manage customer orders.</p>
        </section>

        <section id="about" class="section">
            <h2>About</h2>
            <p>This Cake Management System is designed to help bakeries manage their offerings and customer interactions efficiently.</p>
        </section>
    </div>

    <footer>
        <p>&copy; 2025 Cake Management System. All Rights Reserved.</p>
    </footer>
</body>
</html>
