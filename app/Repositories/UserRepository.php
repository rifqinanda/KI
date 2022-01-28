<?php  

namespace App\Repositories;

use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Hash;

class UserRepository
{
	
	protected $user;

	// public function __construct(User $user) 
	// {
	// 	$this->user = $user;
	// }

	public static function createUser($request)
	{
		// $user = new User();
		// $user->name = $request->name;
		// $user->email = $request->email;
		// $user->password = Hash::make($request->password);
		// $user->save();
		DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
	}

	public static function editUser($request, $id)
	{
		DB::table('users')->where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
	}

}

?>