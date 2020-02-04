<?php

class profil
{
  protected $_id;
  protected $_nom;
  protected $_prenom;
  protected $_mail;
  protected $_adresse;
  protected $_numero;
  protected $_admin;
  protected $_mdp;

  function __construct($array)
  {
    if (empty($array['id']))
    {
      $this->Set_nom($array['nom']);
      $this->Set_prenom($array['prenom']);
      $this->Set_mail($array['mail']);
      $this->Set_adresse($array['adresse']);
      $this->Set_numero($array['numero']);
      $this->Set_mdp($array['mdp']);
    }
    else
    {
      $this->hydrate($array);
    }

  }
  public function hydrate($valeur)
  {
    $this->Set_id($valeur['id']);
    $this->Set_nom($valeur['nom']);
    $this->Set_prenom($valeur['prenom']);
    $this->Set_mail($valeur['mail']);
    $this->Set_adresse($valeur['adresse']);
    $this->Set_numero($valeur['numero']);
    $this->Set_admin($valeur['admin']);
    $this->Set_mdp($valeur['mdp']);
  }
  //Getter
  public function Get_nom()
  {
    return $this->_nom;
  }
  public function Get_prenom()
  {
    return $this->_prenom;
  }
  public function Get_mail()
  {
    return $this->_mail;
  }
  public function Get_adresse()
  {
    return $this->_adresse;
  }
  public function Get_numero()
  {
    return $this->_numero;
  }
  public function Get_admin()
  {
    return $this->_admin;
  }
  public function Get_mdp()
  {
    return $this->_mdp;
  }
  //Fin Getter
  // Setter
  public function Set_id($id)
  {
    $this->_id = $id;
  }
  public function Set_nom($nom)
  {
    $this->_nom = $nom;
  }
  public function Set_prenom($prenom)
  {
    $this->_prenom = $prenom;
  }
  public function Set_mail($mail)
  {
    $this->_mail = $mail;
  }
  public function Set_adresse($adresse)
  {
    $this->_adresse = $adresse;
  }
  public function Set_numero($numero)
  {
    $this->_numero = $numero;
  }
  public function Set_admin($admin)
  {
    $this->_admin = $admin;
  }
  public function Set_mdp($mdp)
  {
    $this->_mdp = $mdp;
  }
  //Fin Setter

  }
 ?>
