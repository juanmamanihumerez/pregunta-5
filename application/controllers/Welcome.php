<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('m_academico');
		$this->load->library('form_validation');
		$this->load->helper(array('url','form'));
		$this->load->view('viewestilos');
	}
 
 	public function index()
	{
		$data['listado']=$this->m_academico->getAll();
		$this->load->view('welcome_message',$data);
	}

	function mis_reglas()
	{
		$this->form_validation->set_rules('doc_ci','CI','required|max_length[15]|min_length[3]');
		$this->form_validation->set_rules('doc_nombre','Nombre','required|max_length[50]|min_length[5]');
		$this->form_validation->set_rules('doc_sigla','Sigla','required|max_length[20]|min_length[5]');
	}

	public function agregar()
	{
		
		if ($this->input->post()) 
		{
			$this->mis_reglas();
			if ($this->form_validation->run()==true) {
				$this->m_academico->add();
				redirect('Welcome');
			}else
			{
				$this->load->view('view_add_docente');

			}
			
		}else
		{
			$this->load->view('view_add_docente');

		}
	}

	public function editar($id=null)
	{
		
		if ($id==null) 
		{
			echo 'Error con el id';
			return;
		}else
		{
			if ($this->input->post()) 
			{
				$this->mis_reglas();
				if ($this->form_validation->run()==true) 
				{
					$this->m_academico->update($id);
					redirect('Welcome');
				}else
				{
					$this->load->view('view_add_docente');
				}
			}
					else
					{
						$data['datos_docentes']=$this->m_academico->get_by_id($id);
						
						if (empty($data['datos_docentes'])) 
						{
							echo "El docente no existe";
						}else
						{
							//print_r($data['datos_docentes']);
							$this->load->view('view_add_docente',$data);
						}
					}
		}
			
	}


	public function eliminar($id=null)
	{
		
		if ($id==null) 
		{
			echo 'Error con el id';
			return;
		}else
		{
			if ($this->input->post()) 
			{
				$id_eliminar = $this->input->post('doc_ci');
				$this->m_academico->delete($id_eliminar);
				redirect('Welcome','refresh');

			}else
					{
						$data['datos_docentes']=$this->m_academico->get_by_id($id);
						
						if (empty($data['datos_docentes'])) 
						{
							echo "El docente no existe";
						}else
						{
							$this->m_academico->delete($id);
							
							redirect('Welcome','refresh');
						}
					}
		}
			
	}

}
