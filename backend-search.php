<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link=mysqli_connect("localhost","root","","hospital");
$conn = new mysqli("localhost","root","","hospital");

 
// Check connection
if($link===false){
    die("ERROR: Could not connect. ".mysqli_connect_error());
}
 
if(isset($_REQUEST["term"])){
    // Prepare a select statement
    $sql="SELECT * FROM doctors WHERE docid LIKE ?";
    
    if($stmt=mysqli_prepare($link,$sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt,"s",$param_term);
        
        // Set parameters
        $param_term=$_REQUEST["term"] . '%';
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result=mysqli_stmt_get_result($stmt);
            
            // Check number of rows in the result set
            if(mysqli_num_rows($result) > 0){
                // Fetch result rows as an associative array
                while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                    $docid=$row['docid'];
                    $sql1="SELECT * FROM doctors WHERE docid='{$docid}'";
                    $result1=$conn->query($sql1);

                    while ($row1=$result1->fetch_assoc()) {
                        # code...

                            echo '<span style="background-color:#AFA;text-align:center;">';
                            echo "<p>" . $row["docid"]. $row["name"]. $row["dept"] . "</p>";
                            break;

                    }
                }

            } else{
                echo "<p>No matches found</p>";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
}
 
// close connection
mysqli_close($link);
?>