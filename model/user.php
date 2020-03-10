<?php
require_once 'dataBase.php';
/**
 * Description of User
 *
 * @author albrecht
 */
class users {
  /**
   *
   * @var type integer
   */
    public $id;
    /**
     *
     * @var type string
     */
    public $pseudo;
    /**
     *
     * @var type bool
     */
    
    public $email;
    /**
     *
     * @var type string
     */
    public $userPassword;
    /**
     *
     * @var type integer
     */
    
    public $db;
    
    /**
     * Le constructeur de la classe utilisateur
     */
    
    public function __construct($_pseudo = '', $_email = '', $_userPassword = '') {
        
        $this->pseudo = $_pseudo;
        $this->email = $_email;
        $this->userPassword = $_userPassword;
        
        $this->db = Database::getInstance();
    }

    public function create() {
        $sql = 'INSERT INTO `users`(`pseudo`,`email`,`userPassword`) VALUES (:pseudo, :email, :userPassword)';
        $req = $this->db->prepare($sql);
        $req->bindValue(':pseudo', $this->pseudo, PDO::PARAM_STR);
        
        $req->bindValue(':email', $this->email, PDO::PARAM_STR);
        $req->bindValue(':userPassword', $this->userPassword, PDO::PARAM_STR);
    
        $req->execute();
    }
    // il faut changer les users en fonction de ma base de donnée
    public function getOne() {
        $sql = 'SELECT `id`,`pseudo`,`email`,`userPassword`, `id_cathusers` FROM `users` WHERE `id` = :id OR `email` = :email';
        $req = $this->db->prepare($sql);
        $req->bindValue(':id', $this->id, PDO::PARAM_INT);
        $req->bindValue(':email', $this->email, PDO::PARAM_STR);

        if ($req->execute()) {
            $users = $req->fetch(PDO::FETCH_OBJ);
            $this->id = $users->id;
            $this->pseudo = $users->pseudo;
           
            $this->email = $users->email;
            $this->userPassword = $users->userPassword;
            $this->id_cathusers = $users->id_cathusers;
            return $this;
        }
    }
    
    public function checkEmail() {
        $sql = 'SELECT COUNT(`id`) AS number_user FROM `users` WHERE `email` = :email';
        $req = $this->db->prepare($sql);
        $req->bindValue(':email', $this->email, PDO::PARAM_STR);
        $exist_user = false;
        if($req->execute()){
            $result = $req->fetchColumn(0);
            if(is_numeric($result) && $result > 0){
                $exist_user = true;
            }
        }
        return $exist_user;
    }
    
    public function update() {
        $sql = 'UPDATE `users` SET `pseudo`= :pseudo, `email`= :email, `userPassword` = :userPassword  WHERE `id` = :id';
        $sth = $this->db->prepare($sql);
        $sth->bindValue(':pseudo', $this->pseudo, PDO::PARAM_STR);
        
        $sth->bindValue(':email', $this->email, PDO::PARAM_STR);
        $sth->bindValue(':userPassword', $this->userPassword, PDO::PARAM_STR);
        $sth->bindValue(':id', $this->id, PDO::PARAM_INT);
        if ($sth->execute()) {
            return $this;
        }
        return false;
    }
    
    public function updatepwd() {
        $sql = 'UPDATE `users` SET `userPassword` = :userPassword WHERE `email` = :email';
        $sth = $this->db->prepare($sql);
        $sth >bindValue(':userPassword', $this->userPassword, PDO::PARAM_STR);
        if ($sth->execute()) {
            return $this;
        }
        return false;
    }
    
    public function delete() {
        $sql = 'DELETE FROM `users` WHERE `id` = :id';
        $sth = $this->db->prepare($sql);
        $sth->bindValue(':id', $this->id, PDO::PARAM_INT);
        if ($sth->execute()) {
            return $this;
        }
        return false;
    }
    
}