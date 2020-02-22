<?php


class panier
{
    protected $prix_total;
    protected $plats = array();

    /**
     * @return mixed
     */
    public function getPrixTotal()
    {
        return $this->prix_total;
    }

    /**
     * @param mixed $prix_total
     */
    public function setPrixTotal($prix_total)
    {
        $this->prix_total = $prix_total;
    }
    public function getPlats()
    {
        return $this->plats;
    }
    public function setPlats($nom_plat, $prix)
    {
        if (is_string($nom_plat) and is_int($prix))
        {
            $this->plats[$nom_plat] = $prix;
        }
        else
        {
            return 'type de variable incorrecte';
        }
    }
}
?>