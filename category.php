<?php
include 'config.php';
include 'header.php';
$sql = "SELECT cat_name, cat_description FROM categories";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result))
{
    $cat_name = $row['cat_name'];
    $cat_decription = $row['cat_description'];
    echo '<table>
          <th>Category name</th>
          <th>Category Description</th>
          <tr>
            <td>'.$cat_name.'</td>
              <td>'.$cat_decription.'</td>
          </tr>';
}
include 'footer.php';
?>