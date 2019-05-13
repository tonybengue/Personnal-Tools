<?php
	header("Content-type: application/vnd.ms-excel");
	header("Content-Disposition: attachment; filename=test.xls");
	echo 'jinu';
?>
 <br>
 <table style="width:100%" border='1'>
  <tr>
    <th>Prénom</th>
    <th>Nom</th> 
    <th>Age</th>
  </tr>
  <tr>
    <td>Jill</td>
    <td>Smith</td> 
    <td>50</td>
  </tr>
  <tr>
    <td>Eve</td>
    <td>Jackson</td> 
    <td>94</td>
  </tr>
</table>