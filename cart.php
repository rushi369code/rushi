
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
       * {
            color: #ffffff;
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
            list-style: none;
            text-decoration: none;
            scroll-behavior: smooth;
            border: none;
            outline: none;
            color: #000;
        }

        body {
            
            background: #108A4F;
        }

        header {
            position: fixed;
            top: 0;
            right: 0;
            z-index: 1000;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: transparent;
            padding: 28px 11%;
            border-bottom: 1px solid transparent;
            transition: all ease .50s;
        }

        p {
            font-size: 2rem;
            font-weight: 600;
        }

        .navlist {
            display: flex;
            align-items: center;
        }

        .navlist a {
            color: #ffff;
            font-size: 2rem;
            font-weight: 600;
            margin: 0 40px;
            transition: all ease .40s;
        }

        .navlist a:hover {
            color: red;
        }

        section {
            padding: 0px 5% 50px;
        }

        .fa-solid i {
            color: yellow;
            font-size: 35px;
            text-align: left;
        }

        .heading {
            font-size: 5rem;
            font-weight: 800;
            margin-bottom: 10px;
            color: #000;
            text-align: center;
            margin-top: 110px;
        }

        .row-main {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, auto));
            align-items: center;
            margin-top: 3rem;
            color: #000;
            border-top: 2px solid #000;
            text-align: center;
        }

        .row-main p {
            color: black;
            font-size: 20px;
            line-height: 20px;
            margin-bottom: 1rem;
            padding: 10px 0 20px 0;
        }

        .row-main_1 {
            display: flex;
            color: #000;
            border-top: 2px solid lightblue;
            text-align: center;
            margin-left: 20px;
            padding: 15px 0 15px 0;
            align-items: center;
        }

        .row-main_1 p {
            font-size: 20px;
            line-height: 10px;
            text-align: center;
        }

        .sub-row1 {
            width: 270px;
        }

        .sub-row2 {
            width: 40px;
            margin-left: 190px;
        }

        .sub-row3 {
            width: 80px;
            margin-left: 290px;
        }

        .sub-row4 {
            width: 270px;
            margin-left: 180px;
        }

        .sub-row5 {
            border: #000 0.5px solid;
            border-radius: 5px;
            width: 30px;
        }

        .sub-row5 a {
            font-size: 20px;
            color: #000;
            background-color: white;
            font-weight: 600;
        }
        .payment{
            margin-left: 450px;
            margin-right: 450px;
            background-color: #ffffff;
            border: 3px black solid;
        }
		.payment-btn {
    margin: 20px auto;
    text-align: center;
}

.payment-btn button {
    font-size: 1.2rem;
    color: #ffffff;
    background-color: #108A4F;
    border: none;
    padding: 12px 24px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.payment-btn button:hover {
    background-color: #0d6c3e;
}

.payment {
    margin: 50px auto;
    text-align: center;
}

.payment a {
    font-size: 1.2rem;
    color: #000;
    background-color: #ffffff;
    border: 3px solid #000;
    padding: 12px 24px;
    border-radius: 5px;
    text-decoration: none;
}

.payment a:hover {
    background-color: #f0f0f0;
}
    </style>
 </style>
</head>

<body>
    <?php
include 'nav.php';
    ?>
    <section>
        <div class="heading">
            Your Shopping Cart
        </div>

        <div class="row-main">
            <div>
                <p>Cake Name</p>
            </div>
            <div>
                <p>Quantity</p>
            </div>
            <div>
                <p>Price</p>
            </div>
            <div>
                <p>Total</p>
            </div>
			<div>
            <p>Actions</p>
        </div>
        </div>
        <?php
     include 'connect.php';
   
        $select = "select * from cart where username='$username'";
       $total=0;
        $query1 = mysqli_query($con, $select);

        while ($row = mysqli_fetch_array($query1)) {
            $total=$total+$row['subtotal'];
        ?>
            <div class="row-main_1">
                <div class="sub-row1">
                    <p><?php echo $row["name"]; ?></p>
                </div>
                <div class="sub-row2">
                    <p><?php echo $row["qty"]; ?></p>
                </div>
                <div class="sub-row3">
                    <p><?php echo $row["price"] ; ?></p>
                </div>
                <div class="sub-row4">
                    <p><?php echo $row["subtotal"]; ?></p>
                </div>
				<div class="sub-row5">
                <a href="remove_from_cart.php?item_id=<?php echo $row['id']; ?>">Remove</a>
            </div>
            </div>
        <?php
        }
        ?>
        <div class="sub-row4">
                    <p> Total Rs:-<?php echo $total; $_SESSION['total']=$total; ?></p>
                </div>
                <div class="payment">
                   <a href="payment.php" >payment and place order</a>
                </div>
    </section>
</body>

</html>