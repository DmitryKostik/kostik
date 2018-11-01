<?php
include "../functions.php";
$res = getAllUsers();
$role = getAllRoles();
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
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">USERS</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <button type="button" class="btn btn-primary ml-auto" data-toggle="modal" data-target="#Register">Регистрация</button>
        <button type="button" class="btn btn-primary m-2">Вход</button>
      </div>
    </nav>
  </header>
<h3 class="h3 text-center pb-3">Пользователи</h3>

<!-- Регистрация -->
<div class="modal fade" id="Register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Регистрация</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class=""  action="../addUser.php" name="reg_form" method="post">
      <div class="modal-body">
          <input class="form-control mb-2" type="text" name="nickname" value="" placeholder="Имя">
          <input class="form-control mb-2" type="text" name="age" value="" placeholder="Возраст">
          <input class="form-control" type="text" name="pass" value="" placeholder="Пароль">
          <div class="input-group mb-3">
            <div class="input-group mb-3">
          <select class="custom-select" id="inputGroupSelect02">
            <?php
  					for($j=0; $j<count($role);$j++){
  							$role_id = $role[$j]["role_id"];
                $role_name = $role[$j]["role_name"];
  							echo "<option value='$role_id'>$role_name</option>";
  							}
  					?>
          </select>
          <div class="input-group-append">
            <label class="input-group-text" for="inputGroupSelect02">Options</label>
          </div>
        </div>

  </div>

      </div>
      <div class="modal-footer">
        <input class="btn btn-outline-success px-5 w-100" type="submit" name="but_reg" value="Регистрация">
        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
      </div>
    </form>
    </div>
  </div>
</div>

<!-- Таблица -->
<div class="container">
		<div class="row">
			<table class="table table-bordered">
				<thead>
					<tr>
					  <th scope="col">ID</th>
					  <th scope="col">Имя</th>
					  <th scope="col">Возраст</th>
					</tr>
				</thead>
			  <tbody>
					<?php
					for($i=0; $i<count($res);$i++){
							$id=$res[$i]["ID_user"];
							echo "<tr><td>".$res[$i]["ID_user"]." </td>";
							echo "<td>".$res[$i]["Nickname"]." </td>";
							echo "<td>".$res[$i]["Age"]." </td>";
              echo "<td class='bg-transparent border-white text-center px-0'><a class='text-warning' href=edit.php?id=$id><i class='far fa-edit'></i></a></td>";
              echo "<td class='bg-transparent border-white text-center px-0'><a class='text-danger' href=delete.php?id=$id><i class='fas fa-trash-alt'></i></a></td></tr>";
							}
					?>
				</tbody>
			</table>
      <a class="btn btn-outline-success" href="add.php">Добавить пользователя</a>
		</div>
	</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
