<?php  

namespace App\Services;

use App\Repositories\UserRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\User;
use Exception;
use InvalidArgumentEception;

class UserService
{

	protected $UserRepository;

	// public function __construct(UserRepository $userRepository)
	// {
	// 	$this->userRepository = $userRepository;
	// }
	public static function find($users)
	{
		$result = User::where('name','like', '%'. request('find'). '%')->get();
		return $result;
	}

	public static function validatorStore($request)
	{
		$request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:users,name'],
            'email' => ['required'],
            'password' => ['required', 'string', 'min:8']
        ]);

	}

	public static function validator($request, $id)
	{
		$request->validate([
            'name' => ['required', 'string', 'max:255', Rule::unique('users', 'name')->ignore($id)],
            'email' => ['required'],
            'password' => ['required', 'string', 'min:8']
        ]);

	}

}

?>