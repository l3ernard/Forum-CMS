<?php
class styleManager extends DBConn{
    public function getStyles(){
        $query = "SELECT * FROM style";
        $result = $this->connect()->query($query);
        while($row = $result->fetch_assoc()){
            $array[] = $row;
        }
        return $array;

    }


    public function setStyle($newStyle){
        $query = "UPDATE configuration SET style='$newStyle'";
        $result = $this->connect()->query($query);
        echo'uh';
    }

    public function getStyle(){
        $query = "SELECT style FROM configuration";
        $result = $this->connect()->query($query);
        $return = $result->fetch_assoc();


        return $return['style'];
    }
}

?>