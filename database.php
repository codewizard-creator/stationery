
<?php



class veritabanı {
    
    public $connection;
    private $query;
    public $results;

    public function __construct($host = 'localhost' , $username = 'root' ,$password = '', $dbname = 'kırtasiye')
    {
        $this->connection = new mysqli($host,$username,$password,$dbname);

        if($this->connection->connect_error) {
          $this->error;
        } else {
            echo '';
        }
    }
    public function select($query) {
        $results = $this->connection->query($query);
            if($results -> num_rows > 0)
            return $results;
            else
            return false;
        

    }




}

?>