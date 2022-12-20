<?php
include '../admin/session.php';
Session::checklogin();
include '../admin/database.php';
include '../admin/format.php';
?>

<?php
class adminlogin
{
    public function __construct()
    {
        $this->db = new Database();
        $this->fm = new Format();
    }
    public function login_admin($adminUser,$adminPass){
        $adminUser = $this->fm->validation($adminUser);
        $adminPass = $this->fm->validation($adminPass);

        $adminUser = mysqli_real_escape_string($this->db->link,$adminUser);
        $adminPass = mysqli_real_escape_string($this->db->link,$adminPass);

        if(empty($adminUser) || empty($adminPass)){
            $alert = "User and Pass must be not empty";
            return $alert;
        }
        else{
            $query = "SELECT*from tbl_admin where admin_name = '$adminUser' and admin_pw = '$adminPass' LiMIT 1";
            $result = $this->db->select($query);

            if($result != false){
                $value = $result->fetch_assoc();
                // Session::set('login',true);
                $_SESSION['adminlogin'] = true;
                Session::set('adminId',$value['admin_id']);
                Session::set('adminUser',$value['admin_name']);
                Session::set('adminName',$value['admin_name']);
                header('Location:categoryadd.php');
            }
            else{
                $alert = "User and Pass not match";
                return $alert;
            }
        }
    }
}

?>