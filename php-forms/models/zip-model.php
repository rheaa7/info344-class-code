<<<<<<< HEAD
<?php
class Zips {
	protected $conn;

	public function __construct($conn) {
		$this->conn = $conn;
	}

	public function search($q) {
		$sql = 'select * from zips where zip=? or primary_city=?';
		$stmt = $this->conn->prepare($sql);
		$success = $stmt->execute(array($q,$q));
		if(!$success) {
			trigger_error($stmt->errorInfo());
			return false;
		} else {
			return $stmt->fetchAll();
		}
	}
=======
<?php 
class Zips {
    protected $conn;
    
    public function __construct($conn) {
        $this->conn = $conn;
    }
    
    public function search($q) {
        $sql = 'select * from zips where zip=? or primary_city=?';
        $stmt = $this->conn->prepare($sql);
        $success = $stmt->execute(array($q,$q));
        if (!$success) {            
            var_dump($stmt->errorInfo());
            return false;
        } else {
            return $stmt->fetchAll();
        }
    }
>>>>>>> 2cf08cf17a3f5dd45e47699cc347b2ecbb7c7ea1
}
?>