<?php
class ForumManager extends DBConn{


    //GETTING THINGS
    public function getCategories(){
        $query = "SELECT * FROM categorie";
        $result = $this->connect()->query($query);
        while($row = $result->fetch_assoc()){
            $categories[] = $row;
        }
        return $categories;
    }

    public function getThreads($parent_categorie){
        $query = "SELECT * FROM thread WHERE parent_categorie='$parent_categorie'";
        $result = $this->connect()->query($query);
        while($row = $result->fetch_assoc()){
            $threads[] = $row;
        }
        return $threads;
    }

    public function getPosts($parent_thread){
        $query = "SELECT * FROM post WHERE parent_thread='$parent_thread'";
        $result = $this->connect()->query($query);
        while($row = $result->fetch_assoc()){
            $categories[] = $row;
        }
        return $categories;
    }


//all of this needs frontend stuff WORKing ON IT WIP
    //ADDING THING
    public function AddCategorie($name, $tags){
        $date = time();

        $query = "INSERT INTO categorie(`name`, `tags`, `date`, `date`) VALUES  ('$name', '$tags', '$date')";
        $result = $this->connect()->query($query);
        echo'nice';
    }

    public function AddForum(){


    }


    public function PostThread($author, $title, $content, $tags){


    }


    public function PostComment($author, $parent_thread, $content){


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
