<?php

function emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat)
{
if(empty($name) || empty($email) || empty($username)  || empty($pwd) || empty($pwdRepeat))
    {
    $result = true;
    }
    else
    {
        $result = false;
    }
    return $result;
}

function invalidUid($username)
{
    if(!preg_match("/^[a-zA-Z0-9]+$/",$username))
    {
        $result = true;
    }
    else
    {
        $result = false;
    }
    return $result;
}

function invalidEmail($email)
{
    if(!filter_var($email,FILTER_VALIDATE_EMAIL))
    {
        $result = true;
    }
    else
    {
        $result = false;
    }
    return $result;
}


function pwdMatch($pwd, $pwdRepeat)
{
    if($pwd !== $pwdRepeat )
    {
        $result = true;
    }
    else
    {
        $result = false;
    }
    return $result;
}

function uidExists($conn, $username ,$email)
{
   $sql = "select * from users where usersUid = ? or usersEmail = ?;";
   $stmt = mysqli_stmt_init($conn);
   if(!mysqli_stmt_prepare($stmt,$sql))
   {
        header("location: ../signup.php?error=stmtfailed");
        exit();
   }
   mysqli_stmt_bind_param($stmt,"ss",$username,$email);
   mysqli_stmt_execute($stmt);

   $resultData = mysqli_stmt_get_result($stmt);
   if($row = mysqli_fetch_assoc($resultData))
   {
        return $row;
   }
   else
   {
       $result = false;
       return $result;
   }
   mysqli_stmt_close($stmt);
}



function  createUser($conn,$name,$email,$username,$pwd)
{
   $sql = "insert into users (usersName,usersEmail,usersUid,usersPwd) values (?,?,?,?)";
   $stmt = mysqli_stmt_init($conn);
   if(!mysqli_stmt_prepare($stmt,$sql))
   {
        header("location: ../signup.php?error=stmtfailed");
        exit();
   }
   $hasedPwd = password_hash($pwd, PASSWORD_DEFAULT);
   mysqli_stmt_bind_param($stmt,"ssss",$username,$email,$username,$hasedPwd);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_close($stmt);

   header("location: ../index.php?error=none");
   exit();
}

function emptyInputLogin($username, $pwd)
{
if(empty($username)  || empty($pwd))
    {
    $result = true;
    }
    else
    {
        $result = false;
    }
    return $result;
}

function loginUser($conn,$username,$pwd)
{
    $uidExists = uidExists($conn,$username,$username);
    {
        
        if($uidExists === false)
        {
            header("location: ../login.php?error=wronglogin");
            exit();
        }
        $pwdHashed = $uidExists["usersPwd"];
        $checkpwd = password_verify($pwd,$pwdHashed);
        if($checkpwd === false)
        {
            header("location: ../login.php?error=wronglogin");
            exit();
        }
        elseif($checkpwd === true)
        {
            session_start();
            $_SESSION["userid"] = $uidExists["usersId"];
            $_SESSION["useruid"] = $uidExists["usersUid"];
            header("location: ../index.php");
            exit();
        }
        
    }
}