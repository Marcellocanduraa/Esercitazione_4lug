<?php


// Esercitazione 1 - OOP - 04 luglio 2023


// - Crea una repository su GitHub con il nome oop_01_nome_cognome
// Traccia 1:
// - Crea una classe Company che abbia i seguenti attributi pubblici:

// name: nome dell’azienda;
// location: stato in cui è ubicata la sede dell’azienda;
// tot_employees: numero di dipendenti assunti in quella sede.


// - Crea 5 istanze di 5 aziende diverse


// - Crea un metodo che permetta di stampare a terminale la seguente frase: “L’ufficio Aulab con sede in Italia ha ben 50 dipendenti“; se la sede non ha dipendenti, allora stampa: “L’ufficio Aulab con sede in Italia non ha dipendenti“;


// - Definisci un attributo statico: 

// avg_wage, con valore 1500.


// - Implementa un nuovo metodo che, per ogni oggetto Company istanziato, calcoli la spesa annuale e la stampi per ogni oggetto. 


// - Implementa un nuovo metodo che è in grado di calcolare di volta in volta tutti i totali, in relazione alle varie aziende create. 


// - Implementa un metodo statico che permetta di stampare a terminale il totale assoluto di tutte le aziende messe insieme.
// ----------


class Company{
public $name;
public $location;
public $tot_employed;
public static $avg_wage = 1500;
public static $counter = 0;

public function __construct($_name, $_location,$_tot_employed){
    $this->name = $_name;
    $this->location = $_location;
    $this->tot_employed = $_tot_employed;
    self::$avg_wage;
    self::$counter;

}

public function showDetails(){
    if($this->tot_employed > 0){echo"L’ufficio $this->name con sede  $this->location  ha ben $this->tot_employed dipendenti\n";}else{
    echo "L’ufficio $this->name con sede  $this->location non ha dipendenti \n";}    
}

// - Implementa un nuovo metodo che, per ogni oggetto Company istanziato, calcoli la spesa annuale e la stampi per ogni oggetto.

public function spesaAnnuale(){

        $annual = ($this->tot_employed * self::$avg_wage)*12;
        echo "La spesa annuale di $this->name è di $annual euro \n";
        self::$counter +=  $annual;
    }

public static function totaleAziende(){
   
    $capitaleTotale = self::$counter;
    echo "Il capitale totale di tuttle le aziende è $capitaleTotale/n";
   
}

}

$azienda_1 = new Company("Fender","negli USA",300);
$azienda_2 = new Company("Jackson","negli USA",231);
$azienda_3 = new Company("ESP Guitars","in Giappone",300);
$azienda_4 = new Company("EKO","in Italia",132);
$azienda_5 = new Company("Hofner","in Germania",0);

$azienda_1 -> showDetails();
$azienda_2 -> showDetails();
$azienda_3 -> showDetails();
$azienda_4 -> showDetails();
$azienda_5 -> showDetails();

$azienda_1 -> spesaAnnuale();
$azienda_2 -> spesaAnnuale();
$azienda_3 -> spesaAnnuale();
$azienda_4 -> spesaAnnuale();
$azienda_5 -> spesaAnnuale();

Company::totaleAziende();












