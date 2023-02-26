<?php
    $ma_tacgia = $_POST['ma_tgia'];
    $ten_tacgia = $_POST['ten_tgia'];
    
    
 // Bước 01: Kết nối tới DB Server
    $conn = mysqli_connect('localhost','root','','btth01_cse485');
    if(!$conn)
    {
     die('Connection failed: ');
    }
    // Bước 02: Thực hiện truy vấn
    $sql = "DELETE FROM tacgia WHERE ma_tgia='$ma_tacgia'";
    echo $sql.'<br />';
   
    $result = mysqli_query($conn, $sql); 
        
    // Bước 03: Xử lý kết quả trả về
    if(($result) > 0)
    {
     echo"Record Deleted successfully"; 
     header("Location: author.php") ;               
    }
    else{
        echo"Error Deleting record:";
    }

?>