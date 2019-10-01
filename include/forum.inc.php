<?php
class ForumManager extends DBConn{


    //GETTING THINGS
    public function getForums(){
        $query = "SELECT * FROM forum";
        $result = $this->connect()->query($query);
        while($row = $result->fetch_assoc()){
            $forum[] = $row;
        }
        return $forum;
    }



    public function getCategories(){
        $query = "SELECT * FROM categorie";
        $result = $this->connect()->query($query);
        while($row = $result->fetch_assoc()){
            $categories[] = $row;
        }
        return $categories;
    }

    public function getThreads($parent_cat){
        $query = "SELECT * FROM thread WHERE parent_category='$parent_cat'";
        $result = $this->connect()->query($query);
        while($row = $result->fetch_assoc()){
            $threads[] = $row;
        }
        return $threads;
    }

    public function getThread($threadID){
    $query = "SELECT * FROM thread WHERE id='$threadID'";
    $result = $this->connect()->query($query);
    while($row = $result->fetch_assoc()){
        $thread[] = $row;
    }


        return $thread;
    }

    public function getPosts($parent_thread){
        $query = "SELECT * FROM posts WHERE parent_thread='$parent_thread'";
        $result = $this->connect()->query($query);
        while($row = $result->fetch_assoc()){
            $categories[] = $row;
        }
        return $categories;
    }


//all of this needs frontend stuff WORKing ON IT WIP
    //ADDING THING
    public function AddCategorie($name, $tags, $parent_forum){
        $date = time();

        $query = "INSERT INTO categorie(`name`, `tags`, `creation_date`, `parent_forum`) VALUES  ('$name', '$tags', '$date', '$parent_forum')";
        $result = $this->connect()->query($query);
        echo'Added Categorie';
    }

    public function AddForum($name){
        $date = time();

        $query = "INSERT INTO forum(`name`, `creation_date`, `parent_forum`) VALUES  ('$name', '$date')";
        $result = $this->connect()->query($query);
        echo'Forum Created';

    }


    public function PostThread($author, $title, $content, $tags, $parent_categorie){
        $date = time();

        $query = "INSERT INTO thread(`author`, `title`, `content`, `tags`, `parent_categorie`) VALUES  ('$author', '$date')";
        $result = $this->connect()->query($query);
        echo'Forum Created';

    }


    public function PostComment($author, $parent_thread, $content){
        $date = time();

        $query = "INSERT INTO posts(`author`, `title`, `content`, `tags`, `parent_categorie`) VALUES  ('$author', '$date')";
        $result = $this->connect()->query($query);
        echo'Forum Created';

    }


    //EDITING THING
    public function EditCategories($catID, $name, $tags){


    }


    public function EditThread($threadID, $content, $tags){


    }


    //Deleting things
    public function DeleteThread($threadID, $reason){


    }
    public function DeleteCategories($catID){


    }

    public function DeletePost($postID, $reason){


    }

}
