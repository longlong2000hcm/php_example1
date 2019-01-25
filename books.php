<?php include "menu.php"; ?>
<?php include "connection.php"; ?>
<h2>Books</h2>
<table border="1">
  <thead>
    <tr>
      <th>books_id</th><th>books_name</th><th>author</th><th>isbn</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql="SELECT * FROM books";
    $books=$db->query($sql);
    foreach ($books as $row) {
      echo '<tr>';
      echo '<td>'.$row['books_id'].'</td>';
      echo '<td>'.$row['books_name'].'</td>';
      echo '<td>'.$row['author'].'</td>';
      echo '<td>'.$row['isbn'].'</td>';
      echo '</tr>';
    }
    ?>
</tbody>
</table>
<?php include "footer.php"; ?>
