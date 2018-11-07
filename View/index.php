  <?php
include_once "../Model/functions.php";
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
    <link rel="stylesheet" href="/CSS/style.css">

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
							echo "<tr class='users-element' data-editid='$id' id='user-$id'><td>".$res[$i]["ID_user"]." </td>";
							echo "<td id='nickname'>".$res[$i]["Nickname"]." </td>";
							echo "<td id='age'>".$res[$i]["Age"]." </td>";
              echo "<td id='rolename'>".$res[$i]["role_name"]." </td>";
              echo "<td class='bg-transparent border-white text-center px-0'><a class='text-danger' href='#myModal' data-toggle='modal' data-deleteid='$id' data-target='#Delete'><i class='fas fa-trash-alt'></i></a></td></tr>";
							}
					?>
				</tbody>
			</table>
		</div>
	</div>
<!-- Удалить-->
  <div class="modal fade" id="Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Удалить</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body delete-content">
          ...
        </div>
        <div class="modal-footer mx-auto">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
          <button type="button" id="delete-button" class="btn btn-primary">Удалить</button>
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade" id="Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Изменить</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body edit-content">
          ...
        </div>
        <div class="modal-footer mx-auto">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
          <button type="button" id="edit-button" class="btn btn-primary">Изменить</button>
        </div>
      </div>
    </div>
  </div>


  <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script src="../js/deleteuser.js" charset="utf-8"></script>
<script src="../js/edituser.js" charset="utf-8"></script>

</body>
</html>
