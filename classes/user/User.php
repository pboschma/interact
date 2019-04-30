<?php
/**
 * Created by PhpStorm.
 * user: Jan-Lukas Müller
 * Date: 19.03.2019
 * Time: 14:41
 */
namespace user;

class User
{
    protected $mail;

    protected $username;

    protected $vorname;

    protected $nachname;

    protected $password;

    protected $passwordRepeat;

    protected $active;


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
    public function getVorname() : String
    {
        return $this->vorname;
    }


    /**
     * @param String $vorname
     */
    public function setVorname(String $vorname)
    {
        $this->vorname = $vorname;
    }

    /**
     * @return String
     */
    public function getNachname() : String
    {
        return $this->nachname;
    }


    /**
     * @param String $nachname
     */
    public function setNachname(String $nachname)
    {
        $this->nachname = $nachname;
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

    /**
     * @return mixed
     */
    public function getActive() : Int
    {
        return $this->active;
    }

    /**
     * @param mixed $active
     */
    public function setActive(int $active)
    {
        $this->active = $active;
    }
}