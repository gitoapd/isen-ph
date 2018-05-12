<?php

class projet extends CI_Controller
{   
    public function __construct()

    {

        parent::__construct();

    }
    public function index()
    {

        $this->home();

    }
    public function home()
    {

        $this->load->view('header');
        $this->load->view('home');

    }

    public function video()
    {
    	$data = array();
    	$data['error'] = 0;

		$options = [
		    'cost' => 11,
		    'salt' => "zHnGog7TQAFtgHyJKVmQwO",
		];

		/*CHANGEMENT DE MOT DE PASSE*/
		//echo password_hash("b", PASSWORD_BCRYPT, $options);
		/****************************/

    	if (isset($_POST['psswd']))
    	{
    		
    		// Si les données json sont dans un fichier distant:
			$json_source = file_get_contents(base_url().'assets/json/admin.json');
			// Décode le JSON
			$json_data = json_decode($json_source);

			foreach($json_data->users as $user)
			{
			   if ($user->id == $_POST['user'] && $user->password == password_hash($_POST['psswd'], PASSWORD_BCRYPT, $options))
			   {
			   		$this->load->view('header');
        			$this->load->view('video');
        			$data['error'] = 0;
			   }
			   else
			   		$data['error'] = 1;
			}
    	}
    	if (!isset($_POST['psswd']) || $data['error'] == 1)
    	{
    		$this->load->view('header');
        	$this->load->view('lock', $data);
    	}
    }
    public function projection()
    {
    	$data = array();
    	$extensions_photo= array( 'jpg' , 'jpeg' , 'gif' , 'png', 'bmp');
    	$extensions_video= array( 'mp4' , 'avi');
		$data['filename'] = $_FILES['file']['name'];
    	$extension = strtolower(  substr(  strrchr($_FILES['file']['name'], '.')  ,1)  );
    	$data['destination'] =  $_SERVER["DOCUMENT_ROOT"].'/codeIgniter/assets/media/'.$_FILES['file']['name'];
    	if (isset($_FILES['file']['tmp_name']))
    	{
    		move_uploaded_file($_FILES['file']['tmp_name'],$data['destination']);
    	}

		$this->load->view('header_projection');
    	if(in_array($extension, $extensions_video))
    	{
	        $this->load->view('projection_video', $data);
    	}
    	elseif (in_array($extension, $extensions_photo))
    	{
       		$this->load->view('projection_photo', $data);
    	}
    }
    public function stream()
    {
    	$this->load->view('header');
        $this->load->view('stream');

    }
    public function vr()
    {
    	$this->load->view('header');
        $this->load->view('vr');

    }
}