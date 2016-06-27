<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('course');
	}
	public function index()
	{
  		$courses = $this->course->index();
    	// var_dump($courses); die();
    	$this->load->view('main', array('all_courses'=>$courses));
		
	}

	public function add()
	{
		$this->load->model("Course");
        $course_details = array(
        "course_name" => $course,
        "description" => $description
         ); 
        $add_course = $this->Course->add_course($course_details);
        if($add_course === TRUE) {     
    	}
    }	

    public function destroy($course_id)
    {
    // var_dump($course_id); die();
    	$course = $this->course->show($course_id);
    	$this->load->view('remove', array('course'=>$course));
  	}
	

	public function remove($course_id)
	{
		$this->course->delete($course_id);
		redirect('/');
	}	
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */