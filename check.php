<?php
    $name = $_POST["user_name"];
    if ($name != "42"){
        $hu=fopen("have_users.txt","r");
        $n=intval(fread($hu,filesize("have_users.txt")));
        for ($i=1;$i<=$n;$i+=1){

            $user=fopen("users/user$i.txt","r");
            if($name==fread($user,filesize("users/user$i.txt"))){
                $have=true;
                fclose($user);
                break;
            }
            else{
                fclose($user);
                $have=false;
            }
            
        }
        fclose($hu);
    }
    else{
        header("Location:admin.php");
        exit;
    }
    if(!$have){
        header("Location:error.php");
        exit;
    }
    else{
        header("Location:chat.php?name=$name"); 
    } ?>
