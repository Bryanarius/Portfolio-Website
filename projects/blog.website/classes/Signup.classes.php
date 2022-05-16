<?php

class Signup extends Dbh{

    protected function setUser($uid, $pwd, $email) {
        $sql = "INSERT INTO oopusers (username, pwd, email) VALUES (? , ?, ?)";
        $stmt= $this->connect()->prepare($sql);

        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        if(!$stmt->execute(array($uid,$hashedPwd,$email))) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        $stmt = null;

    }


    protected function checkUser($uid, $email) {
        $stmt= $this->connect()->prepare('SELECT id FROM oopusers WHERE id = ? OR email = ?;');

        if(!$stmt->execute(array($uid, $email))) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        $resultCheck;
        if($stmt->rowCount() > 0) {
            $resultCheck = false;
        }
        else {
            $resultCheck = true;
        }

        return $resultCheck;
    }

}