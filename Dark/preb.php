<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="dist/jquery.tabledit.js"></script>
<script type="text/javascript" src="custom_table_edit.js"></script>

<table id="data_table" class="table table-striped">
<thead>
<tr>
<th>Id</th>
<th>Name</th>
<th>Gender</th>
<th>Age</th>
<th>Designation</th>
<th>Address</th>
</tr>
</thead>
<tbody>
<?php
{
?>
<tr id="<?php echo $developer ['id']; ?>">
<td><?php echo $developer ['id']; ?></td>
<td><?php echo $developer ['name']; ?></td>
<td><?php echo $developer ['gender']; ?></td>
<td><?php echo $developer ['age']; ?></td>
<td><?php echo $developer ['designation']; ?></td>
<td><?php echo $developer ['address']; ?></td>
</tr>
<?php } ?>
</tbody>
</table>

$(document).ready(function(){
$('#data_table').Tabledit({
deleteButton: false,
editButton: false,
columns: {
identifier: [0, 'id'],
editable: [[1, 'name'], [2, 'gender'], [3, 'age'], [4, 'designation'], [5, 'address']]
},
hideIdentifier: true,
url: 'live_edit.php'
});
});