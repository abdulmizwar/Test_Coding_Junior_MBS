<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
    $id = $_POST['id'];
    
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $age=$_POST['age'];


    $created_at=$_POST['created_at'];
    $modified_at=$_POST['modified_at'];
        
    // update user data
    $result = mysqli_query($mysqli, "UPDATE data_santri SET first_name='$first_name',last_name='$last_name',age='$age' WHERE id=$id");
    
    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM data_santri WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $first_name = $user_data['first_name'];
    $last_name = $user_data['last_name'];
    $age = $user_data['age'];
    $created_at = $user_data['created_at'];
    $modified_at = $user_data['modified_at'];
}
?>
<html>
<head>	
    <title>Edit User Data</title>
</head>
 
<body>
    <a href="index.php">Home</a>
    <br/><br/>
    
    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>first_name</td>
                <td><input type="text" name="first_name" value=<?php echo $first_name;?>></td>
            </tr>
            <tr> 
                <td>last_name</td>
                <td><input type="text" name="last_name" value=<?php echo $last_name;?>></td>
            </tr>
            <tr> 
                <td>age</td>
                <td><input type="text" name="age" value=<?php echo $age;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
           
        </table>
    </form>
</body>
</html>