<?php


    function connectDB() {

        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $dbname = ' temple_digital_project';

        mysqli_report(MYSQLI_REPORT_STRICT);

        try {

            $con = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
            mysqli_set_charset($con,"utf8");
            date_default_timezone_set('Asia/Bangkok');
            $status = 1;
        } catch (Exception $e ) {

            $status = 0;

        }
        return array('0' => $status, '1' => $con);

    }

    function split_sentence($text, $segment) {

            $text_to_segment = trim($text);
            $wordList = $segment->get_segment_array($text_to_segment);
            return $wordList;
    }

    function remove_stopword($input) {


        $stopWords = array('กล่าว','กว่า','กัน','กับ','การ','ก็','ก่อน','ขณะ','ขอ','ของ','ขึ้น','คง','ครั้ง','ความ','คือ','จะ','จัด','จาก','จึง','ช่วง','ซึ่ง','ดัง','ด้วย','ด้าน','ตั้ง','ตั้งแต่','ตาม','ต่อ','ต่าง','ต่างๆ','ต้อง','ถึง','ถูก','ถ้า','ทั้ง','ทั้งนี้','ทาง','ที่','ที่สุด','ทุก','ทํา','ทําให้','นอกจาก','นัก','นั้น','นี้','น่า','นํา','บาง','ผล','ผ่าน','พบ','พร้อม','มา','มาก','มี','ยัง','รวม','ระหว่าง','รับ','ราย','ร่วม','ลง','วัน','ว่า','สุด','ส่ง','ส่วน','สําหรับ','หนึ่ง','หรือ','หลัง','หลังจาก','หลาย','หาก','อยาก','อยู่','อย่าง','ออก','อะไร','อาจ','อีก','เขา','เข้า','เคย','เฉพาะ','เช่น','เดียว','เดียวกัน','เนื่องจาก','เปิด','เปิดเผย','เป็น','เป็นการ','เพราะ','เพื่อ','เมื่อ','เรา','เริ่ม','เลย','เห็น','เอง','แต่','แบบ','แรก','และ','แล้ว','แห่ง','โดย','ใน','ให้','ได้','ไป','ไม่','ไว้','้ง','ควร');


        $result = array_diff($input,$stopWords);
        //echo '<h4> List of stopwords:</h4>';
        //echo implode('|', $stopWords);
        return $result;
    }


?>
