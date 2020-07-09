<?php

// namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
// use Illuminate\Foundation\Auth\User as Authenticatable;
// use Illuminate\Notifications\Notifiable;

// class User extends Authenticatable
// {
    // use Notifiable;

    // /**
    //  * The attributes that are mass assignable.
    //  *
    //  * @var array
    //  */
    // protected $fillable = [
    //     'name', 'email', 'password',
    // ];

    // /**
    //  * The attributes that should be hidden for arrays.
    //  *
    //  * @var array
    //  */
    // protected $hidden = [
    //     'password', 'remember_token',
    // ];

    // /**
    //  * The attributes that should be cast to native types.
    //  *
    //  * @var array
    //  */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];

    // /**
    //  * The roles that belong to the user.
    //  */
    // public function roles()
    // {
    //     return $this->belongsToMany('App\Models\Role', 'users_roles', 'user_id', 'role_id');
    // }

    // /**
    //  * Проверка принадлежит ли пользователь какой либо роли
    //  *
    //  * @return boolean
    //  */
    // public function isEmployee()
    // {
    //     $roles = $this->roles->toArray();
    //     return !empty($roles);
    // }

    // /**
    //  * Проверка имеет ли пользователь определенную роль
    //  *
    //  * @return boolean
    //  */
    // public function hasRole($check)
    // {
    //     return in_array($check, array_pluck($this->roles->toArray(), 'name'));
    // }

    // /**
    //  * Получение идентификатора роли
    //  *
    //  *  @return int
    //  */
    // public function getIdInArray($array, $term)
    // {
    //     foreach ($array as $key => $value) {
    //         if ($value == $term) {
    //             return $key + 1;
    //         }
    //     }

    //     return false;
    // }

    // /**
    //  * Добавление роли пользователем
    //  *
    //  * @return boolean
    //  */

// }
