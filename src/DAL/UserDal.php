<?php

namespace PH7\Learnphp\DAL;
use PH7\Learnphp\Entity\User as UserEntity;
use RedBeanPHP\R;

final class UserDal
{

   public const TABLE_NAME = 'users';

   public static function create(UserEntity $userEntity) : int|string {
       $userBean = R::dispense(self::TABLE_NAME);
       $userBean->user_uuid = $userEntity->getUserUuid();
        $userBean->firstname = $userEntity->getFirstName();
       $userBean->last_name = $userEntity->getLastName();
       $userBean->email = $userEntity->getEmail();
       $userBean->phone = $userEntity->getPhone();
       $userBean->created_date = $userEntity->getCreatedDate();


        $id = R::store($userBean);

       R::close();
       return $id;



   }

}