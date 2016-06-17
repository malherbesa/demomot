<?php
/**
 * Created by PhpStorm.
 * User: malherbesa
 * Date: 15.06.16
 * Time: 12:03
 */
class connectToDB{

    private $connexion;

    //Name : dbConnect
    //Param : -
    //Return : -
    //Purpose : Connect to database
    private function dbConnect(){
        $con = new PDO('mysql:dbname=db_run;host=localhost','samuel','malherbesa.etml', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')) or die("Connexion a échoué");
        $this->connexion = $con;

    }//End dbConnect()

    //Name : dbUnconnect
    //Param : -
    //Return : -
    //Purpose : Disconnect from the database
    private function dbUnconnect(){
        unset($this->connexion);
    }//End dbUnconnect()

    /**
     * Name : dbUnconnect
     * @param $request
     * @return mixed
     */
    private function executeSQLRequest($request) {

        //Connect to database
        $this->dbConnect();

        // Execute request
        $connect = $this->connexion;
        $sqlRequest=$connect->prepare($request);
        $sqlRequest->execute() or die("La requête a échoué");

        //Puts the value in a tab assoc and returns the result
        $sqlResult=$sqlRequest->fetchAll(PDO::FETCH_ASSOC);
        return $sqlResult;

    } // end executeSQLRequest()

    /**
     * Name : getAllTeacher
     * @return mixed
     */
    public function setAllLocal(){
        $rqst = "SELECT * FROM `t_town` ";

        return $this->executeSQLRequest($rqst);
    }

    /**
     * Name : getAllTeacher
     * @return mixed
     */
    public function selectLocal($locality){
        $rqst = "SELECT * FROM `t_town` WHERE `toName` = '$locality'";
        echo "$rqst";
        return $this->executeSQLRequest($rqst);
    }
    /**
     * Name : getAllTeacher
     * @return mixed
     */
    public function insert($FName,$LName,$Year,$Sexe,$town){
        $rqst = "INSERT INTO `db_run`.`t_runner` (`idRunner`, `ruFName`, `ruLName`, `ruYearOfBirth`, `ruSexe`, `fktown`) VALUES (NULL, '$FName', '$LName', '$Year', '$Sexe', '$town')";
        echo "$rqst";
        return $this->executeSQLRequest($rqst);
    }
}