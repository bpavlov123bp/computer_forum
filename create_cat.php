<?php
include 'config.php';
include 'header.php';
if($_SERVER['REQUEST_METHOD'] != 'POST')
{
    echo '<form method="post" action="">
           <table>
           <tr>
          <td>Category name: <input type="text" name="cat_name"/></td>
          </tr>
          <tr>
          <td>Category description: <textarea name="cat_description"></textarea></td>
          </tr>
          <tr>
          <td><input type="submit" value="Add category"/></td>
          </tr>
          </table>
          </form>';
}
else
{
    $sql = "INSERT INTO
                    categories(cat_name, cat_description)
                VALUES('" . mysqli_real_escape_string($conn, $_POST['cat_name']) . "',
                       '" . mysqli_real_escape_string($conn, $_POST['cat_description']) . "')";
    $result = mysqli_query($conn, $sql);
    if(!$result)
    {
        echo 'Error!' . mysqli_error($result);
    }
    else
    {
        echo 'New category successfully added.';
    }
}
include 'footer.php';
?>