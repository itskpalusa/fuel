<?php
class Controller_m2 extends Controller_Template
{
    public $template = 'm2';
	public function action_index()
	{
        $data = array();
		$this->template->title= 'Goretex - Home';
		$this->template->content = View::forge('m2/home.php',$data);
        $this->template->css = "m2/assets/css/style.css";
		//Asset::add_path('m2/assets/css');
		//Asset::css(array('style.css'), array(), 'layout', false);
	}

	public function action_home()
	{
        $data = array();
		$this->template->title= 'Goretex - Home';
		$this->template->content = View::forge('m2/home.php',$data);
        $this->template->css = "style.css";
	}

	public function action_about()
	{
        $data = array();
        $this->template->title= 'Goretext - About';
        $this->template->css= 'css/style.css';
        $this->template->content = View::forge('m2/about.php',$data);
	}


	public function action_colorGenerator()
	{
        $data = array();
        $this->template->title= 'Goretex - Color Generator';
        $this->template->css= 'css/style.css';
        $this->template->content = View::forge('m2/colorGenerator.php',$data);
	}

	public function action_print()
	{
        $data = array();
        $this->template->title= 'Goretex - Print View';
        $this->template->css= 'css/style.css';
        $this->template->content = View::forge('m2/print.php',$data);
	}

}