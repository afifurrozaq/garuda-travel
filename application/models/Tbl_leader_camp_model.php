<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tbl_leader_camp_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get tbl_leader_camp by id_leader_camp
     */
    function get_tbl_leader_camp($id_leader_camp)
    {
        return $this->db->get_where('tbl_leader_camp',array('id_leader_camp'=>$id_leader_camp))->row_array();
    }
    
    /*
     * Get all tbl_leader_camp count
     */
    function get_all_tbl_leader_camp_count()
    {
        $this->db->from('tbl_leader_camp');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all tbl_leader_camp
     */
    function get_all_tbl_leader_camp($params = array())
    {
        $this->db->order_by('id_leader_camp', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('tbl_leader_camp')->result_array();
    }
        
    /*
     * function to add new tbl_leader_camp
     */
    function add_tbl_leader_camp($params)
    {
        $this->db->insert('tbl_leader_camp',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update tbl_leader_camp
     */
    function update_tbl_leader_camp($id_leader_camp,$params)
    {
        $this->db->where('id_leader_camp',$id_leader_camp);
        return $this->db->update('tbl_leader_camp',$params);
    }
    
    /*
     * function to delete tbl_leader_camp
     */
    function delete_tbl_leader_camp($id_leader_camp)
    {
        return $this->db->delete('tbl_leader_camp',array('id_leader_camp'=>$id_leader_camp));
    }
}
