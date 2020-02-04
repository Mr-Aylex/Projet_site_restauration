<?php
require 'class_profil.php'
class admin extends profil
{
    protected $var_admin;

    public function __construct($array)
    {
        $this->Set_nom($array['nom']);
        $this->Set_prenom($array['prenom']);
        $this->Set_mail($array['mail']);
        $this->Set_mdp($array['mdp']);
        $this->SetVarAdmin('admin');
    }

    /**
     * @return mixed
     */
    public function getVarAdmin()
    {
        return $this->var_admin;
    }


    /**
     * @param mixed $var_admin
     */
    public function setVarAdmin($var_admin)
    {
        $this->var_admin = $var_admin;
    }
}
?>