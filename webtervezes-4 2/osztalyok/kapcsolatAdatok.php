<?php 
class kapcsolatAdatok{
    private string $nev;
    private string $email;
    private string $uzenet;

    public function __construct(string $nev, string $email, string $uzenet) {
        $this->nev = $nev;
        $this->email = $email;
        $this->uzenet = $uzenet;
    }

    public function getNev(): string {
        return $this->nev;
    }
    public function setNev(string $nev): void {
        $this->nev = $nev;
    }
    public function getEmail(): string {
        return $this->email;
    }
    public function setEmail(string $email): void {
        $this->email = $email;
    }
    public function getUzenet(): string {
        return $this->uzenet;
    }
    public function setUzenet(string $uzenet): void {
        $this->uzenet = $uzenet;
    }
    public function __toString(): string {
        return $this->nev . ", e-mail cím: " . $this->email . ", üzenete: " . $this->uzenet;
    }

}
?>