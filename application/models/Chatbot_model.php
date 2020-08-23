<?php

/**
 * Author: Amirul Momenin
 * Desc:Chatbot Model
 */
class Chatbot_model extends CI_Model
{

	function get_all_chatbot(){
        $this->db->order_by('id', 'desc');
        $result = $this->db->get('chatbot')->result_array();
        
		$db_error = $this->db->error();
		if (!empty($db_error['code'])){
			echo 'Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message'];
			exit;
		}
		return $result;
    }
 }