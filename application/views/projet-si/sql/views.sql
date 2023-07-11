create or replace view v_date_dernier_profil as (
    select max(date_insertion) as date_insertion , idutilisateur
    from completion_utilisateur
    group by idutilisateur
);

create or replace view v_date_dernier_objectif as (
    select max(date_insertion) as date_insertion, idutilisateur
    from objectif_utilisateur
    group by idutilisateur
);


create or replace view v_dernier_objectif_utilisateur as (
    select 
    objectif_utilisateur.*
    from objectif_utilisateur
    join v_date_dernier_objectif
        on v_date_dernier_objectif.idutilisateur = objectif_utilisateur.idutilisateur
        and v_date_dernier_objectif.date_insertion = objectif_utilisateur.date_insertion
); 
create or replace view v_dernier_profil as (
    select 
    completion_utilisateur.*, completion_utilisateur.poids/(completion_utilisateur.taille*completion_utilisateur.taille) as imc
    from
    completion_utilisateur 
    join  v_date_dernier_profil
        on v_date_dernier_profil.idutilisateur = completion_utilisateur.idutilisateur
        and v_date_dernier_profil.date_insertion = completion_utilisateur.date_insertion
);
create or replace view v_dernier_marge as (
    select valeur from marge where date_insertion = (select max(date_insertion) from marge)
);
create or replace view v_regime_liste as (
    select 
    regime.idregime, regime.image, regime.poids,regime.prix, regime.duree, objectif.description,type_sport.description as type_sport_description,imc.valeur_min, imc.valeur_sup, regime.idobjectif,nom_regime,operation
    from regime
    join objectif 
        on regime.idobjectif = objectif.idobjectif
    join imc 
        on imc.idimc = regime.idimc
    join type_sport 
        on type_sport.idtype_sport = regime.idtype_sport
);

create or replace view v_solde as (
    select sum(mouvement_argent.montant) as solde,idutilisateur
    from mouvement_argent
    group by idutilisateur
);
create or replace view v_petit_dejeuner as (
    select * from plat where idtemp_plat = 1
);
create or replace view v_dejeuner as (
    select * from plat where idtemp_plat = 2
);
create or replace view v_diner as (
    select * from plat where idtemp_plat = 3
);
create or replace view v_all_plat_journalier as (
    select 
    v_petit_dejeuner.energie as petit_dejeuner_energie,v_petit_dejeuner.idplat as petit_dejeuner,
    v_dejeuner.energie as dejeuner_energie,v_dejeuner.idplat as dejeuner,
    v_diner.energie as diner_energie,v_diner.idplat as diner,v_petit_dejeuner.energie+ v_dejeuner.energie+v_diner.energie as energie_totale from v_petit_dejeuner,v_dejeuner,v_diner
);

create or replace view v_date_dernier_programme as (
    select 
    idutilisateur, max(date_insertion) as date_insertion
    from programme_regime
    group by idutilisateur
);

create or replace view v_dernier_programme as(
    select 
    programme_regime.*
    from programme_regime
    join v_date_dernier_programme
        on v_date_dernier_programme.date_insertion = programme_regime.date_insertion
        and v_date_dernier_programme.idutilisateur = programme_regime.idutilisateur
);

create or replace view v_planning as (
    select 
    details_programme.matin, matin.nom_plat as nom_plat_matin, details_programme.midi, dejeuner.nom_plat as nom_plat_midi, 
    details_programme.soir , diner.nom_plat as nom_plat_soir, details_programme.numero_jour, details_programme.idprogramme_regime
    from details_programme 
    join  plat as matin
        on matin.idplat =  details_programme.matin
    join plat as dejeuner  
        on dejeuner.idplat = details_programme.midi
    join plat as diner 
        on diner.idplat = details_programme.soir
);

create or replace view v_sport_type as (
    select sport.*, liste_sport.idtype_sport
    from sport
    join liste_sport
        on liste_sport.idsport = sport.idsport
);

create or replace view v_liste_code_invalide as (
    select 
    code.*
    from code 
    where idcode in 
    (select idcode from code_utilisateur)
);
create or replace view v_code_utilisateur as(
    select 
    code.*, idcode_utilisateur, estValide, utilisateur.nom_utilisateur,utilisateur.idutilisateur
    from code_utilisateur
    join code
        on code.idcode = code_utilisateur.idcode
    join utilisateur
        on utilisateur.idutilisateur = code_utilisateur.idutilisateur
);

create or replace view v_liste_code_valide as (
    select code.*
    from code 
    full outer  join code_utilisateur
    on code_utilisateur.idcode = code.idcode
    where code_utilisateur.idcode is null or estValide <> 2
);