<html>
 <head>
  <title>Multipurpose Form</title>
 </head>
 <body>
  <form action="#" method="post">
   <table>
     <tr>
     <td>Eligue la opcion que quieres<br/></td>
     <td>
      <select name="hola:profe">
       <option value=""> <?php echo $_POST['name1']; ?></option>
       <option value=""><?php echo $_POST['name2']; ?></option>
       <option value=""><?php echo $_POST['name3']; ?></option>
       <option value=""><?php echo $_POST['name4']; ?></option>
       <option value=""><?php echo $_POST['name5']; ?></option>
      </select>
     </td>
    </tr>
   </table>
  </form>
 </body>
</html>