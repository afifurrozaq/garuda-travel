<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tbl_adventure_tour_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get tbl_adventure_tour by id_adventure_tour
     */
    function get_tbl_adventure_tour($id_adventure_tour)
    {
        return $this->db->get_where('tbl_adventure_tour',array('id_adventure_tour'=>$id_adventure_tour))->row_array();
    }
    
    /*
     * Get all tbl_adventure_tour count
     */
    function get_all_tbl_adventure_tour_count()
    {
        $this->db->from('tbl_adventure_tour');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all tbl_adventure_tour
     */
    function get_all_tbl_adventure_tour($params = array())
    {
        $this->db->order_by('id_adventure_tour', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('tbl_adventure_tour')->result_array();
    }
        
    /*
     * function to add new tbl_adventure_tour
     */
    function add_tbl_adventure_tour($params)
    {
        $this->db->insert('tbl_adventure_tour',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update tbl_adventure_tour
     */
    function update_tbl_adventure_tour($id_adventure_tour,$params)
    {
        $this->db->where('id_adventure_tour',$id_adventure_tour);
        return $this->db->update('tbl_adventure_tour',$params);
    }
    
    /*
     * function to delete tbl_adventure_tour
     */
    function delete_tbl_adventure_tour($id_adventure_tour)
    {
        return $this->db->delete('tbl_adventure_tour',array('id_adventure_tour'=>$id_adventure_tour));
    }
}
