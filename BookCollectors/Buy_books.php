<!DOCTYPE html>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #04AA6D;
}
</style>
</head>
<body>
<!-- page navigation -->
<ul>
  <li><a class="active" href="Buy_books.php" >buy Book</a></li>
  <li><a href="Book_Collector_Libary.php">Libary</a></li>
  <li><a href="#About">About</a></li>
</ul>

</body>
</html>