<?php include 'fileslogic.php' ?>
<!DOCTYPE html>
<html>
<head>
<title>assignment upload and download</title>
<link rel="stylesheet" href="style.css"/>
</head>
<body>

<header>
<h1 align="center">Student practical upload</h1>
</header>
<div class="container">
<div class="row">
<form action="index.php" method="post" enctype="multipart/form-data">
<h3> upload file</h3>
<input type="file" name="myfile"><br>
<button type="submit" name="save">upload</button>
</form>
<div class="row">
<table>
<thead>
<th>ID</th>
<th>Name</th>
<th>size</th>
<th>Downloads</th>
<th>actions</th>
</thead>
<tbody>
<?php foreach($files as $file): ?>
<tr>
<td><?php echo $file['id'];?></td>
<td><?php echo $file['name'];?></td>
<td><?php echo $file['size']/1000 . "KB";?></td>
<td><?php echo $file['downloads'];?></td>
<td>
<a href="index.php?file_id=<?php echo $file['id']?>">download</a>
</td>
</tr>
<?php endforeach ; 
?>
</tbody>
</table>
</div>
</div>
</div>
</body>
</html>
