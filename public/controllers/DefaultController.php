<?php
use App\Controller;

class DefaultController extends Controller
{

	/**
	* @var 		$routeParams
	* @access 	public
	*/
	public 		$routeParams;

	/**
	* @access 	public
	* @return 	void
	*/
	public function index(\Kit\Http\Session\Factory $session)
	{
		$view = $this->view()->setVariable('session', $session);
		$view->render('home');
	}

	/**
	* @access 	public
	* @return 	void
	*/
	public function documentation()
	{
		return $this->view()->render('latest/docs');
	}

	/**
	* @access 	public
	* @return 	void
	*/
	public function contributing()
	{
		return $this->view()->render('latest/contribution');
	}

	/**
	* @access 	public
	* @return 	void
	*/
	public function requirements()
	{
		return $this->view()->render('latest/requirements');
	}

	/**
	* @access 	public
	* @return 	void
	*/
	public function installation()
	{
		return $this->view()->render('latest/installation');
	}

	/**
	* @access 	public
	* @return 	void
	*/
	public function configuration()
	{
		return $this->view()->render('latest/configuration');
	}

	/**
	* @access 	public
	* @return 	void
	*/
	public function authentication()
	{
		return $this->view()->render('latest/authentication');
	}

	/**
	* @access 	public
	* @return 	void
	*/
	public function authenticationConfiguration()
	{
		return $this->view()->render('latest/authentication.configuration');
	}

	/**
	* @access 	public
	* @return 	void
	*/
	public function authenticationUsage()
	{
		return $this->view()->render('latest/authentication.usage');
	}

	/**
	* @access 	public
	* @return 	void
	*/
	public function controllers()
	{
		return $this->view()->render('latest/controllers');
	}

	/**
	* @access 	public
	* @return 	void
	*/
	public function caching()
	{
		return $this->view()->render('latest/caching');
	}

	/**
	* @access 	public
	* @return 	void
	*/
	public function dependencyInjection()
	{
		return $this->view()->render('latest/dependency-injection');
	}

	/**
	* @access 	public
	* @return 	void
	*/
	public function filesystem()
	{
		return $this->view()->render('latest/filesystem');
	}

	/**
	* @access 	public
	* @return 	void
	*/
	public function database()
	{
		return $this->view()->render('latest/database');
	}

	/**
	* @access 	public
	* @return 	void
	*/
	public function routing()
	{
		return $this->view()->render('latest/routing');
	}

	/**
	* @access 	public
	* @return 	void
	*/
	public function session()
	{
		return $this->view()->render('latest/session');
	}

	/**
	* @access 	public
	* @return 	void
	*/
	public function views()
	{
		return $this->view()->render('latest/view');
	}

	/**
	* @access 	public
	* @return 	void
	*/
	public function changelog()
	{
		return $this->view()->render('changelog');
	}

	/**
	* @access 	public
	* @return 	void
	*/
	public function validation()
	{
		return $this->view()->render('latest/validation');
	}

	/**
	* @access 	public
	* @return 	void
	*/
	public function cli()
	{
		return $this->view()->render('latest/cli');
	}

	/**
	* {@inheritDOc}
	*/
	public function registerModel()
	{
		return \Common\Models\DefaultModel::class;
	}

}