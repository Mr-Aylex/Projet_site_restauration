<?php
/**
 *
 */
class profil
{
  private $_nom;
  private $_prenom;
  private $_mail;
  private $_adresse;
  private $_numero;
  private $_mdp;

  function __construct($nom, $prenom, $mail, $adresse, $numero, $mdp)
  {
    if (isset($valeur))
    {
      hydrate($valeur);
    }
    else
    {
      $this->Set_nom($nom)
      $this->Set_prenom($prenom)
      $this->Set_mail($mail)
      $this->Set_adresse($adresse)
      $this->Set_numero($numero)
      $this->Set_mdp($mdp)
    }
  }
  public function hydrate($valeur)
  {
    Set_nom($valeur['nom']);
    Set_prenom($valeur['prenom']);
    Set_prenom($valeur['mail']);
    Set_adresse($valeur['adresse']);
    Set_numero($valeur['numero']);
    Set_numero($valeur['mdp']);
  }
  public function Get_nom(){return $this->_nom}
  public function Get_prenom(){return $this->_prenom}
  public function Get_mail(){return $this->_mail}
  public function Get_adresse(){return $this->_adresse}
  public function Get_numero(){return $this->_numero}
  public function Get_mdp(){return $this->_mdp}

  public function Set_nom($nom){$this->_nom = $nom}
  public function Set_prenom($prenom){$this->_prenom = $prenom}
  public function Set_mail($mail){$this->_mail = $mail}
  public function Set_adresse($adresse){$this->_adresse = $adresse}
  public function Set_numero($numero){$this->_numero = $numero}
  public function Set_mdp($mdp){$this->_mdp = $mdp}
}


 ?>
