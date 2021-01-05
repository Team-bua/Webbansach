<?php

namespace App\Repositories;
use App\Models\User;
//use Your Model

/**
 * Class DecentralizationRepository.
 */
class DecentralizationRepository 
{
    /**
     * @return string
     *  Return the model
     */
    public static function getDecentralization($user_name)
    {
    $company_id = null;

  	$user = User::select('users.id', 'users.id_role', 'users.id_company')
                 ->where('username',$user_name)
                 ->first();
    $user_id = $user->id;
    $company_id = $user->id_company;
  	$id_role = $user->id_role;
                   
  	return ['company_id' => $company_id, 'id_role' => $id_role, 'user_id' => $user_id];

  }
    
}
