<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	//private $_id;

	/**
	 * Authenticates a user.
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{		

		echo "<br/> JEAIEAIJEAJEIJA";
	
		$user=User::model()->find('LOWER(cedula)=?',array(strtolower($this->username)));

		var_dump($user);

		if($user===null)
			$this->errorCode=self::ERROR_USERNAME_INVALID;

		else if(!$user->validatePassword($this->password))

			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
		{echo "<br/> Llegue aca";
			//$this->_id=$user->id;
			$this->username=$user->cedula;
			$this->errorCode=self::ERROR_NONE;
		}
		return $this->errorCode==self::ERROR_NONE;
	}

	/**
	 * @return integer the ID of the user record
	 */
	/*public function getId()
	{
		return $this->_id;
	}*/
}