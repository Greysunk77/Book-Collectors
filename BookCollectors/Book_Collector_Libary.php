<!DOCTYPE html>
<html>
<head>
<style>

 <!-- CSS for class created within the Book collector file -->
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  position: fixed;
  top: 0;
  width: 100%;
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
li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  
 imgcontainer{
	 image align: center;
 }
 <!--// background-image: url(/BookCollectors/Pictures/lib.jpg), url(paper.gif);
  // background-position: right bottom, left top;
  // background-repeat: no-repeat, repeat;
  // padding: 15px;
// }*/-->{
  
</style>

</head>
<body>
<ul>
  <li><a class="active" href="#Home">Libary</a></li>
  <li><a href="Buy_books.php">Buy Book</a></li>
  <li><a href="viewCart.php">About</a></li>
</ul>
</br>

<h1 align="center"> Welcome to Book Collectors</h1>
</br>
 <!-- page naviagtion for the Book Collectors page -->

</br>
</br>
<p align="Center"> Book Collectors is one of the new Book Libarys avaiable at a free price ,</br>
 We offer very affordable books and we allow our users to sell their books</p> 
 <hr size="8" width="90%" color="red">
 </br>

 </hr size="3">
 <form>
 </br></br>
 <hr size="8" width="90%" color="red">
 <!-- book collector libary packground picture -->
  <div class="imgcontainer">
    <img src="/BookCollectors/Pictures/lib.jpg" alt="Libary Background " class="avatar" width=100% height="600" img border="1">
  </div>
<hr size="8" width="90%" color="red">
<br>
<h2 align="Center">Newly uploaded Books</h2>
</br>

 </form>
</body>
</html>