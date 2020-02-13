<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

    public function index(){
        if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
            $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
            $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
        }
        $client  = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote  = $_SERVER['REMOTE_ADDR'];

        if(filter_var($client, FILTER_VALIDATE_IP))
        {
            $ip = $client;
        }
        elseif(filter_var($forward, FILTER_VALIDATE_IP))
        {
            $ip = $forward;
        }
        else
        {
            $ip = $remote;
        }

        ini_Set('display_errors',0);
        $request = 'https://api.snoopi.io/'.$ip;


        $json  = file_get_contents($request);
        $json  =  json_decode($json ,true);
        $CountryName  = $json['CountryName'];

        ini_set('display_errors',1);

        $this->load->model('visitors_m');
        $this->visitors_m->storevisitor($ip,$CountryName);

        $this->load->view('index');
    }
}