<?php

function check ($user , $pdo)
{
    $sql = "SELECT * FROM users";
    $statment = $pdo -> query ($sql);
    $users = $statment -> fetchall (PDO::FETCH_ASSOC);
    $check = array( true , true , true);
    foreach ($users as $key )
    {
        if ( $user['username'] == $key['user_name'] )
        {
            $check[0] = false;
        }
    }
    reset($users);
    foreach ($users as $key )
    {
        if ( $user['email'] == $key['email'] )
        {
            $check[1] = false;
        }
    }
    reset($users);
    foreach ($users as $key )
    {
        if ( $user['phone'] == $key['phone'] )
        {
            $check[2] = false;
        }
    }
    reset($users);
    return $check;
}


