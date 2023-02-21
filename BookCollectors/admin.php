
<!DOCTYPE html><html>
<head>
<style>
<!--CCS sytle sheet-->
.imgcontainer img{
	 image align: center;
 }
</style>

		<title>	Admin</title>
</head>

<body>
<h2 align="center"> Add Book</h2></br>

</br>
<!-- divider for admin avatar-->
<div class="imgcontainer">
<img src="/BookCollectors/Pictures/admin_avatar.WEBP" alt="Login Avatar" class="avatar" align="center" />
</div>
<!-- Input from the Admin-->
<!--The admin will add the Bookname,price,author...-->
<form>
	<label for="productName"><b>Product Name</b></label>
    <input type="text" placeholder="Enter Book Name" name="productName" required>
</br></br>
    <label for="productPrice"><b>Product Price</b></label>
    <input type="text" placeholder="Enter Book Price" name="productPrice" required>
</br></br>


 <label for="bookAuthor"><b>Author </b></label>
    <input type="text" placeholder="Enter Book Author" name="bookAuthor" required>
</br></br>

	<!--Publish button once the Admin has entered the book Details-->
    <button type="submit">Publish</button>
</form>
</body>
</html>