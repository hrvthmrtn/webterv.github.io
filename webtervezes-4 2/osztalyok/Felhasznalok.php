<?php

class Felhasznalok{
    private string $felhasznalonev;
    private string $jelszo;
    private string $email;

    public function __construct(string $felhasznalonev, string $jelszo, string $email)
    {
        $this->felhasznalonev = $felhasznalonev;
        $this->jelszo = $jelszo;
        $this->email = $email;
    }



    public function getFelhasznalonev(): string
    {
        return $this->felhasznalonev;
    }

    public function setFelhasznalonev(string $felhasznalonev): void
    {
        $this->felhasznalonev = $felhasznalonev;
    }

    public function getJelszo(): string
    {
        return $this->jelszo;
    }

    public function setJelszo(string $jelszo): void
    {
        $this->jelszo = $jelszo;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }
}