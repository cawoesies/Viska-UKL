<?php
include("config.php");

//kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('location: crud.php');
}
$id = $_GET['id'];

//fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM user_form WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $name = $user_data['name'];
    $email = $user_data['email'];
    $password = $user_data['password'];
    $user_type = $user_data['user_type'];
}

?>

<body>
    <header>
        <h3>Formulir Edit User</h3>
    </header>
    <form method="POST" action="proses_edit_user.php">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="name" value="<?php echo $name ?>"></td>
            </tr>
            <tr>
                <td>email</td>
                <td><input type="text" name="email" value="<?php echo $email ?>"></td>
            </tr>    
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" value="<?php echo $password ?>"></td>
            </tr>    
            <tr>
                <td>level</td>
                <td>
                    <select name="user_type" id="user_type" required>
                        <option disabled selected> <?php echo $user_type ?></option>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="Simpan" value="Simpan"></td>
            </tr>
        </table>
    </form>


<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

header {
    background-color: #333;
    color: white;
    padding: 10px 0;
    text-align: center;
}

h3 {
    margin: 0;
}

form {
    background: white;
    padding: 20px;
    max-width: 600px;
    margin: 30px auto;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

table {
    width: 100%;
}

td {
    padding: 10px;
}

input[type="text"] {
    width: calc(100% - 20px);
    padding: 8px;
    margin: 5px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
}

input[type="submit"] {
    background-color: #333;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

input[type="submit"]:hover {
    background-color: #555;
}
</style>