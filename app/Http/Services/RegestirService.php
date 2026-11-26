<?php
namespace App\Services;

use App\Models\user;

use Illuminate\Support\Facades\Hash;

class RegestirService
{
    public function createUser(array $data): user
    {

    return user::create([
             'name'  => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);


    }

    public function updateUser(user $user, array $data): User
    {
        $user->fill($data);

        if (isset($data['password'])) {
            $user->password = Hash::make($data['password']);
        }

        $user->save();

        return $user;
    }
}
?>
