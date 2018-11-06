<?php
include "../Model/functions.php";
$res = getUserByID($_GET['id']);
$role = getAllRoles();
if (!empty($_POST["but_change"])) {
updateUser($_GET['id'], $_POST['nickname'], $_POST['age'], $_POST['role-value']);
header("Location: index.php");
}
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/style.css">
    <title>123</title>
  </head>
<body>
  <?php include_once "header.php" ?>
  <div class="container text-center">
    <h1>Изменить пользователя <?php echo $res["Nickname"] ?></h1>
  <div class="form-group mx-auto">
  <form class=""  name="change_form" method="post">
    <input class="form-control mb-2" type="text" name="nickname" value="<?php echo $res["Nickname"] ?>" placeholder="Имя">
    <input class="form-control mb-2" type="text" name="age" value="<?php echo $res["Age"] ?>" placeholder="Возраст">
    <div class="input-group mb-3">
  <select name="role-value" class="custom-select" id="inputGroupSelectRole">
    <?php
    for($j=0; $j<count($role);$j++){
        $role_id = $role[$j]["role_id"];
        $role_name = $role[$j]["role_name"];
        if ($role_id == $res["role_id"]) {
          echo "<option selected value='$role_id'>$role_name</option>";
        }
        else { echo "<option value='$role_id'>$role_name</option>"; }
        }
    ?>
  </select>
</div>
    <input class="btn btn-outline-success mt-1 px-5" type="submit" name="but_change" value="Изменить">
  </form>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
