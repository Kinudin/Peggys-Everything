<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Peggys Everything | Cherry Cozy </title>
	<link rel="stylesheet" href="reset.css">
	<link rel="stylesheet" href="styles.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,600italic,400' rel='stylesheet' type='text/css'>

	 <script src="jquery.js"></script>
</head>
<body>
	<?
	include 'includes/_header.php';
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
	<div class="leftColumn">
		<div class="productImage">
			<img src="http://dummyimage.com/300x300/000/fff" alt="The picture of the purse goes in this place." id="bigImage">
			<img src="http://dummyimage.com/50x50/000/fff" alt="The picture of the purse goes in this place.">
			<img src="http://dummyimage.com/50x50/000/fff" alt="The picture of the purse goes in this place.">
			<img src="http://dummyimage.com/50x50/000/fff" alt="The picture of the purse goes in this place.">

		</div>
		<h3>Cherry Cozy</h3>
			<p>
				A tea cozy or tea warmer is a cover for a teapot, traditionally made of cloth. It insulates a teapot, keeping the contents warm. Their use predates the invention of vacuum bottles as a means of keeping hot liquids hot. Tea cosies may have padded inserts that can be removed and washed.
			</p>
			<h3>Details</h3>
			<ul>
				<li>Knitted with passion</li>
				<li>Cherries could compliment the flavor</li>
				<li>Eco Friendly materials</li>
			</ul>
		<div class="reviews">
		<blockquote>
			I needed something to give my table spread a more Cherry-Rific feeling 
			<footer>Mary Estes</footer>
		</blockquote>
		<blockquote>
			This really added to the overall feel of everything related to the spread.
		<footer>Jeremy Clarkson</footer>
		</blockquote>
		<blockquote>
			The review goes here!
		<footer>Reviewers Name Here</footer>
		</blockquote>
		<blockquote>
			The review goes here!
		<footer>Reviewers Name Here</footer>
		</blockquote>
		<blockquote>
			The review goes here!
		<footer>Reviewers Name Here</footer>
		</blockquote>
		</div>
		</div>

	</div>
	<script src="script.js"></script>

</body>
</html>