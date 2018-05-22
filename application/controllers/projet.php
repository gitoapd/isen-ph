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

        $data['page'] = "video";

		$options = [
		    'cost' => 11,
		    'salt' => "zHnGog7TQAFtgHyJKVmQwO",
		];

		/*CHANGEMENT DE MOT DE PASSE*/
		//echo password_hash("motdepasse", PASSWORD_BCRYPT, $options);
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
    public function upload()
    {
        $data = array();

        $data['page'] = "video";

        $extensions_photo= array( 'jpg' , 'jpeg' , 'gif' , 'png', 'bmp');
        $extensions_video= array( 'mp4' , 'webm', 'ogg', 'avi');

        if (isset($_FILES['file']['tmp_name']))
        {
            $data['filename'] = $_FILES['file']['name'];
            $extension = strtolower(substr(strrchr( $data['filename'], '.')  ,1)  );
            $data['destination'] =  $_SERVER["DOCUMENT_ROOT"].'/codeIgniter/assets/media/'.$_FILES['file']['name'];
            $data['check'] = 0;
            if(in_array($extension, $extensions_video) || in_array($extension, $extensions_photo))
            {
                $data['check'] = move_uploaded_file( $_FILES['file']['tmp_name'], $data['destination']);
            }
            $text_txt = fopen("text.txt", 'w+');
            fseek($text_txt, 0);
            fputs($text_txt,  $data['filename']);
            fclose($text_txt);

            $this->load->view('header', $data);
            if ($data['check'] == 1)
            {
                $this->load->view('ready', $data);
            }
            elseif ($data['check'] == 0)
            {
                $this->load->view('notready', $data);
            }
        }
    }
    public function projection()
    {
    	$data = array();

        $data['page'] = "video";
        
        $extensions_photo= array( 'jpg' , 'jpeg' , 'gif' , 'png', 'bmp');
        $extensions_video= array( 'mp4' , 'webm', 'ogg');

        $text_txt = fopen("text.txt", 'r+');
        $data['filename'] = fgets($text_txt, 100);
        fclose($text_txt);

        $extension = strtolower(substr(strrchr( $data['filename'], '.')  ,1)  );

        $this->load->view('header_projection', $data);

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
        $data = array();
        $data['page'] = "home";

        $webcamip_txt = fopen("webcam.txt", 'r+');
        $data['webcamip'] = fgets($webcamip_txt, 100);
        fclose($webcamip_txt);

    	$this->load->view('header_projection', $data);
        $this->load->view('stream');
    }
    public function youtube()
    {
        $data = array();

        $data['page'] = "youtube";

        if (!isset($_POST['url_youtube']))
        {
            $this->load->view('header');
            $this->load->view('youtube');
        }
        if (isset($_POST['url_youtube']))
        {
            //
            $this->load->view('header');
            $this->load->view('youtube');
            $this->load->view('youtube_start');

            $data['url_youtube'] = $_POST['url_youtube'];

            $text_txt = fopen("youtube.txt", 'w+');
            fseek($text_txt, 0);
            fputs($text_txt,  $data['url_youtube']);
            fclose($text_txt);

            //$this->load->view('header_projection', $data);
            //$this->load->view('projection_youtube', $data);
        }
    }
    public function projection_youtube()
    {
        $data = array();

        $data['page'] = "youtube";

        $youtube_txt = fopen("youtube.txt", 'r+');
        $data['url_youtube'] = fgets($youtube_txt, 100);
        fclose($youtube_txt);

        $data['url_youtube'] = substr(strrchr( $data['url_youtube'], '=')  ,1);
        
        $this->load->view('header_projection', $data);
        $this->load->view('projection_youtube', $data);
    }
    public function vr()
    {
    	$this->load->view('header');
        $this->load->view('vr');
    }
    public function test()
    {
        $data = array();

        $text_txt = fopen("text.txt", 'r+');
        $data['filename'] = fgets($text_txt, 100);
        fclose($text_txt);

        $this->load->view('header');
        $this->load->view('test', $data);
    }
}