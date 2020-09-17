<?php
    require_once 'config.php';

//     $sql = "SELECT * FROM student";   
    
//     $query = mysqli_query ($connect , $sql);
//   // var_dump($query)

//    if ($query -> num_rows > 0 ) {
//        foreach($query as $kay => $value){
//            echo 'Name: '. $value['Name'] . '    Email: '. $value['Email'] . '<br/>';
//        }
//    }else {
//        echo "NO USERS !";
//    }


    $sql = "INSERT INTO student (Name, Email, Phone)
             VALUES ('Badsha', 'badsha@gmail.com', '0129202')";

    $query = mysqli_query($connect , $sql);
         
    // var_dump($query);
    if ($query) {
        echo "Successfully users added  !";
    }else {
        echo " Something went worng ! ";
    }

    // $sql = "DELETE FROM student where id = 10";
    //$query = mysqli_query($connect , $sql);
    //    if ($query) {
    //     echo "Successfully users deleted !";
    // }else {
    //     echo " Something went worng ! ";
    // }

?>