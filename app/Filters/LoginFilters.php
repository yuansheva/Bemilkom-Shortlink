<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class LoginFilters implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // if(is_null(session()->get('logged_in')))
        // {
        //     return redirect()->to(base_url('login'));
        // }
        if(session()->user_level == ''){
            return redirect()->to(base_url('login'));
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
        // if(session()->role == '1'){
        //     return redirect()->to(base_url('/home'));
        // }
    }
}