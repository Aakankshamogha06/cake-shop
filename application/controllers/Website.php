<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Website extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Auth_model', 'Auth_model');
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/index');
        $this->load->view('frontend/include/footer');
    }

    public function about()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/about');
        $this->load->view('frontend/include/footer');
    }

    public function service()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/service');
        $this->load->view('frontend/include/footer');
    }

    public function contact()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/contact');
        $this->load->view('frontend/include/footer');
    }
    
    public function team()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/team');
        $this->load->view('frontend/include/footer');
    }

    public function menu()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/menu');
        $this->load->view('frontend/include/footer');
    }

    public function testimonial()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/testimonial');
        $this->load->view('frontend/include/footer');
    }

    public function product()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/products/index');
        $this->load->view('frontend/include/footer');
    }

    public function cart()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/cart/index');
        $this->load->view('frontend/include/footer');
    }
    
    public function checkout()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/checkout/index');
        $this->load->view('frontend/include/footer');
    }
    public function order_success()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/checkout/order-success');
        $this->load->view('frontend/include/footer');
    }
}
?>