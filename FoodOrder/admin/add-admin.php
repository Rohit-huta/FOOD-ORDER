<?php include('partials/menu.php') ?>
    <div class="main-content">
        <div class="wrapper">
            <h1>Add Admin</h1>

            <form action="" method="POST">
                <table class="tbl-30">
                    <tr>
                        <td>Full Name:</td>
                        <td><input type="text" name="full_name" placeholder="Enter your full Name"></td>
                    </tr>
                    <tr>
                        <td>UserName:</td>
                        <td><input type="text" name="user_name" placeholder="Enter your Username"></td>
                    </tr>
                    <tr>
                        <td>Password :</td>
                        <td><input type="password" name="password" placeholder="Enter your password"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" name="submit" value="Add Admin" class='btn-secondary'>
                        </td>
                       
                    </tr>
                </table>
            </form>
        </div>
    </div>
<?php include('partials/footer.php') ?>


<?php 


    // PROCESS THE VALUE FROM THE FORM AND SAVE IT IN THE DATABASE

    // Check whether the submit button is clicked or not
    if(isset($_POST['submit'])){
        // echo "Button clicked";

        $full_name = $_POST['full_name'];
        $user_name = $_POST['user_name'];
        $password = md5($_POST['password']);
        
        $conn = mysqli_connect('localhost', 'root', '', 'foodOrder');

        $sql = "INSERT INTO tbl_admin SET full_name = '{$full_name}', username = '{$user_name}', password = '{$password}' ";

        $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        
        if($res){
        return $res;
        }else{
        echo "NOT SUCCESSFUL";
        return $res;     
        }
        
    }
ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
?>  