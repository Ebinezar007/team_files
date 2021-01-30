<?php


$e="SHOW TABLES FROM team";
$query_check=($conn->query($e));
while($rt=$query_check->fetch_object()){
  //  print_r($g);
  $var=$rt->Tables_in_team;
$e1="DROP TABLE $var";
$query_check1=($conn->query($e1));
print_r($query_check1);
}
 // sql to create table
$sql = "CREATE TABLE user (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(30) ,
    lname VARCHAR(30) ,
    email VARCHAR(50)NOT NULL,
    phonenumber INT(10)NOT NULL,
    DOB VARCHAR(30),
    DOJ VARCHAR(30) NOT NULL,
    pass_word INT(20),
    -- profile_pic PROFILE(30)NOT NULL,
    role_u VARCHAR(20) NOT NULL,
    username VARCHAR(20),
    reg_date  TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    modified_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    UNIQUE(email),
    UNIQUE(phonenumber)
    )";
    
    if ($conn->query($sql) == TRUE) {
      // echo "Table user created successfully";
    } else {
      echo "Error creating table: " . $conn->error;
    }

    $table_2 = "CREATE TABLE project (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  
    title VARCHAR(30) NOT NULL,
    descriptions TEXT NOT NULL,
    price INT(50) NOT NULL,
    p_status VARCHAR(30) NOT NULL,
    in_amount INT(10) NOT NULL,
    expire_date INT(20) NOT NULL,
    
    
    
    rolle_num INT(20) NOT NULL,
    username VARCHAR(20) NOT NULL,
    reg_date  TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    modified_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    
    
    
    if ($conn->query($table_2) == TRUE) {
      // echo "Table user created successfully";
    } else {
      echo "Error creating table: " . $conn->error;

    }

   

    $table_3 = "CREATE TABLE assignment (
      id INT(6) UNSIGNED AUTO_INCREMENT,
       u_id INT(10)NOT NULL,
       p_id INT(20)NOT NULL,
       PRIMARY KEY (id),
      --  FOREIGN KEY (id) REFERENCES Project(id),
      
     
     
      reg_date  TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  
      modified_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
      )";
      
      if ($conn->query($table_3) == TRUE) {
        // echo "Table user created successfully";
      } else {
        echo "Error creating table: " . $conn->error;
      }


   



          
         






            $table_4 = "CREATE TABLE works(
           id INT(6) UNSIGNED AUTO_INCREMENT,
           u_id INT(10)NOT NULL,
           p_id INT(20)NOT NULL,
           start_time INT(10)NOT NULL,
           end_time INT(20)NOT NULL,
           PRIMARY KEY (id),
          -- FOREIGN KEY (u_id) REFERENCES assignment(u_id),
      
     
      reg_date  TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  
      modified_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
      )";
      
      if ($conn->query($table_4) == TRUE) {
        // echo "Table user created successfully";
      } else {
        echo "Error creating table: " . $conn->error;
      }
        
    $current_date=date("d-m-y:h:i:sa");
     $insert_values= "INSERT INTO user (	fname	,lname,	email,	phonenumber,		DOJ	,pass_word,	role_u,	username)
     VALUES ('admin','admin','admin@gmail.com','123456789','$current_date','123','super_admin','admin')";
     if ($conn->query($insert_values) == TRUE) {
      echo "inserted";
    } else {
      echo "Error inserted: " . $conn->error;
    }

   
           
            
    
    // rename("app/install.php","app/install.ppp"); 
    // $myfile = fopen("app/install.php", "w") or die("Unable to open file!");
    // $txt = "ALREADY CREATED\n";
    // fwrite($myfile, $txt);         
              

    echo "Table user created successfully";
    $conn->close();
 ?>
