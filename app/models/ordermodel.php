
<?php 

class ordermodel extends DModel{

    public function __construct(){
        parent::__construct();
    }

    public function addOrders($amount, $sale, $price, $total, $id_product, $id_user, $create_at, $time)
    {
        $sql = "INSERT INTO orders SET amount=?,sale=?,price=?,total=?,id_product=?,id_user=?,create_at=?,time=?";
        return $this->db->pdo_execute($sql, $amount, $sale, $price, $total, $id_product, $id_user, $create_at, $time);
    }

    public function listOrders($status, $id_user){
        if ($status == 4) {
            $sql = "SELECT * FROM orders WHERE id_user=? ORDER BY id_order DESC";
            return $this->db->pdo_query($sql, $id_user);
        } else {
            $sql = "SELECT * FROM orders WHERE status_order=? AND id_user=? ORDER BY id_order DESC";
            return $this->db->pdo_query($sql, $status, $id_user);
        }
    }

}

?>

