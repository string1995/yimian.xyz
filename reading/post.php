   <?php  

$name=$_POST['name'];

$start=date('y-m-d',time());
  
            $mydbhost = "localhost";  
            $mydbuser = "yimian";  
            $mydbpass = 'lymian0904';  
            $conn = mysqli_connect($mydbhost, $mydbuser, $mydbpass);  
            if(! $conn){  
                die("connect error: " . mysqli_error($conn));  
            }  
            mysqli_select_db( $conn, 'yimian');  
            $sql="INSERT INTO reading set name='$name',start='$start'"; 
 
	
	if ($conn->query($sql) === TRUE) {echo "<script>window.location.href='index.php'</script>";
   
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
           
            mysqli_close($conn);  
        ?>  