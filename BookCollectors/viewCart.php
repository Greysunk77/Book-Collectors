<!DOCTYPE html>
<html lang="en">
<head>
<style>

ul.topnav {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

ul.topnav li {float: left;}

ul.topnav li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

ul.topnav li a:hover:not(.active) {background-color: #111;}

ul.topnav li a.active {background-color: #04AA6D;}

ul.topnav li.right {float: right;}

@media screen and (max-width: 600px) {
  ul.topnav li.right, 
  ul.topnav li {float: none;}
}
</style>

	<meta charset="UFP=8">
	<title>Shopping Cart</title

</head>
<body>
<ul class="topnav">
  <li><a class="active" href="viewCart">Cart</a></li>
  <li><a href="Buy_books">Buy Books</a></li>
  <li><a href="#contact">Contact</a></li>
  <li class="right"><a href="Book_Collector_Libaray.php">Libary</a></li>
</ul>
<div class="container">
 <h1> Book Collectors Cart<h1>
 <center>
 < a href="Book_Collector_Libaray.php" class="btn btn-warning col-lh-2">Libary</a>
 </body>
 </html>