<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_Model extends CI_Model

{
     function __construct()
	{

	}

    function getCategory($id){

        if ($id=="") {

        }else{
        $query  = $this->db->where('id',$id);
        }

        $query = $this->db->get('tbl_product_category');
        return $query->result_array();
    }

    function updateCategory($id,$data){
        $this->db->where('id', $id);
        if($this->db->update('tbl_product_category',$data))
        {
        return 1;
        }else{
        return 0;
        }
    }

    public function deleteCategory($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('tbl_product_category');

	}

    public function insertcategory($data)
    {
        $this->db->insert('tbl_product_category', $data);
    }

    function getSubCategory($id){

        if ($id=="") {
        }else{
    
            $query  = $this->db->where('id',$id);
        }
            $query = $this->db->get('tbl_subcategory');
            return $query->result_array();
    }

    public function insertSubCategory($data)
    {
        $this->db->insert('tbl_subcategory', $data);
    }

    function updateSubCategory($id,$data){
        $this->db->where('id', $id);
        if($this->db->update('tbl_subcategory',$data))
        {
        return 1;
        }else{
        return 0;
        }
    }

    public function deleteSubCategory($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('tbl_subcategory');

	}

    public function getSlider($id)
    {
        if ($id=="") {
        }else{
    
            $query  = $this->db->where('id',$id);
        }
            $query = $this->db->get('tblg_home_slider');
            return $query->result_array();
    }

    public function insertSlider($data)
    {
        $this->db->insert('tblg_home_slider', $data);
    }

    function updateSlider($id,$data){
        $this->db->where('id', $id);
        if($this->db->update('tblg_home_slider',$data))
        {
        return 1;
        }else{
        return 0;
        }
    }

    public function deleteSlider($id)

	{

		$this->db->where('id',$id);
		$this->db->delete('tblg_home_slider');

	}

    public function getProduct($id)
    {
        if ($id=="") {

        }else{
    
            $query  = $this->db->where('id',$id);
        }
            $query = $this->db->get('tbl_product_details');
            return $query->result_array();
    }

    public function deleteProduct($id)

	{

		$this->db->where('id',$id);
		$this->db->delete('tbl_product_details');

	}


}