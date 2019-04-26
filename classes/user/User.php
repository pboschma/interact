<?php
/**
 * Created by PhpStorm.
 * user: Jan-Lukas Müller
 * Date: 19.03.2019
 * Time: 14:41
 */
namespace classes\user;

class User
{
    protected $mail;

    protected $username;

    protected $password;

    protected $passwordRepeat;


    /**
     * @return String
     */
    public function getUsername() : String
    {
        return $this->username;
    }


    /**
     * @param String $username
     */
    public function setUsername(String $username)
    {
        $this->username = $username;
    }


    /**
     * @return String
     */
    public function getMail() : String
    {
        return $this->mail;
    }


    /**
     * @param String $mail
     */
    public function setMail(String $mail)
    {
        $this->mail = $mail;
    }


    /**
     * @return String
     */
    public function getPassword() : String
    {
        return $this->password;
    }


    /**
     * @param String $password
     */
    public function setPassword(String $password)
    {
        $this->password = $password;
    }


    /**
     * @return String
     */
    public function getPasswordRepeat() : String
    {
        return $this->passwordRepeat;
    }

    /**
     * @param string $passwordRepeat
     */
    public function setPasswordRepeat(string $passwordRepeat)
    {
        $this->passwordRepeat = $passwordRepeat;
    }
}