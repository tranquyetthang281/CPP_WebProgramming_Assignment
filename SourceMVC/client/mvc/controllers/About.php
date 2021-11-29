<?php
class About extends Controller
{
    function Show()
    {
        $data['page'] = 'About';
        return ($this->view("Home", $data));
    }
}