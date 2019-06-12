<?php    
    
include "connect.php";    
    
if(isset($_GET['id'])){    
$sql = "delete from htmlform where id = '".$_GET['id']."'";    
$result = mysql_query($sql);    
}    
    
$sql = "select * from htmlform";    
$result = mysql_query($sql);    
?>    
<html>    
    <body>    
        <table width = "100%" border = "1" cellspacing = "1" cellpadding = "1">    
            <tr>    
                <td>Id</td>    
                <td>First Name</td>    
                <td>Middle Name</td>    
                <td>Last Name</td>    
                <td>Password</td>    
                    
                <td>Email</td>    
                <td>contact number.</td>    
                <td>gender</td>    
                   
                <td colspan = "2">Action</td>    
            </tr>    
        </table>    
    </body>    
</html>    

    
while($row = mysql_fetch_object($result)){    
    
    
?>  
    <tr>  
          
        <td>  
            <?php echo $row->fname;?>  
        </td>  
        <td>  
            <?php echo $row->mname;?>  
        </td>  
        <td>  
            <?php echo $row->lname;?>  
        </td>  
        <td>  
            <?php echo $row->pwd;?>  
        </td>  
        <td>  
            <?php echo $row->cno;?>  
        </td>  
        <td>  
            <?php echo $row->mail;?>  
        </td>  
         
        
        <td> <a href="listing.php?id =     
            <?php echo $row->id;?>" onclick="return confirm('Are You Sure')">Delete    
        </a> | <a href="index.php?id =     
            <?php echo $row->id;?>" onclick="return confirm('Are You Sure')">Edit    
        </a> </td>  
        <tr>  
            <? php } ?>  