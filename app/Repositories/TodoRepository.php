<?php  

namespace App\Repositories;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Todo;
use Hash;

class TodoRepository
{
	
	protected $todos;

	// public function __construct(User $user) 
	// {
	// 	$this->user = $user;
	// }

	public static function createTodo($request)
	{
		// $user = new User();
		// $user->name = $request->name;
		// $user->email = $request->email;
		// $user->password = Hash::make($request->password);
		// $user->save();
		// DB::table('todos')->insert([
  //           'name' => $request->name
  //       ]);
		Todo::create($request->all());
	}

	public static function editTodo(Request $request, $id)
	{
		// DB::table('todos')->where('id', $id)->update([
  //           'name' => $request->name,
  //           'is_done' => $request->is_done
  //       ]);
		Todo::find($id)->update($request->all());
	}

}

?>