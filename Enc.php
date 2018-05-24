<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Codeigniter Library
 *
 * @package  CODEIGNITER
 * @author   SUPARDYKE <supardyke@gmail.com>
 */

class Enc {


    // default value of check hash
    public $check_hashed = false;
    // default value of check md5
    public $check_mded = false;

    public function _construct(){
    }

    public function hash($main){
        if (!empty($main)) {
            $hashed = hash('md5',$main);
        }
        return $hashed;
    }

    public function md5($main){
        if (!empty($main)) {
            $hashed = md5($main);
        }
        return $hashed;
    }

    public function check_hash($main,$hashed){
        $check_hashed = false;
        if (!empty($main) and !empty($hashed)) {
            $h_main = hash('md5',$main);
            if ($h_main == $hashed) {
                $check_hashed = true;
            }
        }
        return $check_hashed;
    }

    public function check_md5($main,$mded){
        $check_mded = false;
        if (!empty($main) and !empty($mded)) {
            $h_main = md5($main);
            if ($h_main == $mded) {
                $check_mded = true;
            }
        }
        return $check_mded;
    }
}