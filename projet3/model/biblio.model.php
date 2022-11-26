<?php 
function find_all_ouvrage():array{
    $i=0;
    $ouvrages=[
        ['id'=>++$i,'code'=>'A12','titre'=>"L'enfant noir",'dateedition'=>1953, 'statut'=>'Disponible'],
        ['id'=>++$i,'code'=>'A52','titre'=>"L'art",'dateedition'=>2008, 'statut'=>'Indisponible'],
        ['id'=>++$i,'code'=>'A15','titre'=>"Monde",'dateedition'=>2021, 'statut'=>'Disponible'],
        ['id'=>++$i,'code'=>'A16','titre'=>"L'ecole",'dateedition'=>2018, 'statut'=>'Disponible'],
        ['id'=>++$i,'code'=>'A19','titre'=>"Pagne noir",'dateedition'=>1955, 'statut'=>'Disponible'],
        ['id'=>++$i,'code'=>'A21','titre'=>"Les Tchakpana",'dateedition'=>2022, 'statut'=>'Indisponible']
    ];
    return $ouvrages;
}
function find_all_auteur():array{
    $i=0;
    $auteurs=[
        ['id'=>++$i,'nom'=>'Kokou','prenom'=>'Godwin','profession'=>'Viveur'],
        ['id'=>++$i,'nom'=>'Camara','prenom'=>'Laye','profession'=>'Professeur'],
        ['id'=>++$i,'nom'=>'Ba','prenom'=>'Mariama','profession'=>'Romancière'],
        ['id'=>++$i,'nom'=>'Césaire','prenom'=>'Aimé','profession'=>'Conseiller']
    ];
    return $auteurs;
}
function find_all_ecrire(){
    $i=0;
    $ecrires=[
        ['id'=>++$i,'ouvrage_id'=>1,'auteur_id'=>2],
        ['id'=>++$i,'ouvrage_id'=>2,'auteur_id'=>1],
        ['id'=>++$i,'ouvrage_id'=>3,'auteur_id'=>4],
        ['id'=>++$i,'ouvrage_id'=>4,'auteur_id'=>2],
        ['id'=>++$i,'ouvrage_id'=>5,'auteur_id'=>4],
        ['id'=>++$i,'ouvrage_id'=>6,'auteur_id'=>2]
    ];
    return $ecrires;
}
function find_all_exemplaire():array{
    $i=0;
    $exemplaires=[
        ['id'=>++$i,'code'=>'E12','dateenre'=>'10/12/2012','etat'=>'En prêt','rayon_id'=>1,'ouvrage_id'=>1],
        ['id'=>++$i,'code'=>'E13','dateenre'=>'15/06/2019','etat'=>'Détérioré','rayon_id'=>4,'ouvrage_id'=>5],
        ['id'=>++$i,'code'=>'E14','dateenre'=>'09/11/2011','etat'=>'En prêt','rayon_id'=>1,'ouvrage_id'=>3],
        ['id'=>++$i,'code'=>'E15','dateenre'=>'29/02/2022','etat'=>'Disponible','rayon_id'=>5,'ouvrage_id'=>1],
        ['id'=>++$i,'code'=>'E16','dateenre'=>'01/01/2020','etat'=>'Disponible','rayon_id'=>1,'ouvrage_id'=>4],
        ['id'=>++$i,'code'=>'E17','dateenre'=>'26/10/2013','etat'=>'Détérioré','rayon_id'=>4,'ouvrage_id'=>4],
        ['id'=>++$i,'code'=>'E18','dateenre'=>'04/03/2018','etat'=>'En prêt','rayon_id'=>2,'ouvrage_id'=>5],
        ['id'=>++$i,'code'=>'E20','dateenre'=>'19/09/2009','etat'=>'Disponible','rayon_id'=>4,'ouvrage_id'=>3],
        ['id'=>++$i,'code'=>'E21','dateenre'=>'15/11/2022','etat'=>'Disponible','rayon_id'=>6,'ouvrage_id'=>3],
        ['id'=>++$i,'code'=>'E22','dateenre'=>'16/09/2015','etat'=>'Disponible','rayon_id'=>6,'ouvrage_id'=>1],
        ['id'=>++$i,'code'=>'E23','dateenre'=>'30/09/2019','etat'=>'En prêt','rayon_id'=>2,'ouvrage_id'=>4]
    ];
    return $exemplaires;
}
function find_all_rayon():array{
    $i=0;
    $rayons=[
        ['id'=>++$i,'nom'=>'Litterature'],
        ['id'=>++$i,'nom'=>'Science'],
        ['id'=>++$i,'nom'=>'Geographie'],
        ['id'=>++$i,'nom'=>'Histoire'],
        ['id'=>++$i,'nom'=>'Biographie'],
        ['id'=>++$i,'nom'=>'Fiction']
    ];
    return $rayons;
}
function find_all_adherent():array{
    $i=0;
    $adherents=[
        ['id'=>++$i,'email'=>'win@gmail.com','nom'=>'Diallo','prenom'=>'Amadou'],
        ['id'=>++$i,'email'=>'fall@gmail.com','nom'=>'Fall','prenom'=>'Kane'],
        ['id'=>++$i,'email'=>'sico@gmail.com','nom'=>'Diop','prenom'=>'Sico'],
        ['id'=>++$i,'email'=>'adeleke@gmail.com','nom'=>'Adeleke','prenom'=>'Ifeanyi'],
        ['id'=>++$i,'email'=>'goat@gmail.com','nom'=>'Modou','prenom'=>'Bob']
    ];
    return $adherents;
}
function find_all_pret():array{
    $i=0;
    $prets=[
        ['id'=>++$i,'date'=>'12/05/2011','dateprevu'=>'26/05/2011','datereel'=>'22/05/2011','exemplaire_id'=>2,'adherent_id'=>1],
        ['id'=>++$i,'date'=>'02/08/2021','dateprevu'=>'16/08/2021','datereel'=>'05/11/2021','exemplaire_id'=>3,'adherent_id'=>4],
        ['id'=>++$i,'date'=>'10/03/2022','dateprevu'=>'24/03/2022','datereel'=>'-','exemplaire_id'=>5,'adherent_id'=>2],
        ['id'=>++$i,'date'=>'11/05/2022','dateprevu'=>'25/05/2022','datereel'=>'-','exemplaire_id'=>7,'adherent_id'=>3]
    ];
    return $prets;
}
function find_all_demande_pret():array{
    $i=0;
    $demandes=[
        ['id'=>++$i,'adherent_id'=>1,'exemplaire_id'=>1,'etat'=>'validée'],
        ['id'=>++$i,'adherent_id'=>1,'exemplaire_id'=>2,'etat'=>'refusée'],
        ['id'=>++$i,'adherent_id'=>3,'exemplaire_id'=>4,'etat'=>'validée'],
        ['id'=>++$i,'adherent_id'=>4,'exemplaire_id'=>8,'etat'=>'validée']
    ];
    return $demandes;
}
function find_all_ouvrage_by_id(int $id):array |null{
    $ouvrages=find_all_ouvrage();
    foreach ($ouvrages as $ouvrage) {
        if($ouvrage['id']==$id){
            return $ouvrage;
        }
    }
    return null; 
}
function find_all_rayon_by_id(int $id):array |null{
    $rayons=find_all_rayon();
    foreach ($rayons as $rayon) {
        if($rayon['id']==$id){
            return $rayon;
        }
    }
    return null; 
}
function find_all_auteur_by_id(int $id):array|null{
    $auteurs=find_all_auteur();
    foreach ($auteurs as $auteur) {
        if($auteur['id']==$id){
            return $auteur;
        }
    }
    return null;
}
function find_all_oeuvres_disponible():array{
    $exemplaires=find_all_exemplaire();
    $oeuvres=[];
    foreach ($exemplaires as $exemplaire) {
        $ouvrage=find_all_ouvrage_by_id($exemplaire['ouvrage_id']);
        $rayon=find_all_rayon_by_id($exemplaire['rayon_id']);
        if($exemplaire['etat']=='Disponible'){
            $oeuvres[]=[
                'id'=>$exemplaire['id'],
                'code'=>$exemplaire['code'],
                'ouvrage'=>$ouvrage['titre'],
                'rayon'=>$rayon['nom']
            ];
        }
    }
    return $oeuvres;
}
function find_all_ouvrage_auteur():array{
    $ecrires=find_all_ecrire();
    $ecrireClasses=[];
    foreach ($ecrires as $ecrire) {
        $ouvrage=find_all_ouvrage_by_id($ecrire["ouvrage_id"]);
        $auteur=find_all_auteur_by_id($ecrire['auteur_id']);
        $ecrireClasses[]=[
            "id"=>$ecrire['id'],
            'code'=>$ouvrage['code'],
            'titre'=>$ouvrage['titre'],
            'auteur'=>$auteur['prenom']." ".$auteur['nom'],
            'dateedition'=>$ouvrage['dateedition'],
            'statut'=>$ouvrage['statut'] 
        ];
    }
    return $ecrireClasses;
}
function find_all_adherent_by_id(int $id):array|null{
    $adherents=find_all_adherent();
    foreach ($adherents as $adherent) {
        if($adherent['id']==$id){
            return $adherent;
        }
    }
    return null;
}
function find_all_exemplaire_by_id(int $id):array|null{
    $exemplaires=find_all_exemplaire();
    foreach ($exemplaires as $exemplaire) {
        if($exemplaire['id']==$id){
            return $exemplaire;
        }
    }
    return null;
}
function find_all_demande_pret_ok():array{
    $demandePrets=find_all_demande_pret();
    $demandes=[];
    foreach ($demandePrets as $demandePret) {
        $adherent=find_all_adherent_by_id($demandePret['adherent_id']);
        $exemplaire=find_all_exemplaire_by_id($demandePret['exemplaire_id']);
        $demandes[]=[
            'id'=>$demandePret['id'],
            'nomcomplet'=>$adherent['prenom']." ".$adherent['nom'],
            'email'=>$adherent['email'],
            'exemplaire'=>$exemplaire['code'],
            'etat'=>$demandePret['etat']
        ];
    }
    return $demandes;
}
function find_all_pret_ok():array{
    $prets=find_all_pret();
    $pretclasses=[];
    foreach ($prets as $pret) {
        $adherent=find_all_adherent_by_id($pret['adherent_id']);
        $exemplaire=find_all_exemplaire_by_id($pret['exemplaire_id']);
        $pretclasses[]=[
            'id'=>$pret['id'],
            'nomcomplet'=>$adherent['prenom']." ".$adherent['nom'],
            'email'=>$adherent['email'],
            'exemplaire'=>$exemplaire['code'],
            'date'=>$pret['date'],
            'dateprevu'=>$pret['dateprevu'],
            'datereel'=>$pret['datereel']
        ];
    }
    return $pretclasses;
}
function find_all_pret_en_cours():array{
    $prets=find_all_pret();
    $pretcours=[];
    foreach ($prets as $pret) {
        if($pret['datereel']=='-'){
            $adherent=find_all_adherent_by_id($pret['adherent_id']);
            $exemplaire=find_all_exemplaire_by_id($pret['exemplaire_id']);
            $pretcours[]=[
                'id'=>$pret['id'],
                'nomcomplet'=>$adherent['prenom']." ".$adherent['nom'],
                'email'=>$adherent['email'],
                'exemplaire'=>$exemplaire['code'],
                'date'=>$pret['date'],
                'dateprevu'=>$pret['dateprevu'],
                'datereel'=>$pret['datereel']
            ];
        }   
    }
    return $pretcours;
}

?>