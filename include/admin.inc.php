<?php
class Administrator extends DBConn{


    public function ShowUsers(){ // CHANGE THIS LATER so you can select for example id 25-50 instead of ALL


        $query = "SELECT `id`, `username`, `level`, `email` FROM users";
        $result = $this->connect()->query($query);
        while($row = $result->fetch_assoc()){
            $array[] = $row;
        }
        return $array;
    }

    public function PostNews($title, $content, $tags, $author){
        $date = time();

        $query = "INSERT INTO news(`title`, `content`, `tags`, `author`, `date`) VALUES  ('$title', '$content', '$tags', '$author', '$date')";
        $result = $this->connect()->query($query) or die();
        echo'nice';
    }

}



