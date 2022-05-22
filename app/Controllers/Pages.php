<?php


namespace App\Controllers;


class Pages extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function view($page = 'home')
    {
    if (! is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
        // Whoops, we don't have a page for that!
        throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
    }

    $data['title'] = ucfirst($page); // Capitalize the first letter

    echo view('templates/header', $data);
    echo view('pages/' . $page, $data);
    echo view('templates/footer', $data);
}
/*
1) The is_file() function in PHP is an inbuilt function which is used to check whether the specified file is a regular file or not. The name of the file is sent as a parameter to the is_file() function and it returns True if the file is a regular file else it returns False.
2) The path to the app directory.(Reference: https://codeigniter.com/user_guide/general/common_functions.html?highlight=apppath#APPPATH)
3) The throw keyword is used to throw exceptions. Exceptions are a way to change the program flow if an unexpected situation arises, such as invalid data.(Reference: https://www.w3schools.com/php/keyword_throw.asp).
*/
}
