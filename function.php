<?php
    include 'dbcon.php';

    function search_result($keywords){
        global $connection;
        //this array store search result
        $searched_results = array();
         
        $where=""; 
        $keywords=preg_split("/[\s]+/",$keywords);
        $total_keywords= count($keywords);
        foreach($keywords as $key =>$keyword){
            $where .= "keywords LIKE '%$englishshalok%'";
            if($key != $total_keywords-1){
                $where .=" AND ";
            }
        }

        $query="SELECT hindishalok,englishshalok,meaningofshalok,hinditatparya,englishtatparya, FROM shalok WHERE $where";
        $result=mysqli_query($connection,$query);
        $result_num="";

        if($result){
            $result_num=mysqli_num_rows($result);
        }else{
            $result_num=0;
        }
        if($result_num===0){
            return false;
        }else{
            while($result_row=mysqli_fetch_assoc($result)){
                $returned_result[]=array(
                    'hindishalok'=>$result_row['hindishalok'],
                    'englishshalok'=>$result_row['englishshalok'],
                    'meaningofshalok'=>$result_row['meaningofshalok'],
                    'hinditatparya'=>$result_row['hinditatparya'],
                    'englishtatparya'=>$result_row['englishtatparya'],

                );
            }
            return $returned_result;
        }
    }
?>