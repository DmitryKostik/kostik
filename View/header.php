<?php
include_once "../Model/functions.php";
$role = getAllRoles();
?>
<header class="mb-3">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">USERS</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <button type="button" class="btn btn-primary ml-auto" data-toggle="modal" data-target="#Register">Регистрация</button>
      <button type="button" class="btn btn-primary m-2">Вход</button>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Calc">Калькулятор</button>
    </div>
  </nav>
</header>
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
      <form class=""  action="../Controllers/addUser.php" name="reg_form" method="post">
      <div class="modal-body">
          <input class="form-control mb-2" type="text" name="nickname" value="" placeholder="Имя">
          <input class="form-control mb-2" type="text" name="age" value="" placeholder="Возраст">
          <input class="form-control mb-2" type="text" name="pass" value="" placeholder="Пароль">
          <div class="input-group mb-3">
            <div class="input-group mb-3">
          <select name="role" class="custom-select" id="inputGroupSelectRole">
            <?php
  					for($j=0; $j<count($role);$j++){
  							$role_id = $role[$j]["role_id"];
                $role_name = $role[$j]["role_name"];
  							echo "<option value='$role_id'>$role_name</option>";
  							}
  					?>
          </select>
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

<!-- Калькулятор -->

<div class="modal fade" id="Calc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
        <button type="button" class="btn btn-primary">Расчитать</button>
      </div>
    </div>
  </div>
</div>
