<?php 
function fetch_p()
{
		$this->db->select('*');
		$this->db->from('persons');
		$data['extras_listing']=$this->db->get()->result();
		
		$sql_cata="select distinct category from persons";
		$query = $this->db->query($sql_cata);
		$data['categories']=$query->result_array();
		$count=0;
		$data['count']=md5(uniqid(mt_rand(0,10), true).microtime(true));
		$string = $this->load->view('personlist',$data, TRUE);
		echo $string;
		exit;
}
	?>