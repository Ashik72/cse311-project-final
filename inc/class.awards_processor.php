<?php

require_once "config.php";
require_once "vendor/autoload.php";

class awards_processor {

    public static function getDB() {
        $conn = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

        if ($conn->connect_error)
            die("Could not connect!");


        return $conn;

    }

    public static function getStudents() {
        $db = awards_processor::getDB();
        $result = $db->query("SELECT * FROM student");

        if ($result->num_rows <= 0)
            return;
        ob_start();

        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo("<option value='{$row['s_id']}'>{$row['name']}</option>");
        }
        $output = ob_get_clean();
        return $output;

    }

    public static function catch_data($post = []) {

        if (!isset($post) || empty($post)) return;

        if (!isset($post['award_name'])) return;

        $db = self::getDB();

        foreach ($post['award_name'] as $key => $name) {

            if (empty($name)) continue;

            $award_name = self::RemoveSpecialChar($name);
            $place = self::RemoveSpecialChar($post['place'][$key]);
            $organization = self::RemoveSpecialChar($post['organization'][$key]);
            $date = self::RemoveSpecialChar($post['date'][$key]);
            $s_id = self::RemoveSpecialChar($post['s_id']);

            $sql = "INSERT INTO `academic_awards` (`a_id`, `s_id`, `name`, `place`, `organization`, `date`) VALUES (NULL, $s_id, '$award_name', '$place', '$organization', '$date');";

            Kint::dump($sql);
            Kint::dump($db->query($sql));


        }
    }
    public static function RemoveSpecialChar($value){
        $result  = preg_replace('/[^a-zA-Z0-9_ -]/s','',$value);

        return $result;
    }

    public static function render_input_rows($number_of_rows = 0) {
        ob_start();

        for ($i = 0; $i < $number_of_rows; $i++)
            include 'template/form_input_tr.php';

        $output = ob_get_clean();
        return $output;
    }


}

awards_processor::catch_data($_POST);
