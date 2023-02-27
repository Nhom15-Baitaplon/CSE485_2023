<?php
     $host = "localhost";
     $username = "root";
     $password = "";
     $dbname = "btth01_cse485";
 
     $conn = new mysqli($host,$username,$password,$dbname);
 
     if($conn->connect_error){
         die("kết nối không thành công:". $conn->connect_error);
 
     }
     if(isset($_POST['dangky'])){
        
        
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(!empty($username)&&!empty($password)){
            //echo"</pre>";
            //print($_POST);

            $sql = "INSERT INTO tbl_user(user_name,password) VALUES('$username','$password')";
            
            if ($conn-> query($sql) )
            {
                echo "Lưu dữ liệu thành công";
                header("Location: index.php") ; 
            }else{
                echo "Lỗi{$sql}".$conn->error;
            }
        }else{
            echo "Bạn cần nhập đầy đủ thông tin";
        }
     }



?>