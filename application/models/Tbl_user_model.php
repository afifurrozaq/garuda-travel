<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tbl_user_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get tbl_user by id_user
     */
    function get_tbl_user($id_user)
    {
        return $this->db->get_where('tbl_user',array('id_user'=>$id_user))->row_array();
    }
    
    /*
     * Get all tbl_user count
     */
    function get_all_tbl_user_count()
    {
        $this->db->from('tbl_user');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all tbl_user
     */
    function get_all_tbl_user($params = array())
    {
        $this->db->order_by('id_user', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('tbl_user')->result_array();
    }
        
    /*
     * function to add new tbl_user
     */
    function add_tbl_user($params)
    {
        $this->db->insert('tbl_user',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update tbl_user
     */
    function update_tbl_user($id_user,$params)
    {
        $this->db->where('id_user',$id_user);
        return $this->db->update('tbl_user',$params);
    }
    
    /*
     * function to delete tbl_user
     */
    function delete_tbl_user($id_user)
    {
        return $this->db->delete('tbl_user',array('id_user'=>$id_user));
    }
}