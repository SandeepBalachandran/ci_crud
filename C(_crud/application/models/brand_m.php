<?php
defined('BASEPATH') or exit('No direct script access allowed');
class brand_m extends CI_model
{
	public function getData()
	{
		$this->db->order_by('reg_date','desc');
		$this->db->where('isDelete','0');
		$query=$this->db->get('brands');
		if($query->num_rows()>0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}

	public function submit()
	{
		$field=array(
			'brandname'=>$this->input->post('txt_title'),
			'branddescription'=>$this->input->post('txt_description')
		);
		$this->db->insert('brands',$field);
		if($this->db->affected_rows()>0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	public function trucatethis()
	{
		$query=$this->db->truncate('brands');
		if($query)
		{
			return true;
		}
		else
		{
			return false;
		}

	}
	public function getDataById($id)
	{
		$this->db->where('id',$id);
		$query=$this->db->get('brands');
		if($query->num_rows()>0)
		{
			return $query->row();
		}
		else
		{
			return false;
		}
	}
	public function update()
	{
		$id=$this->input->post('hiddenId');
		$field=array(
				'brandname'=>$this->input->post('txt_title'),
				'branddescription'=>$this->input->post('txt_description'),
				'updated_at'=>date('Y-m-d H:i:s')
			);

		$this->db->where('id',$id);
		$this->db->update('brands',$field);
		if($this->db->affected_rows()>0)
		{
			return true;
		}
		else{
			return false;
		}
	}
	public function delete($id)
	{
		$this->db->where('id',$id);
		$data=array('isDelete'=>'1');
		// $this->db->delete('brands');
		$this->db->update('brands',$data);
		if($this->db->affected_rows()>0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

		public function deleteeverthing()
		{
			// $this->db->where('id',$id);
			$data=array('isDelete'=>'1');
			// $this->db->delete('brands');
			$this->db->update('brands',$data);
			if($this->db->affected_rows()>0)
			{
				return true;
			}
			else
			{
				return false;
			}
		}

		public function recoveralldatas()
		{
			// $this->db->where('id',$id);
			$data=array('isDelete'=>'0');
			// $this->db->delete('brands');
			$this->db->update('brands',$data);
			if($this->db->affected_rows()>0)
			{
				return true;
			}
			else
			{
				return false;
			}
	}



}
?>
