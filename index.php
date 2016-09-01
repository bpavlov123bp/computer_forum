<?php
include 'config.php';
include 'header.php';
$sql = "SELECT cat_name FROM categories";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result))
{
    $name = $row['cat_name'];
    echo '<table>
          <th>Category name</th>
          <th>Topic name</th>
          <tr>
          <td><a href="category.php?cat_name=$name">'.$name.'</a></td>
          </tr>
          </table>';
}
include 'footer.php';
?>