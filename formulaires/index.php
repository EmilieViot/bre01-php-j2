<?php

function add(int $nb1, int $nb2) : int
{
    return $nb1+$nb2;
}

function substract(int $nb1, int $nb2) : int
{
    return $nb1-$nb2;
}

function multiply(int $nb1, int $nb2) : int
{
    return $nb1*$nb2;
}

function divide(int $nb1, int $nb2) : ?int
{
    if ($nb2 !== 0) {
        return $nb1 / $nb2;
    } else {
        return null;
    }
}

function modulo(int $nb1, int $nb2) : ?int
{
    if ($nb2 !== 0) {
        return $nb1 % $nb2;
    } else {
        return null;
    }
}

$result=0;

if(isset($_POST["nb1"]) && isset($_POST["signe"]) && isset($_POST["nb2"]))
{
    $nb1 = (int)$_POST["nb1"];
    $signe = $_POST["signe"];
    $nb2 = (int)$_POST["nb2"];
    $signe = strtolower($signe);
    
    if ($signe==="addition") 
    {
        $result = add($nb1,$nb2);
    }
    
    else if ($signe==="soustraction") 
    {
        $result = substract($nb1,$nb2);
    }
    
    else if ($signe==="multiplication") 
    {
        $result = multiply($nb1,$nb2);
    }
    
    else if ($signe==="division") 
    {
        $resultat = divide($nb1, $nb2);
        
        if ($resultat !== null) 
        {
            $result=$resultat;
        } 
        else 
        {
            $result = 'Erreur, division par zéro impossible';
        }
    }
    
    else if ($signe==="modulo") 
    {
        $resultat = modulo($nb1, $nb2);
        if ($resultat !== null) 
        {
            $result=$resultat;
        } 
        else 
        {
            $result = 'Erreur, division par zéro impossible';
        }
    }
}

?>

<!DOCTYPE html>
<form action="index.php" method="POST">
    <p>Résultat : <?= $result ?> </p>
    <fieldset>
        <label for="nb1">Nombre 1</label>
        <input type="number" name="nb1" id="nb1" />
    </fieldset>
    <fieldset>
        <select name="signe" id="signe">
          <option value="">--Please choose an option--</option>
          <option value="multiplication">x</option>
          <option value="division">/</option>
          <option value="addition">+</option>
          <option value="soustraction">-</option>
          <option value="modulo">%</option>
        </select>
    </fieldset>
    <fieldset>
        <label for="nb2">Nombre 2</label>
        <input type="number" name="nb2" id="nb2" />
    </fieldset>
    <button type="submit" name = "envoi">Envoyer</button>
</form>
</html>