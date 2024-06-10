<?php

function check ($username , $password , $pdo)
{
    $sql = "SELECT * FROM users";
    $statment = $pdo -> query ($sql);
    $users = $statment -> fetchall (PDO::FETCH_ASSOC);


    $check = array(false , false);
    foreach ($users as $key )
    {
        if ( $username == $key['user_name'] )
        {
            $check[0] = true;
            if ( $password == $key['password'] )
            {
                $check[1] = true;
                $check[] = $key;
            }
        }
    }
    reset($users);
    return $check;
}








