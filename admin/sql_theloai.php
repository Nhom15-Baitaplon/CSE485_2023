<!-- Thêm thể loại -->
<?php
    $ma_tloai = $_POST['ma_tloai'];
    $ten_tloai = $_POST['ten_tloai'];
    

    
         // Bước 01: Kết nối tới DB Server
        $conn = mysqli_connect('localhost','root','','btth01_cse485');
        if(!$conn){
        die('Connection failed:');
        }
        // Bước 02: Thực hiện truy vấn
        $sql = "INSERT INTO theloai(ten_tloai) VALUES('$ten_tloai')";
        echo $sql;
        $result = mysqli_query($conn, $sql); 
        
        // Bước 03: Xử lý kết quả trả về
        if(($result) > 0){
         echo"New record created successfully";  
         header("Location: category.php") ;            
         }
        else{
            echo"Error: ";
        }
?>

<!-- Xoá Thể Loại -->
<?php
    $ma_tloai = $_GET['id'];
     $ten_tloai = $_POST['ten_tloai'];
    
    
 //Bước 01: Kết nối tới DB Server
    $conn = mysqli_connect('localhost','root','','btth01_cse485');
     if(!$conn)
     {
     die('Connection failed: ');
     }
     // Bước 02: Thực hiện truy vấn
     $sql = "DELETE FROM theloai WHERE `theloai`.`ma_tloai` = ('$ma_tloai')";
     echo $sql.'<br />';
   
     $result = mysqli_query($conn, $sql); 
        
     // Bước 03: Xử lý kết quả trả về
    if(($result) > 0)
    {
     echo"Record Deleted successfully"; 
     header("Location: category.php") ;               
     }
    else{
    }

?>

<!-- Sửa Thể loại -->
<?php
    $ma_tloai = $_POST['ma_tloai'];
    $ten_tloai = $_POST['ten_tloai'];
    
    
     //Bước 01: Kết nối tới DB Server
     $conn = mysqli_connect('localhost','root','','btth01_cse485');
     if(!$conn)
     {
      die('Connection failed: ');
     }
    // Bước 02: Thực hiện truy vấn
     $sql = "UPDATE theloai SET ten_tloai='$ten_tloai' WHERE ma_tloai='$ma_tloai'";
     echo $sql.'<br />';
   
     $result = mysqli_query($conn, $sql); 
        
    // Bước 03: Xử lý kết quả trả về
    if(($result) > 0)
     {
     echo"Record updated successfully";  
     header("Location: category.php") ;              
    }
     else{
         echo"Error updating record:";
     }

?>