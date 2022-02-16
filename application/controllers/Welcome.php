<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		
		$this->load->view('index');
		
	}
	public function results()
	{
		
		$this->load->view('results/result');
	}
	public function about()
	{
		
		$this->load->view('about');
	}
	public function awards()
	{
		$this->load->view('awards');
	}
	public function hindi()
	{
		$this->load->view('hindi-olympiad');
	}
	public function commerce()
	{
		$this->load->view('commerce-olympiad');
	}
	public function mathematic()
	{
		$this->load->view('mathematic-olympiad');
	}
	public function english()
	{
		$this->load->view('english-olympiad');
	}
	public function science()
	{
		$this->load->view('science-olympiad');
	}
	public function scouts()
	{
		$this->load->view('scouts-and-guides-olympiad');
		
	}
	public function north()
	{
		$this->load->view('north-zone');
	}
	public function east()
	{
		$this->load->view('east-zone');
	}
	public function west()
	{
		$this->load->view('west-zone');
	}
	public function south()
	{
		$this->load->view('south-zone');
	}
	public function central()
	{
		$this->load->view('central-zone');
	}
	public function north_east()
	{
		$this->load->view('north-east-zone');
	}
	public function gallery()
	{
		$this->load->view('gallery');
	}
	public function video()
	{
		$this->load->view('video-gallery');
	}
	public function contact()
	{
		$this->load->view('contact-us');
	}


	
	
	
}
