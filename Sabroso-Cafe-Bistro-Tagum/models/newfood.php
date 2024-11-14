<?php
class Products {
    public $id;
    public $fname;
    public $prize;
    public $size;
    public $type;
    public $img;
    

    public static $tblName = "tblproducts";

    function __construct($fname =NULL, $prize =NULL, $size =NULL, $type =NULL) {
        $this->fname = $fname;
        $this->prize = $prize;
        $this->size = $size;
        $this->type = $type;
      
        
    }

    public function save(){
        require("../dbconfig.php");
        
        $file_name = $_FILES['image']['name'];
        $tempname = $_FILES['image']['tmp_name'];
        $folder = '../images/menu/productImages/'.$file_name;


        $sql = "INSERT INTO ".self::$tblName." (fname,prize,size,type,img)
        VALUES ('".$this->fname."','".$this->prize."','".$this->size."','".$this->type."','".$file_name."')";
       
      
        if ($conn->query($sql) === TRUE) {
            if (move_uploaded_file($tempname, $folder)) {
              echo " Added Successfully";
            } else {
              echo "Error uploading file: " . $_FILES['image']['error']; 
            }
          } else {
            echo "Error inserting menu into database: " . mysqli_error($conn);
          }
        $conn->close();

        }




    public static function getAll(){
        require("../dbconfig.php");

        $sql = "SELECT * FROM ".self::$tblName;
        $result = $conn->query($sql);

        $conn->close();
        return $result;
    }

    public static function search($id){
        require("dbconfig.php");

        $sql = "SELECT * FROM ".self::$tblName.
                " WHERE id=$id";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            $emp = new  Products();
            while($row = $result->fetch_assoc()){
                $emp->id = $row["id"];
                $emp->fname = $row["fname"];
                $emp->prize = $row["prize"];
                $emp->size = $row["size"];
                $emp->type = $row["type"];
                $emp->img = $row["img"];
                
                
            }
            return $emp;
           
        }else{
            echo "Products not found.";
        }

        
        $conn->close();
    }
 
    public function update(){
        require("dbconfig.php");
        
            $sql = "UPDATE ".self::$tblName." SET fname = '$this->fname', prize = '$this->prize', size = '$this->size', type  = '$this->type' WHERE id = $this->id";

            if($conn->query($sql)===TRUE){
                header("location:pages/menu.php");
            }else {
                echo "error";
            }
        $conn->close();
    }
}
?>
