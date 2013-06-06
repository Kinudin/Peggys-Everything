<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Peggy's Everything</title>
	<link rel="stylesheet" href="reset.css">
	<link rel="stylesheet" href="styles.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,600italic,400' rel='stylesheet' type='text/css'>

	<script src="jquery.js"></script>
	<script src="script.js"></script>

</head>
<body>


		<?
		include 'navigation.php';
		?>

	<div class="container">
		<div class="leftColumn">
		<img src="http://dummyimage.com/650x280/000/fff.jpg" alt="">
			<div class="caption">Here is some Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, rem, molestiae, facilis qui doloremque delectus tempore nesciunt dignissimos impedit commodi distinctio suscipit praesentium nobis cumque omnis mollitia vero fugit. Eveniet?
			</div>
			<h3>About</h3>
			<p>Hello Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores fugit quis mollitia debitis veritatis reprehenderit at omnis? Sit, aspernatur ut accusamus perspiciatis repellendus eos aliquid voluptates praesentium voluptatibus asperiores ea ullam a ex commodi consequuntur ducimus rem magni consectetur eveniet iste. Inventore, fugiat, repellat, enim repudiandae dicta cupiditate veniam nobis nam deserunt hic quaerat obcaecati assumenda expedita iste necessitatibus quam.</p>
		</div>
		<div class="rightColumn" id="frontPage">
			<article> <!-- Environmental Awareness section -->
				<button onclick="addItem()">Add To Cart!</button>
				<img src="images/environmentalAwareness.jpg" alt="Environmental Awareness" width="300">
				<h3> 100% Organic Material</h3>
				<ul>
					<li>Made from cotton materials</li>
					<li>Cotton is completely washable, using absolutely zero plastic to fill up your trash can.</li>
					<li>Convenient to have in your car for those unexpected shopping trip.</li>
				</ul>
			</article>
		
		</div>
	</div>
</body>
</html>