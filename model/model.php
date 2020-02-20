<?php
function getBDD(){
    try{
        $bdd = new PDO('mysql:host=localhost:3306;dbname=hospitale2n;charset=utf8','root','');
        $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $bdd;
    }catch(Exception $e){
        die('Erreur: ' . $e->getMessage());
    }
};

function queryAll($sqlQuery = "", $params = array()) {
    $bdd = getBDD();
    $stmt = $bdd->prepare($sqlQuery);
    $offset = 0;
    $stmt-> bindValue('offset',$offset,PDO::PARAM_INT);
    $stmt->execute($params);
    $data = $stmt->fetchAll();
    $stmt->closeCursor();
    return $data;
};

function IncreasePage($offset){
    if ($offset<= getAllPatients()){
        $offset = $offset + 5;
    }
};

function DecreasePage($offset){
    if($offset<= 0 ){
        $offset = 0;
    }
        $offset - 5;
}

function getNbrPage(){
    $page = getAllPatients();
    return $page;
}

function getAllPatients() {
    $data = 'SELECT COUNT(*) FROM patients';
    return $data;
};

function getOffsetPatients() {
    $data = queryAll('SELECT id,lastname,firstname FROM patients LIMIT 100 OFFSET 0');
    return $data;
};

function getRendezVousList(){
    $data = queryAll('SELECT appointments.dateHour, appointments.id AS "idapp", appointments.idPatients, patients.id, patients.lastname, patients.firstname FROM appointments INNER JOIN patients ON appointments.idPatients = patients.id ORDER BY dateHour');
    return $data;
};

function getPatient(){
    $bdd = getBDD();
    $stmt = $bdd -> prepare("SELECT * FROM patients LEFT OUTER JOIN appointments ON patients.id = appointments.idPatients WHERE patients.id=?");
    $stmt-> execute(array($_REQUEST["id"]));
    $data = $stmt->fetchAll();
    return $data;
}

function getARendezVous($id){
    $bdd = getBDD();
    $stmt = $bdd-> prepare("SELECT DATE(appointments.dateHour) AS 'dateHour',TIME(appointments.dateHour) AS 'timess', appointments.id, appointments.idPatients AS 'idPatients', patients.firstname AS 'firstname', patients.lastname AS 'lastname', patients.phone AS 'phone' FROM appointments JOIN patients ON appointments.idPatients = patients.id WHERE appointments.id=? ");
    $stmt-> execute(array($id));
    $data = $stmt -> fetch();
    $stmt->closeCursor();
    return $data;
}