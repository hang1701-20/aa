<?php 
    $id = $_GET['id'];
    $sql ="select * from hotels where id = $id";
    $query = $conn->query($sql);
    $rs = $query->fetch(PDO::FETCH_ASSOC);
    echo
    "
    <form method='POST' enctype ='mutipari/form-data'>
        <table border='1' >
         <tr>
            <td colspan = '2'>Sua thong tin</td>
         </tr>
         <tr>
            <td>name</td>
            <td><input type='text' name='name' value='$rs[name]'></td>
         </tr>
         <tr>
            <td>address</td>
            <td><input type='text'  name='address' value='$rs[address]'></td>
         </tr>
         <tr>
            <td>logo</td>
            <td><input type='text'  name='logo' value='$rs[logo]'></td>
         </tr>
         <tr>
            <td>owner</td>
            <td><input type='text'  name='owner' value='$rs[owner]'></td>
         </tr>
         <tr>
         <td colspan='2'><input type='submit' name='sub' value='Update'></td>
         </tr>

        </table>
        </form>
    ";
    if(isset($_POST['sub']))
    {
        $name = $_POST['name'];
        $address = $_POST['address'];
        $logo = $_POST['logo'];
        $owner = $_POST['owner'];
        $sql="update hotels set name = '$name', address= '$address', logo= '$logo', owner='$owner' where id = $id";
        $conn->exec($sql);
        echo "thanh cong";
    }
    echo "<a href='index.php'>Home</a>";
  


?>