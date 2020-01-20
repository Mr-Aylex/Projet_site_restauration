<?php
class profil
{
  private $_id;
  private $_nom;
  private $_prenom;
  private $_mail;
  private $_adresse;
  private $_numero;
  private $_mdp;

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
  public function Set_mdp($mdp)
  {
    $this->_mdp = $mdp;
  }
  //Fin Setter
  public function save()
  {
    try
    {
      $bdd = new PDO('mysql:host=localhost;dbname=projet_restaurant;charset=utf8','root','');
    }
    catch(Exception $e)
    {
      die('Erreur:'.$e->getMessage());
      $req = $bdd->prepare('SELECT nom, prenom FROM compt WHERE nom=:nom, prenom=:prenom');
      $req->execute(array(// on lit les donnée de la base de donnée
      'nom'=>$this->Get_nom(),
      'prenom'=>$this->Get_prenom()));
      $donne=$req->fetch();
      if ($donne==true)
      {
        //header("Location: ")
      }
      else
      {
        $req = $bdd->prepare('SELECT numero FROM compt WHERE numero=:numero');
        $req->execute(array(// on lit les donnée de la base de donnée
        'numero'=>$this->Get_numero()));
        $donne=$req->fetch();
        if ($donne==true)
        {
          //header("Location: ...")
        }
        else
        {
          $req = $bdd->prepare('SELECT mail FROM compt WHERE mail=:mail');
          $req->execute(array(// on lit les donnée de la base de donnée
          'mail'=>$this->Get_mail()));
          $donne=$req->fetch();
          if ($donne==true)
          {
            //header("Location: ...")
          }
          else
          {
            $req = $bdd->prepare('INSERT INTO compt (nom, prenom, mail, adresse, numero ,mdp)
            VALUES(:nom, :prenom, :mail, :adresse, :numero, :mdp) ');
            $req->execute(array(
            'nom'=>$this->Get_nom(),
            'prenom'=>$this->Get_prenom(),
            'mail'=>$this->Get_mail(),
            'adresse'=>$this->Get_adresse(),
            'numero'=>$this->Get_numero(),
            'mdp'=>$this->Get_mdp()));
          }
        }
      }
    }
  }
}



 ?>
