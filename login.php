<?php
$login=0;
$invalid=0;

if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
    $username=$_POST['username'];
    $password=$_POST['password'];
    $user_type=$_POST['user_type'];



// $sql="select * from `customers` where username='$username' and password='$password' and user_type='$user_type'";
$sql="select * from `customers` where username='$username'and user_type='$user_type' ";
$result=mysqli_query($con,$sql);
if($result){
$num=mysqli_num_rows($result);
    if($num>0){
        while($row=mysqli_fetch_assoc($result)){
            if(password_verify($password,$row['password'])){
              $login=1;
             // echo "Login successfull";
                 echo "<script>
        
                   window.onload=function(){
                    alert('Login successful!!');}
                    </script>";
                    session_start();
                    $_SESSION['username']=$username;
                    header('location:home.php');
    }
    else
    {
       //echo "invalid credentials";
       $invalid=1;
       echo "<script>
        
                   window.onload=function(){
                     alert('password doesnt match');}
                    </script>";
                    // header('location:index.html');
    }
}
}
    else
    {
       //echo "invalid credentials";
       $invalid=1;
       echo "<script>
        
                   window.onload=function(){
                     alert('invalid credentials');}
                    </script>";
    }
}
}

