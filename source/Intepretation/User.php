<?php


namespace Source\Intepretation;

class User
{
    public $firstName;
    public $lastName;
    public $email;

  public function __construct($firstName,$lastName,$email)
  {
     $this->firstName = $firstName;
     $this->lastName = $lastName;
     $this->email = $email;
  }

  public function __clone()
  {
     $this->firstName = null;
     $this->lastName = null;
      
     echo "<p class='success'>Clonou!</p>";
     
 } 
 public function __destruct()
 {
    var_dump($this);
     echo "<p class='error'> O {$this->firstName} foi destruido!</p>";
   } 

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($firstName)
    {
      $this->firstName = filter_var($firstName,FILTER_SANITIZE_STRIPPED);
    }


    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = filter_var($lastName,FILTER_SANITIZE_STRIPPED);
    }


    public function getEmail()
    {
        return $this->email;
    }


    /**
     * Valida o email do usuário em um formato aceitavel
     */
    public function setEmail($email)
    {
        $this->email = $email;
        if(filter_var($email,FILTER_VALIDATE_EMAIL)) {
        return true;

        }else{
            return false;
        }
    }

}