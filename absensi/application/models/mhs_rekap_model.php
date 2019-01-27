<?php
class mhs_rekap_Model  extends CI_Model  {
	function __construct()
    {
        parent::__construct();
    }
	function get_data($id)
	{
		return $this->db->query("select * from mahasiswa where nrp not in (select nrp from mhs_absen where id_keg=$id)")->result();
	}
	function count_data($id)
	{
		return $this->db->query("select count(*) as jml from mahasiswa where nrp not in (select nrp from mhs_absen where id_keg=$id)")->row();
	}
	function get_mhs($nrp)
	{
		return $this->db->get_where('mahasiswa',array('nrp'=>$nrp))->row();
	}
	protected function _trim_export_string($value)
	{
		$value = str_replace(array("&nbsp;","&amp;","&gt;","&lt;"),array(" ","&",">","<"),$value);
		return  strip_tags(str_replace(array("\t","\n","\r"),"",$value));
	}
	function export($data)
	{
		//$string_to_export = "\xFF\xFE" .mb_convert_encoding($string_to_export, 'UTF-16LE', 'UTF-8');
		$filename = "export-".date("Y-m-d_H:i:s").".xls";
		header('Content-type: application/vnd.ms-excel;charset=UTF-16LE');
		header('Content-Disposition: attachment; filename='.$filename);		
		header("Cache-Control: no-cache");
		//echo $string_to_export;
	}
}