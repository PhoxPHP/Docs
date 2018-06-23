<?php
use App\Controller;

class v145Controller extends Controller
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
		return $this->view()->render('v1.4.5/docs');
	}

	/**
	* @access 	public
	* @return 	void
	*/
	public function contributing()
	{
		return $this->view()->render('v1.4.5/contribution');
	}

	/**
	* @access 	public
	* @return 	void
	*/
	public function requirements()
	{
		return $this->view()->render('v1.4.5/requirements');
	}

	/**
	* @access 	public
	* @return 	void
	*/
	public function installation()
	{
		return $this->view()->render('v1.4.5/installation');
	}

	/**
	* @access 	public
	* @return 	void
	*/
	public function configuration()
	{
		return $this->view()->render('v1.4.5/configuration');
	}

	/**
	* @access 	public
	* @return 	void
	*/
	public function authentication()
	{
		return $this->view()->render('v1.4.5/authentication');
	}

	/**
	* @access 	public
	* @return 	void
	*/
	public function authenticationConfiguration()
	{
		return $this->view()->render('v1.4.5/authentication.configuration');
	}

	/**
	* @access 	public
	* @return 	void
	*/
	public function authenticationUsage()
	{
		return $this->view()->render('v1.4.5/authentication.usage');
	}

	/**
	* @access 	public
	* @return 	void
	*/
	public function controllers()
	{
		return $this->view()->render('v1.4.5/controllers');
	}

	/**
	* @access 	public
	* @return 	void
	*/
	public function caching()
	{
		return $this->view()->render('v1.4.5/caching');
	}

	/**
	* @access 	public
	* @return 	void
	*/
	public function dependencyInjection()
	{
		return $this->view()->render('v1.4.5/dependency-injection');
	}

	/**
	* @access 	public
	* @return 	void
	*/
	public function filesystem()
	{
		return $this->view()->render('v1.4.5/filesystem');
	}

	/**
	* @access 	public
	* @return 	void
	*/
	public function database()
	{
		return $this->view()->render('v1.4.5/database');
	}

	/**
	* @access 	public
	* @return 	void
	*/
	public function routing()
	{
		return $this->view()->render('v1.4.5/routing');
	}

	/**
	* @access 	public
	* @return 	void
	*/
	public function session()
	{
		return $this->view()->render('v1.4.5/session');
	}

	/**
	* @access 	public
	* @return 	void
	*/
	public function views()
	{
		return $this->view()->render('v1.4.5/view');
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