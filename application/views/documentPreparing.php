<?php

        include "utility.php";

        function remove_empty($array) {
          return array_filter($array, '_remove_empty_internal');
        }

        ////main program
        $connection = connectDB();
        $connected=$connection['0'];
        $con=$connection['1'];

        if ($connected)  {
            $sql= "select * from temple";
            $rs=$con->query($sql);
            $arr = $rs->fetch_all(MYSQLI_ASSOC);

            include(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'THSplitLib/segment.php');
            $segment = new Segment();

            $invertedIndex = [];
            $curStartNum = 1;
            foreach($arr as $row) {

                //1. Thai word segmentation

                $result_segment = split_sentence($row['detail'],$segment);

                //2. Thai stopword removal

                $result_stopwordremove = remove_stopword($result_segment);


                //3. Create inverted index
                $i=1;
                foreach ($result_stopwordremove as $word) {
                   // echo $i . '--' . $word . '<br>';
                    if ($i >= $curStartNum) {
                        //echo '--- <br>';
                        if (!array_key_exists($word, $invertedIndex)) {
                            $invertedIndex[$word] = $row['temple_ID'];
                        } else {
                            $eachDoc = explode(';', $invertedIndex[$word]);
                            if (!($eachDoc[count($eachDoc)-1] == $row['temple_ID']))
                              $invertedIndex[$word] = $invertedIndex[$word] . ';' . $row['temple_ID'];
                        }

                    }
                    $i++;

                } //foreach ($result_stopwordremove as $word) {


                $curStartNum = $i;
               // echo "--- " . $curStartNum . '<br>';

            } // foreach($arr as $row) {


            //4. Save inverted index to db
            $sql = "INSERT INTO inverted_index (ID, keyword, DocID) VALUES ";
            foreach ($invertedIndex as $index => $docList) {
                $sql .= "(null,'" . $index . "','" . $docList . "'),";
            }
            $sql = rtrim($sql, ",");
            $sql .= ';';
            $rs=$con->query($sql);


        }
?>
