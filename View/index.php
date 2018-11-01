<?php
include_once "../functions.php";
$res = getAllUsers();
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <title>User</title>
  </head>
<body>
  <!-- HEADER -->
<?php include "header.php" ?>
<h3 class="h3 text-center pb-3">Пользователи</h3>
<!-- Таблица -->
<div class="container">
		<div class="row">
			<table class="table table-bordered">
				<thead>
					<tr>
					  <th scope="col">ID</th>
					  <th scope="col">Имя</th>
					  <th scope="col">Возраст</th>
            <th scope="col">Роль</th>
					</tr>
				</thead>
			  <tbody>
					<?php
					for($i=0; $i<count($res);$i++){
							$id=$res[$i]["ID_user"];
							echo "<tr><td>".$res[$i]["ID_user"]." </td>";
							echo "<td>".$res[$i]["Nickname"]." </td>";
							echo "<td>".$res[$i]["Age"]." </td>";
              echo "<td>".$res[$i]["role_name"]." </td>";
              echo "<td class='bg-transparent border-white text-center px-0'><a class='text-warning' href=edit.php?id=$id><i class='far fa-edit'></i></a></td>";
              echo "<td class='bg-transparent border-white text-center px-0'><a class='text-danger' href=delete.php?id=$id><i class='fas fa-trash-alt'></i></a></td></tr>";
							}
					?>
				</tbody>
			</table>
		</div>
	</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
