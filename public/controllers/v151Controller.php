<?php
use App\Controller;

class v151Controller extends Controller
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
		return $this->view()->render('v1.5.1/docs');
	}

	/**
	* @access 	public
	* @return 	void
	*/
	public function contributing()
	{
		return $this->view()->render('v1.5.1/contribution');
	}

	/**
	* @access 	public
	* @return 	void
	*/
	public function requirements()
	{
		return $this->view()->render('v1.5.1/requirements');
	}

	/**
	* @access 	public
	* @return 	void
	*/
	public function installation()
	{
		return $this->view()->render('v1.5.1/installation');
	}

	/**
	* @access 	public
	* @return 	void
	*/
	public function configuration()
	{
		return $this->view()->render('v1.5.1/configuration');
	}

	/**
	* @access 	public
	* @return 	void
	*/
	public function authentication()
	{
		return $this->view()->render('v1.5.1/authentication');
	}

	/**
	* @access 	public
	* @return 	void
	*/
	public function authenticationConfiguration()
	{
		return $this->view()->render('v1.5.1/authentication.configuration');
	}

	/**
	* @access 	public
	* @return 	void
	*/
	public function authenticationUsage()
	{
		return $this->view()->render('v1.5.1/authentication.usage');
	}

	/**
	* @access 	public
	* @return 	void
	*/
	public function controllers()
	{
		return $this->view()->render('v1.5.1/controllers');
	}

	/**
	* @access 	public
	* @return 	void
	*/
	public function caching()
	{
		return $this->view()->render('v1.5.1/caching');
	}

	/**
	* @access 	public
	* @return 	void
	*/
	public function dependencyInjection()
	{
		return $this->view()->render('v1.5.1/dependency-injection');
	}

	/**
	* @access 	public
	* @return 	void
	*/
	public function filesystem()
	{
		return $this->view()->render('v1.5.1/filesystem');
	}

	/**
	* @access 	public
	* @return 	void
	*/
	public function database()
	{
		return $this->view()->render('v1.5.1/database');
	}

	/**
	* @access 	public
	* @return 	void
	*/
	public function routing()
	{
		return $this->view()->render('v1.5.1/routing');
	}

	/**
	* @access 	public
	* @return 	void
	*/
	public function session()
	{
		return $this->view()->render('v1.5.1/session');
	}

	/**
	* @access 	public
	* @return 	void
	*/
	public function views()
	{
		return $this->view()->render('v1.5.1/view');
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
	* {@inheritDOc}
	*/
	public function registerModel()
	{
		return \Common\Models\DefaultModel::class;
	}

}