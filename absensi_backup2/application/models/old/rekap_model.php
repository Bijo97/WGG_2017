<?php
class rekap_Model  extends CI_Model  {
	function __construct()
    {
        parent::__construct();
    }
	function get_data($idr)
	{
		return $this->db->query("select * from panitia where id_panitia not in (select id_panitia from rapat_masuk where id_rapat=$idr)")->result();
	}
	function get_divisi($idd)
	{
		return $this->db->get_where('divisi',array('id_divisi'=>$idd))->row();
	}
	function get_panitia($id)
	{
		return $this->db->get_where('panitia',array('id_panitia'=>$id))->row();
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