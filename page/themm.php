<form method='POST' enctype ='mutipari/form-data'>
        <table border='1' >
         <tr>
            <td colspan = '2'>Sua thong tin</td>
         </tr>
         <tr>
            <td>name</td>
            <td><input type='text' name='name'></td>
         </tr>
         <tr>
            <td>address</td>
            <td><input type='text'  name='address' ></td>
         </tr>
         <tr>
            <td>logo</td>
            <td><input type='text'  name='logo' ></td>
         </tr>
         <tr>
            <td>owner</td>
            <td><input type='text'  name='owner' ></td>
         </tr>
         <tr>
         <td colspan='2'><input type='submit' name='sub' value='Update'></td>
         </tr>

        </table>
        </form>
<?php 
   if(isset($_POST['sub']))
   {
       $name = $_POST['name'];
       $address = $_POST['address'];
       $logo = $_POST['logo'];
       $owner = $_POST['owner'];
       $sql = "insert into hotels(name,address,logo,owner) value('$name', '$address', ' $logo', '$owner')";
       if($conn->exec($sql))
       echo "them thanh cong</br>";
   }    
   echo "<a href='index.php'>Home</a>";
  
?>