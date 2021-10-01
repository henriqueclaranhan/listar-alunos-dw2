<?php
    class Database {
        private $host;
        private $name;
        private $user;
        private $password;

        function __construct() {
            $this->host = "HOST";
            $this->name = "DB_NAME";
            $this->user = "USER";
            $this->password = "PASSWORD";
        }

        public function getConnection() {
            try {
                $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
                return new PDO('pgsql:host='.$this->host.'; dbname='.$this->name, $this->user, $this->password, $options);
            }
            catch (PDOException $e) {
                return null;
            }
        }
    }
?>
