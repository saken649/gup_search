<?php
/**
 * Created by IntelliJ IDEA.
 * User: saken649
 * Date: 2018/01/25
 * Time: 23:05
 */

class Top extends CI_Controller
{
	public function view()
	{
		$this->load->view('commons/header.php');
		$this->load->view('top/top.php');
		$this->load->view('commons/footer.php');
	}
}
