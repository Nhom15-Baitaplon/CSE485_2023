<!-- Thêm bài viết -->
<?php
    $ma_bviet = $_POST['ma_bviet'];
    $tieude = $_POST['tieude'];

         // Bước 01: Kết nối tới DB Server
        $conn = mysqli_connect('localhost','root','','btth01_cse485');
        if(!$conn){
        die('Connection failed:');
        }
        // Bước 02: Thực hiện truy vấn
        $sql = "INSERT INTO baiviet(tieude) VALUES('$tieude')";
        echo $sql;
        $result = mysqli_query($conn, $sql); 
        
        // Bước 03: Xử lý kết quả trả về
        if(($result) > 0){
         echo"New record created successfully";  
         header("Location: article.php") ;            
         }
        else{
            echo"Error: ";
        }
?>

<!-- Xoá bài viết -->
<?php
    $ma_bviet = $_GET['id'];
     $tieude = $_POST['tieude'];
    
    
 //Bước 01: Kết nối tới DB Server
    $conn = mysqli_connect('localhost','root','','btth01_cse485');
     if(!$conn)
     {
     die('Connection failed: ');
     }
     // Bước 02: Thực hiện truy vấn
     $sql = "DELETE FROM baiviet WHERE `baiviet`.`ma_bviet` = $ma_bviet " ;
     echo $sql.'<br />';
   
     $result = mysqli_query($conn, $sql); 
        
     // Bước 03: Xử lý kết quả trả về
    if(($result) > 0)
    {
     echo"Record Deleted successfully"; 
     header("Location: article.php") ;               
     }
    else{
    }

?>

<!-- Sửa bài viết -->
<?php
    $ma_bviet = $_POST['ma_bviet'];
    $tieude = $_POST['tieude'];
    $ma_tloai = $_POST['ma_tloai'];
    
    
     //Bước 01: Kết nối tới DB Server
     $conn = mysqli_connect('localhost','root','','btth01_cse485');
     if(!$conn)
     {
      die('Connection failed: ');
     }
    // Bước 02: Thực hiện truy vấn

     $sql = "UPDATE `baiviet` SET `ma_tloai` = $ma_tloai WHERE `baiviet`.`ma_bviet` = $ma_bviet";
     echo $sql.'<br />';

     $result = mysqli_query($conn, $sql); 

    // Bước 03: Xử lý kết quả trả về
    if(($result) > 0)
     {
     echo"Record updated successfully";  
     header("Location: article.php") ;              
    }
     else{
         echo"Error updating record:";
     }

?>