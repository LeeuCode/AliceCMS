<?php

/**
 * Create CSRF input.
 *
 * @return string
 */
function get_csrf_input()
{
    $CI = &get_instance();
    echo '<input type="hidden" name="'.$CI->security->get_csrf_token_name().'" value="'.$CI->security->get_csrf_hash().'">';
}

function redirect_back()
{
    redirect($_SERVER['HTTP_REFERER']);
}

function is_conn()
{
    include APPPATH.'config/database.php';

    $hostname = $db['default']['hostname'];
    $username = $db['default']['username'];
    $password = $db['default']['password'];
    $database = $db['default']['database'];

    @$con = mysqli_connect($hostname,$username,$password,$database);

    // Check connection
    if (mysqli_connect_errno())
    {
        return TRUE;
    } else {
        return FALSE;
    }
}
