<?php

namespace App\Controllers;

use App\Libraries\Curly;
use App\Models\DbModel;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;


/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = [];

    /**
     * Constructor.
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.

        // E.g.: $this->session = \Config\Services::session();
    }

    /**
     * @param $controller
     * @param $function
     * @return string
     */
    protected function render($controller, $function) {

        $controller = strtolower($controller);
        $function = strtolower($function);
        $this->view->setVar('content', sprintf("/partials/%s/%s", $controller, $function));
        $this->view->setVar('navbar', sprintf("/master-pages/%s/navbar", $controller));
        $this->view->setVar('distDir', sprintf("%s/dist/", base_url()));

        return view(sprintf("/master-pages/%s/layout", $controller));
    }
}
