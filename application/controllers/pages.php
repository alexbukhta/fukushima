<?php

class Pages extends CI_Controller {

	public function view($page = 'home'){
		if ($page == 'tool1'){
			$this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');

			$this->form_validation->set_rules('rad', 'Rad', 'required');
			$this->form_validation->set_rules('vol', 'Vol', 'required');

			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('templates/header');
				$this->load->view('pages/'.$page.'form');
				$this->load->view('templates/footer');
			}
			else
			{
				$data['rad'] = $_POST['rad'];
				$data['vol'] = $_POST['vol'];

				$this->load->view('templates/header');
				$this->load->view('pages/'.$page, $data);
				$this->load->view('templates/footer');
			}
		}
		else if ($page == 'tool2') {
			$this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');

			$this->form_validation->set_rules('rad', 'Rad', 'required');
			$this->form_validation->set_rules('nuc', 'Nuc', 'required');
			$this->form_validation->set_rules('food', 'Food', 'required');

			if ($this->form_validation->run() == FALSE){
				$this->load->view('templates/header');
				$this->load->view('pages/'.$page.'form');
				$this->load->view('templates/footer');
			}
			else{
				$data['rad'] = $_POST['rad'];
				$data['nuc'] = $_POST['nuc'];
				$data['food'] = $_POST['food'];

				$this->load->view('templates/header');
				$this->load->view('pages/'.$page, $data);
				$this->load->view('templates/footer');
			}
		}
		else if ($page == 'tool3') {
			$this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');

			$this->form_validation->set_rules('rad', 'Rad', 'required');
			$this->form_validation->set_rules('units', 'Units', 'required');

			if ($this->form_validation->run() == FALSE){
				$this->load->view('templates/header');
				$this->load->view('pages/'.$page.'form');
				$this->load->view('templates/footer');
			}
			else{
				$data['rad'] = $_POST['rad'];
				$data['sub'] = $_POST['sub'];
				$data['units'] = $_POST['units'];
				$data['output'] = $_POST['output'];

				$this->load->view('templates/header');
				$this->load->view('pages/'.$page, $data);
				$this->load->view('templates/footer');
			}
		}
		else if ($page == 'tool4') {
			$this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');

			$this->form_validation->set_rules('cosmicrad', 'Cosmicrad', 'required');
			$this->form_validation->set_rules('nuc50', 'Nuc50', 'required');
			$this->form_validation->set_rules('coal50', 'Coal50', 'required');
			$this->form_validation->set_rules('plane', 'the number of miles you fly by plane!', 'required');
			$this->form_validation->set_rules('luggage', 'the number of times you pass by luggage inspection!', 'required');
			$this->form_validation->set_rules('stone', 'Stone', 'required');
			$this->form_validation->set_rules('crown', 'Crown', 'required');
			$this->form_validation->set_rules('watch', 'Watch', 'required');
			$this->form_validation->set_rules('smoke', 'the number of smoke detectors in your house!', 'required');
			$this->form_validation->set_rules('cig', 'the number of cigarettes you smoke daily!', 'required');
			$this->form_validation->set_rules('xray', 'whether or not you received an x-ray!', 'required');
			$this->form_validation->set_rules('ct', 'whether or not you received a CT scan!', 'required');
			$this->form_validation->set_message('required', 'You did not provide information regarding %s');

			if ($this->form_validation->run() == FALSE){
				$this->load->view('templates/header');
				$this->load->view('pages/'.$page.'form');
				$this->load->view('templates/footer');
			}
			else{
				$data['cosmicrad'] = $_POST['cosmicrad'];
				$data['nuc50'] = $_POST['nuc50'];
				$data['coal50'] = $_POST['coal50'];
				$data['plane'] = $_POST['plane'];
				$data['luggage'] = $_POST['luggage'];
				$data['stone'] = $_POST['stone'];
				$data['crown'] = $_POST['crown'];
				$data['watch'] = $_POST['watch'];
				$data['smoke'] = $_POST['smoke'];
				$data['cig'] = $_POST['cig'];
				$data['xray'] = $_POST['xray'];
				$data['ct'] = $_POST['ct'];

				$this->load->view('templates/header');
				$this->load->view('pages/'.$page, $data);
				$this->load->view('templates/footer');
			}
		}
		else{
			if ( ! file_exists('application/views/pages/'.$page.'.php')){
				show_404();
			}

			$data['title'] = ucfirst($page);

			$this->load->view('templates/header', $data);
			$this->load->view('pages/'.$page, $data);
			$this->load->view('templates/footer', $data);
		}		
	}
}