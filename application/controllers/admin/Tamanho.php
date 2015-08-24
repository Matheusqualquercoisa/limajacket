<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tamanho extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct(){
		parent::__construct();
		$this->load->model('TamanhoModel');
	}


	public function index()
	{
		
		$dados = array(
		'pasta' =>'Tamanho',
		'view'  =>'tamanho',
		'Tamanhos' => $this->TamanhoModel->getAllTamanho()->result(),
		);
	
		$this->load->view('admin', $dados);
		//redirect('administrador/tamanho/cadastrar');
	}


	public function cadastrar(){

		$Tamanho = elements(array('tamanho'), $this->input->post());
		//$email = elements(array('email'), $this->input->post());
		
		//Faz as devidas validações [remove espaços,
		// 							verifica se foi preenchido,
		//							se é menor que 45 caracteres,
		//							Capitaliza a palavra
		//						 	e se já existe no banco de dados]
		$this->form_validation->set_rules('tamanho', 'Tamanho', 'trim|required|max_length[45]|ucwords|is_unique[TbTamanho.tamanho]');
		//Seta uma mensagem se já existir no banco.
		$this->form_validation->set_message('is_unique', "O Tamanho ". $Tamanho['tamanho'] ." já existe.");

		//Verifica se o formmulário é válido
		if($this->form_validation->run()){

			//Pega os campos e recebe os valores do post
			$dados = elements(array('tamanho','flagAtivo'), $this->input->post());

			//setando flagAtivo para True
			$dados['flagAtivo'] = 1;

			$this->TamanhoModel->insertTamanho($dados);
		}else{
			$this->session->set_flashdata('erro', 'Tamanho já existe!');
		}

		$dados = array(
			'pasta' => 'Tamanho',
			'view' => 'tamanho',
			'Tamanhos' => $this->TamanhoModel->getAllTamanho()->result(),
			 );
		$this->load->view('Admin', $dados);


		//redirect('administrador/tamanho/cadastrar');

	}

public function editar(){

		$this->form_validation->set_rules('tamanho', 'Tamanho', 'trim|required|max_length[45]|strtolower|ucwords');
		$this->form_validation->set_rules('idTamanho', 'idTamanho', 'required');

		if($this->form_validation->run()){
			//Pega os valores do formulário
			$dados = elements(array('tamanho','flagAtivo'), $this->input->post());
			//Envia um update pro banco passando o idMarca do formulário
			//$dados['flagAtivo'] = 1;
			//setando flagAtivo para TRUE;
			$this->TamanhoModel->updateTamanho($dados, array('idTamanho' => $this->input->post('idTamanho')));
		
		}else{
			$this->session->set_flashdata('erro', 'Tamanho já existe!');
		}
		
		$dados = array(
			'pasta' => 'Tamanho',
			'view' => 'editar',
			'Tamanhos' => $this->TamanhoModel->getAllTamanho()->result(),
			 );
		$this->load->view('Admin', $dados);


		//redirect('admin/Tamanho/editar');

	}
	}