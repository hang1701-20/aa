<?php 
    $sql = "select * from hotels";
    $result = $conn->query($sql);
    echo "
        <table border='1'>
            <tr>
                <td colspan='7'>danh sach</td>
            </tr>
            <tr>
                <td>id</td>
                <td>name</td>
                <td>address</td>
                <td>logo</td>
                <td>owner</td>
                <td>#</td>
            </tr>
    ";
    foreach($result as $value)
    {
        echo"
        <tr>
            <td>$value[id]</td>
            <td>$value[name]</td>
            <td>$value[address]</td>
            <td>$value[logo]</td>
            <td>$value[owner]</td>
            <td><a href='index.php?str=xoa&id=$value[id]'>xoa</a></td>
            <td><a href='index.php?str=sua&id=$value[id]'>sua</a></td>
        </tr>
        ";
    }
    echo "</table>";
?>