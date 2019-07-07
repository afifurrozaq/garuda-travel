<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tbl_article_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get tbl_article by id_article
     */
    function get_tbl_article($id_article)
    {
        return $this->db->get_where('tbl_article',array('id_article'=>$id_article))->row_array();
    }
    
    /*
     * Get all tbl_article count
     */
    function get_all_tbl_article_count()
    {
        $this->db->from('tbl_article');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all tbl_article
     */
    function get_all_tbl_article($params = array())
    {
        $this->db->order_by('id_article', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('tbl_article')->result_array();
    }
        
    /*
     * function to add new tbl_article
     */
    function add_tbl_article($params)
    {
        $this->db->insert('tbl_article',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update tbl_article
     */
    function update_tbl_article($id_article,$params)
    {
        $this->db->where('id_article',$id_article);
        return $this->db->update('tbl_article',$params);
    }
    
    /*
     * function to delete tbl_article
     */
    function delete_tbl_article($id_article)
    {
        return $this->db->delete('tbl_article',array('id_article'=>$id_article));
    }
}
