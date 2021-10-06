<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_academico extends CI_Model 
	{

		public function __construct()
	    {
	        parent::__construct();
	        $this->load->database();
	    }
	    
		public function docentes()
		{
			$this->load->database();
			$query=$this->db->query('select * from docente');
			return $query->result();
		}

		public function getAll()
		{
			$this->load->database();
			$query=$this->db->get('docente');
			return $query->result();
		}

		public function add()
		{
			$datos_insertar=$this->input->post();
			unset($datos_insertar['btn_enviar']);
			$this->db->insert('docente',$datos_insertar);
		}

		public function update($id=null)
		{
			$datos_editar=$this->input->post();
			unset($datos_editar['btn_enviar']);
			$query=$this->db->where('doc_ci',$id);
			$this->db->update('docente',$datos_editar);
		}

		public function delete($id=null)
		{			
			$query=$this->db->where('doc_ci',$id);
			$this->db->delete('docente');
		}

		function get_by_id($id)
		{
			$query=$this->db->where('doc_ci',$id);
			$query=$this->db->get('docente');
			return $query->result();		
		}



	}


?>