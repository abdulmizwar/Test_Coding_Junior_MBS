<html>
<head>
    <title>Add Users</title>
</head>
 
<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>
 
    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>id</td>
                <td><input type="text" name="id"></td>
            </tr>
            <tr> 
                <td>first name</td>
                <td><input type="text" name="first_name"></td>
            </tr>
            <tr> 
                <td>last name</td>
                <td><input type="text" name="last_name"></td>
            </tr>
            <tr> 
                <td>age</td>
                <td><input type="text" name="age"></td>
            </tr>
          
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    
    <?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $id = $_POST['id'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $age = $_POST['age'];
        
        
        
        // include database connection file
        include_once("config.php");
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO data_santri(id,first_name,last_name,age) VALUES($id,'$first_name','$last_name','$age')");
        
        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>