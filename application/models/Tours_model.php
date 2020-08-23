<?php 
class Tours_model extends CI_Model
{


    public function getTour($id)
	{
		
    $this->db->where('id',$id);
    $query=$this->db->get('tours');
    $tour=$query->row_array();
   return $tour;
  }


  
	
	public function getTours($limit,$offset)
	{
		# code...
		$q = $this->input->get('q');
		$this->db->like('title',$q);
         $this->db->limit($limit);
         $this->db->offset($offset);
        $this->db->order_by('id DESC');
		$query=$this->db->get('tours');
		$tours=$query->result_array();
		return $tours;
	}

	public function getToursCount()
	{
		# code...
         $q = $this->input->get('q');
		$this->db->like('title',$q);
		return $this->db->count_all_results('tours');
		
		}


	public function addTours($formArray)
	{

		# code...
        $this->db->insert('tours',$formArray);
        return $this->db->insert_id();

	}
	public function updateTours($id,$formArray)
	{
         
         
         $this->db->where('id',$id);
		$this->db->update('tours',$formArray);
		
	}
	public function deleteTours($id)
	{
		# code...
		$this->db->where('id',$id);
		$this->db->delete('tours');
	}
}



?>