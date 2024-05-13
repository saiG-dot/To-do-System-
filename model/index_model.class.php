<?php
    date_default_timezone_set('Asia/Manila');
    class savingClass
    {
        public function submitFunction($connection,$username,$password)
        {
            $sqlstring = "INSERT INTO user_accounts(username,password)VALUES('{$username}','{$password}')";
            $result_stmt = $connection->prepare($sqlstring);
            $result_stmt->execute();
            echo $username;
        }
    }
?>