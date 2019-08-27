<?php

namespace App\Repositories\Eloquent;

use App\Repositories\UserRepositoryInterface;
use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
    protected $user;

    /**
    * @param object $user
    */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function getBlankModel()
    {
        return new User();
    }

    public function create($input)
    {
        $user = $this->user->create($input);

        return $user;
    }

    public function update($user, $input)
    {
      $user->fill($input)->save();

      return $user;
    }

    public function findByEmail($email)
    {
        return $this->getBlankModel()->where('email', $email)->first();
    }

    public function findById($id)
    {
        $user = $this->user->where('id', $id)->first();

        return $user;
    }

   

    public function getUserIdOptions()
    {
        $user_id_options = [];
        $tmp = User::orderBy('id')->get(['id', 'name']);
        if ($tmp->isNotEmpty()) {
            $list = $tmp->all();
            foreach ($list as $v) {
                if ($v->name == null) {
                    $user_id_options[$v->id] = $v->id;
                } else {
                    $user_id_options[$v->id] = $v->name;
                }
            }
        }

        return $user_id_options;
    }

}