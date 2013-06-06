<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Random Fashion Bag</title>
	<link rel="stylesheet" href="reset.css">
	<link rel="stylesheet" href="styles.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,600italic,400' rel='stylesheet' type='text/css'>

	 <script src="jquery.js"></script>
</head>
<body>
	<?
	include 'navigation.php';
	?>
	<div class="container">
		<div class="shoppingMenu">
			<img src="images/shoppingcart.jpg" alt="150x75">
			<h4>All products</h4>
			<ul>
				<li><a href="bags.html">Bags</a></li>
				<li><a href="teacozies.html">Tea Cozies</a></li>
				<li><a href="purses.html">Purses</a></li>
								<button onclick="addItem()">Add To Cart!</button>

			</ul>
		</div>
		<div class="shopPage">
			<div class="item">
				<img src="images/skullCozy.jpg" alt="171x228" /> <span class="prodImage"></span>
				<span>Skull Cozy</span><br>
				<span class="prodPrice">$15.00</span>
			</div>
			<div class="item">
				<img src="images/cherryCozy.jpg" alt="150x75" /> <span class="prodImage"></span>
				<span>Cherry Cozy</span><br>
				<span class="prodPrice">$15.00</span>
			</div>

			<div class="item">
				<img src="images/EDCCozy.jpg" alt="150x75" /> <span class="prodImage"></span>
				<span class="prodName">EDC (Earth Day Cozy)</span><br><span class="prodNum"></span>
				<span class="prodPrice">$15.00</span>
			</div>
			<div class="item">
				<img src="images/grannysTeaShop.jpg" alt="150x75" /> <span class="prodImage"></span>
				<span class="prodName">Granny's Tea Shop</span><br><span class="prodNum"></span>
				<span class="prodPrice">$15.00</span>
			</div>
			<div class="item">
				<img src="images/givingTreeTote.jpg" alt="150x75" /> <span class="prodImage"></span>
				<span class="prodName">Giving Tree Tote</span><br><span class="prodNum"></span>
				<span class="prodPrice">$15.00</span>
			</div>
			<div class="item">
				<img src="images/genBag.jpg" alt="150x75" /> <span class="prodImage"></span>
				<span class="prodName">General Bag</span><br><span class="prodNum"></span>
				<span class="prodPrice">$15.00</span>
			</div>
					<div class="item">
				<img src="images/beadedBags.jpg" alt="150x75" /> <span class="prodImage"></span>
				<span class="prodName">Nifty Skull Bag</span><br><span class="prodNum"></span>
				<span class="prodPrice">$15.00</span>
			</div>
			<div class="item">
				<img src="images/wallBag.jpg" alt="150x75" /> <span class="prodImage"></span>
				<span class="prodName">Nifty Skull Bag</span><br><span class="prodNum"></span>
				<span class="prodPrice">$15.00</span>
			</div>
			<div class="item">
				<img src="images/fashionBag.jpg" alt="150x75" /> <span class="prodImage"></span>
				<span class="prodName">Nifty Skull Bag</span><br><span class="prodNum"></span>
				<span class="prodPrice">$15.00</span>
			</div>
			<div class="item">
				<img src="http://placehold.it/160x161" alt="150x75" /> <span class="prodImage"></span>
				<span class="prodName">Nifty Skull Bag</span><br><span class="prodNum"></span>
				<span class="prodPrice">$15.00</span>
			</div>
			<div class="item">
				<img src="http://placehold.it/160x161" alt="150x75" /> <span class="prodImage"></span>
				<span class="prodName">Nifty Skull Bag</span><br><span class="prodNum"></span>
				<span class="prodPrice">$15.00</span>
			</div>
			<div class="item">
				<img src="http://placehold.it/160x161" alt="150x75" /> <span class="prodImage"></span>
				<span class="prodName">Nifty Skull Bag</span><br><span class="prodNum"></span>
				<span class="prodPrice">$15.00</span>
			</div>
		</div>
	</div>
	<script src="script.js"></script>

</body>
</html>