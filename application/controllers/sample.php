<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Sample extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        
        $this->load->heper('url');
        
        /** Initialize Config */
        $conf['product'] = 'Sample Product';
        $conf['price'] = 50000;
        $conf['quantity'] = 1;
        $conf['comments'] = 'Sample Comments';
        $conf['ureturn'] = site_url('callback/ureturn');
        $conf['unotify'] = site_url('callback/unotify');
        $conf['ucancel'] = site_url('callback/ucancel');
        $conf['uniqid'] = uniqid();

        /** Load Lib and Init */
        $this->load->library('ipaymu', $conf);

        /** Call Response */
        $response = $this->ipaymu->response();

        /** Result Response */
        $resp = json_decode($response);
        print_r($resp);
    }

}
