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
        $this->title = $title;
        $this->content = $content;
        $this->tags = $tags;
        $this->author = $author;
        $this->date = time();

        $query = "INSERT INTO news(`title`, `content`, `tags`, `author`, `date`) VALUES  ('$this->title', '$this->content', '$this->tags', '$this->author', '$this->date')";
        $result = $this->connect()->query($query) or die();


        if($result){
            echo'xd???';

        }
        echo'xd?';
    }

}



