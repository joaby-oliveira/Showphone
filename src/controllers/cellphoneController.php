<?php
include 'src/model/Database.php';
class Cellphone {
    private $db;
    public function getCellphones(){
        $this->db = new Database();
        $query = "SELECT * FROM cellphones";
        $stmt = $this->db->dbh->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function deleteCellphone($id){
        $this->db = new Database();
        $query = "DELETE FROM cellphones WHERE id = $id";
        $stmt = $this->db->dbh->prepare($query);
        return $stmt->execute();
    }
    public function getSingleCellphone($id){
        $this->db = new Database();
        $query = "SELECT * FROM cellphones WHERE id = $id";
        $stmt = $this->db->dbh->prepare($query);
        $stmt->execute();
        return $stmt->fetch();
    }
    public function addCellphone($cellphone){
        $this->db = new Database();
        $query = "INSERT INTO cellphones (
                brand, model, cameraQuantity, ram, rom, fingerPrintSensor, cpuCores, chargerType, frontalFlash, price, imageUrl
            ) values (
                ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?
            )";
        $stmt = $this->db->dbh->prepare($query);
        $stmt->execute($cellphone);
    }
    public function editCellphone($cellphone, $id){
        $this->db = new Database();
        $query = "UPDATE cellphones set
                brand = ?, model = ?, cameraQuantity = ?, ram = ?, rom = ?, fingerPrintSensor = ?, cpuCores = ?, chargerType = ?, frontalFlash = ?, price = ?, imageUrl = ? WHERE id = $id";
        $stmt = $this->db->dbh->prepare($query);
        $stmt->execute($cellphone);
    }
}