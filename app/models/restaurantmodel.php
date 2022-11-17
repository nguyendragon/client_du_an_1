
<?php 

class restaurantmodel extends DModel{

    public function __construct(){
        parent::__construct();
    }
    public function restaurantByLink($table,$link){
        $sql = "SELECT * FROM $table WHERE link = '".$link."'";
        return $this->db->select($sql)[0]; 
    }

    public function productById($table, $id_res){
        $sql = "SELECT * FROM $table WHERE id_restaurant = '".$id_res."' ORDER BY id_restaurant DESC";
        return $this->db->select($sql); 
    }

    public function categoryById($table, $id_cate){
        $sql = "SELECT * FROM $table WHERE id_cate = '".$id_cate."'";
        return $this->db->select($sql);
    }
}

?>

