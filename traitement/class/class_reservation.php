<?php
class reservation
{
  private $_nombre_de_personne;
  private $_heure;
  private $_nom;

  public function __construct($nb_pers,$heure,$nom)
  {
    $this->Setheure($heure);
    $this->Setnb_pers($nb_pers);
    $this->Setnom($nom);
  }
  public function Setnb_pers($nb)
  {
    if(!is_string($nb))
    {
      trigger_error( "la variable dois être un entier",E_USER_WARNING);
      return;
    }
    else
    {
      $this->_nombre_de_personne = $nb;
    }
  }
  public function Setheure($heure)
  {
    if(!is_string($heure))
    {
      trigger_error( "la variable dois être un entier positif",E_USER_WARNING);
      return;
    }
    else
    {
      $this->_heure = $heure;
    }
  }
  public function Setnom($nom)
  {
    if(!is_string($nom))
    {
      trigger_error( "la variable dois être un entier positif",E_USER_WARNING);
      return;
    }
    else
    {
      $this->_nom = $nom;
    }
  }
  public function Getnb_pers()
  {
    return $this->_nombre_de_personne;
  }
  public function Getheure()
  {
    return $this->_heure;
  }
  public function Getnom()
  {
    return $this->_nom;
  }
}

 ?>
