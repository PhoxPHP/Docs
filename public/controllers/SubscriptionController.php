<?php
use App\Controller;

class SubscriptionController extends Controller
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
	public function subscribe(
		\Kit\Http\Request\RequestManager $request,
		\Common\Models\Subscription $sub,
		\Kit\Http\Session\Factory $session)
	{
		$email = $request->getInput('email');
		$name = $request->getInput('name');

		$sub->email = $email;
		$sub->name = $name;
		$sub->save();

		$session->setFlash('success', 'You have succesfully subscribed.');

		$this->response()->goto(config('app')->get('app_url'));
	}

	/**
	* {@inheritDOc}
	*/
	public function registerModel()
	{
		return \Common\Models\DefaultModel::class;
	}

}