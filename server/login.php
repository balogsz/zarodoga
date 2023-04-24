<?php
    session_start();
    require_once 'configDb.php';
    extract($_POST);

    
    $sql="SELECT password pwCrypted FROM users WHERE username='{$username}'";
    
    try{
        $stmt=$db->query($sql);
        if($stmt->rowCount()==1){
            $row=$stmt->fetch();
            extract($row);
            $isValid=password_verify($password,$pwCrypted);
            if($isValid){
                $_SESSION['username']=$username;
                echo json_encode(["msg"=>"OK"]);
                
            }
            else{
                echo json_encode(["msg"=>"Hibás felhasználónév vagy jelszóó"]);
            }
        }
        else{
            echo json_encode(["msg"=>"Hibás felhasználónév"]);
        }

    }catch(exception $e){
        echo json_encode(["msg"=>"Sikertelen regisztáció! {$e}"]);
    }
?>