<?php


class panier_manager
{
    public function ajout_panier(array $session, $prix, $plat)
    {
        $panier = unserialize($session['panier']);
        $panier->setPlats($plat, $prix);
    }
}