<?php
include "../Model/functions.php";
$res = getUserByID($_GET['id']);
$role = getAllRoles();
if (!empty($_POST["but_change"])) {
updateUser($_GET['id'], $_POST['nickname'], $_POST['age'], $_POST['rolevalue']);
header("Location: index.php");
}
?>
  <p>Изменить пользователя <?php echo $res["Nickname"] ?></p>
  <div class="form-group mx-auto">
    <form class="" id='changeform'  name="change_form" method="post">
      <input class="form-control mb-2" type="text" name="nickname" value="<?php echo $res["Nickname"] ?>" placeholder="Имя">
      <input class="form-control mb-2" type="text" name="age" value="<?php echo $res["Age"] ?>" placeholder="Возраст">
      <div class="input-group mb-3">
      <select name="rolevalue" class="custom-select" id="inputGroupSelectRole">
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
    </form>
  </div>
