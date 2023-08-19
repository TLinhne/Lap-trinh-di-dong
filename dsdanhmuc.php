<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<?php include("menu.php"); ?>

	<h1> Danh Sách Danh Mục </h1>

	<table class="table">
		<thead>
			<tr class="table-danger">
				<td>STT</td>
				<td>Tên danh mục</td>
			</tr>
		</thead>
		<tbody>
			<?php
			$conn = mysqli_connect("localhost", "root","", "banhang2023");

			$sql = "SELECT * FROM danhmuchh";
			$ketqua = mysqli_query($conn, $sql);

			while ($dong = mysqli_fetch_array($ketqua)) {
				echo '<tr>';
				echo '<td>'.$dong['ID'].'</td>';
				echo '<td><a href = "dshanghoa.php?iddm='.$dong['ID'].'">'.$dong['TenDanhMuc'].'</a></td>';
				echo '</tr>';
			}
			?>
		</tbody>
	</table>
</body>
</html>
