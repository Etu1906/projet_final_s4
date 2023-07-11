
--insertion genre
INSERT INTO genre (description) VALUES ('Masculin');

INSERT INTO genre (description) VALUES ('Féminin');
--insert temp_plat
insert into temp_plat(nom_temp) values ('matin'); 
insert into temp_plat(nom_temp) values ('midi');
insert into temp_plat(nom_temp) values ('soir');

--insetion plat
    --petit dejeuner amincicant
INSERT INTO plat (idtemp_plat, nom_plat, energie, matieres_grasses, glucide, proteine, image) VALUES (1, 'Muesli croustillant au chocolat', 452, 17, 63, 8.4, 'muesli_choco.webp');

INSERT INTO plat (idtemp_plat, nom_plat, energie, matieres_grasses, glucide, proteine, image) VALUES (1, 'Muesli aux fruits jaunes', 437, 15, 63, 8.2, 'muesli_fuit_jaune.webp');

INSERT INTO plat (idtemp_plat, nom_plat, energie, matieres_grasses, glucide, proteine, image) VALUES (1, 'Petits pains de campagne', 260, 1.1, 53, 8, 'petit_pain_de_campagne.webp');

INSERT INTO plat (idtemp_plat, nom_plat, energie, matieres_grasses, glucide, proteine, image) VALUES (1, 'Petits pains aux céréales bio', 321, 8.4, 49, 10, 'petit_pain_cereales.webp');

INSERT INTO plat (idtemp_plat, nom_plat, energie, matieres_grasses, glucide, proteine, image) VALUES (1, 'Granola au chocolat et amandes BIO sans gluten', 2024, 22, 58, 9.2, 'granola.webp');

    --petit dejeuner grossisant
INSERT INTO plat (idtemp_plat, nom_plat, energie, matieres_grasses, glucide, proteine, image) VALUES (1, 'Smoothie protéiné aux bananes', 450, 17.5, 55, 25, 'banana-smoothie.webp');

INSERT INTO plat (idtemp_plat, nom_plat, energie, matieres_grasses, glucide, proteine, image) VALUES (1, 'Omelette aux légumes et fromage', 350, 22.5, 7.5, 22.5, 'omelette-du-jardin.jpeg');

INSERT INTO plat (idtemp_plat, nom_plat, energie, matieres_grasses, glucide, proteine, image) VALUES (1, 'Porridge crémeux aux noix et aux fruits', 450, 22.5, 55, 12.5, 'porridge-aux-noix-et-fruits-rouges.jpeg');

INSERT INTO plat (idtemp_plat, nom_plat, energie, matieres_grasses, glucide, proteine, image) VALUES (1, 'Sandwich au beurre d''arachide et à la confiture', 450, 22.5, 50, 12.5, 'sandwich-au-beurre-d-arachide-confiture-de-fraise.webp');

INSERT INTO plat (idtemp_plat, nom_plat, energie, matieres_grasses, glucide, proteine, image) VALUES (2, 'Yaourt grec aux noix et au miel', 350, 17.5, 22.5, 17.5, 'yogourt-grec-au-miel.webp');



    --dejeuner amincicant
INSERT INTO plat (idtemp_plat, nom_plat, energie, matieres_grasses, glucide, proteine, image) VALUES (2, 'Salade de soleil au poulet et petites tomates', 122, 4.6, 14, 5.3, 'salade_de_soleil.webp');

INSERT INTO plat (idtemp_plat, nom_plat, energie, matieres_grasses, glucide, proteine, image) VALUES (2, 'Salade de thon listao', 106, 3.7, 8, 9.2, 'salade_de_thon_listao.webp');

INSERT INTO plat (idtemp_plat, nom_plat, energie, matieres_grasses, glucide, proteine, image) VALUES (2, 'Salade indienne', 94, 2.8, 12.7, 3.7, 'salade_indienne.webp');

INSERT INTO plat (idtemp_plat, nom_plat, energie, matieres_grasses, glucide, proteine, image) VALUES (2, 'Salade de riz, poulet et petits légumes', 102, 2.8, 12.7, 6, 'salade_de_riz.webp');

INSERT INTO plat (idtemp_plat, nom_plat, energie, matieres_grasses, glucide, proteine, image) VALUES (2, 'Nouilles aux légumes et sauce soja', 103, 3, 14, 3.9, 'Nouille-legume.webp');


    --dejeuner grossissant
INSERT INTO plat (idtemp_plat, nom_plat, energie, matieres_grasses, glucide, proteine, image) VALUES (2, 'Poulet grillé avec quinoa et légumes', 450, 12.5, 45, 35, 'Poulet-grille.jpg');

INSERT INTO plat (idtemp_plat, nom_plat, energie, matieres_grasses, glucide, proteine, image) VALUES (2, 'Steak de bœuf avec patates douces rôties et haricots verts', 550, 17.5, 45, 35, 'steak-boeuf-patate.webp');

INSERT INTO plat (idtemp_plat, nom_plat, energie, matieres_grasses, glucide, proteine, image) VALUES (2, 'Pâtes à la carbonara avec bacon et fromage', 650, 27.5, 55, 27.5, 'pate-carbonara.jpg');

INSERT INTO plat (idtemp_plat, nom_plat, energie, matieres_grasses, glucide, proteine, image) VALUES (2, 'Wrap au poulet avec avocat, fromage et légumes', 450, 17.5, 35, 27.5, 'Wrap-aux-legumes.jpg');

INSERT INTO plat (idtemp_plat, nom_plat, energie, matieres_grasses, glucide, proteine, image) VALUES (2, 'Bol de riz avec saumon grillé, légumes rôtis et avocat', 550, 22.5, 45, 35, 'bol-riz-saumon.jpg');

    --diner amincicant
INSERT INTO plat (idtemp_plat, nom_plat, energie, matieres_grasses, glucide, proteine, image) VALUES (2, 'Salade mexicaine végétarienne', 109, 2.1, 17.1, 4.6, 'salade-mexicaine-vegetarienne.jpg');

INSERT INTO plat (idtemp_plat, nom_plat, energie, matieres_grasses, glucide, proteine, image) VALUES (2, 'Salade de mini coquilles à la grecque', 113, 2.1, 10, 4.9, 'salade-mini-coquille.jpg');

INSERT INTO plat (idtemp_plat, nom_plat, energie, matieres_grasses, glucide, proteine, image) VALUES (1, 'Salade Napolitaine', 142, 8.1, 8, 8.3, 'salade-napolitaine.webp');

INSERT INTO plat (idtemp_plat, nom_plat, energie, matieres_grasses, glucide, proteine, image) VALUES (2, 'Bœuf bourguignon et ses pâtes', 106, 3.2, 11, 7.8, 'boeuf-bourguignon.jpg');

INSERT INTO plat (idtemp_plat, nom_plat, energie, matieres_grasses, glucide, proteine, image) VALUES (2, 'Couscous Poulet Légumes et son boulgour', 107, 4.8, 8.9, 6.2, 'couscous-poulet.jpg');

    --diner grossisant
INSERT INTO plat (idtemp_plat, nom_plat, energie, matieres_grasses, glucide, proteine, image) VALUES (2, 'Saumon au four avec pommes de terre et légumes grillés', 550, 22.5, 45, 35, 'Paves-de-saumon-pommes.jpg');

INSERT INTO plat (idtemp_plat, nom_plat, energie, matieres_grasses, glucide, proteine, image) VALUES (2, 'Poulet rôti avec quinoa et brocolis', 450, 12.5, 45, 35, 'blanc-poulet-sauce-orange-brocoli-quinoa.avif');

INSERT INTO plat (idtemp_plat, nom_plat, energie, matieres_grasses, glucide, proteine, image) VALUES (2, 'Spaghetti à la bolognaise avec viande hachée et sauce tomate', 550, 17.5, 45, 27.5, 'spaghetti-bolonaise-viande-hache.jpg');

INSERT INTO plat (idtemp_plat, nom_plat, energie, matieres_grasses, glucide, proteine, image) VALUES (2, 'Burger de bœuf avec frites et salade', 650, 27.5, 45, 32.5, 'burger-boeuf-grille-frites-salade-chou.avif');

INSERT INTO plat (idtemp_plat, nom_plat, energie, matieres_grasses, glucide, proteine, image) VALUES (2, 'Risotto aux champignons et poulet', 550, 17.5, 45, 27.5, 'risotto-poulet-champignons.jpg');


--insert utilisateur
INSERT INTO utilisateur (nom_utilisateur, mail, mdp, dtn, date_insert,idgenre) VALUES ('John Doe', 'johndoe@example.com', 'motdepasse123', '1990-01-01', now(),1);

INSERT INTO utilisateur (nom_utilisateur, mail, mdp, dtn, date_insert,idgenre) VALUES ('Jane Smith', 'janesmith@example.com', 'password456', '1985-05-15', now(),2);




--insertion completion utiisateur
INSERT INTO completion_utilisateur (idutilisateur, taille, poids) VALUES (1, 1.8, 75);

INSERT INTO completion_utilisateur (idutilisateur, taille, poids) VALUES (2, 1.65, 60);

--insert objectif 
insert into objectif (description,operation) values ('Gagner du poids','+');

insert into objectif (description,operation) values ('Perdre du poids','-');

--insert objectif utilisateur

insert into objectif_utilisateur (idutilisateur , poidsobjectif , idobjectif , date_insertion) values (1 , 10 , 1 , now());

insert into objectif_utilisateur (idutilisateur , poidsobjectif , idobjectif , date_insertion) values (2 , 20 , 2 , now());

--insert code
INSERT INTO code (numero, montant) VALUES ('5E7D9C2F8A1D', 25000);
INSERT INTO code (numero, montant) VALUES ('A3B9C6B9E5D8', 50000);
INSERT INTO code (numero, montant) VALUES ('E5F37D304F6A', 100000);
INSERT INTO code (numero, montant) VALUES ('8C9AA2EF6783', 150000);
INSERT INTO code (numero, montant) VALUES ('F1E5C83B9A4D', 160000);
INSERT INTO code (numero, montant) VALUES ('D3E4D0149A7F', 170000);
INSERT INTO code (numero, montant) VALUES ('1B2C8E75D2AF', 180000);
INSERT INTO code (numero, montant) VALUES ('90A516CFA7BD', 190000);
INSERT INTO code (numero, montant) VALUES ('E4B2E3A7495C', 200000);
INSERT INTO code (numero, montant) VALUES ('67F493BF26E0', 210000);
INSERT INTO code (numero, montant) VALUES ('78E945D8C7B1', 220000);
INSERT INTO code (numero, montant) VALUES ('C2D8B70E9F5A', 230000);
INSERT INTO code (numero, montant) VALUES ('3E876AFC519D', 240000);
INSERT INTO code (numero, montant) VALUES ('9F201B9823C4', 250000);
INSERT INTO code (numero, montant) VALUES ('F0E1F2ED140D', 260000);

--insert sport     
    --sport pour perdre du poids
INSERT INTO sport (nom_sport , idobjectif) VALUES ('Pushup' , 2);
INSERT INTO sport (nom_sport , idobjectif) VALUES ('Cobra' , 2);
INSERT INTO sport (nom_sport , idobjectif) VALUES ('Y-raise' , 2);
INSERT INTO sport (nom_sport , idobjectif) VALUES ('Dip' , 2);
INSERT INTO sport (nom_sport , idobjectif) VALUES ('Pull-up' , 2);
INSERT INTO sport (nom_sport , idobjectif) VALUES ('AB Roller' , 2);
INSERT INTO sport (nom_sport , idobjectif) VALUES ('Plank' , 2);
INSERT INTO sport (nom_sport , idobjectif) VALUES ('Slide plank' , 2);
INSERT INTO sport (nom_sport , idobjectif) VALUES ('Leg lift' , 2);
INSERT INTO sport (nom_sport , idobjectif) VALUES ('Back crunch' , 2);
INSERT INTO sport (nom_sport , idobjectif) VALUES ('MT climber' , 2);
INSERT INTO sport (nom_sport , idobjectif) VALUES ('Hip rotation' , 2);
INSERT INTO sport (nom_sport , idobjectif) VALUES ('T rotation' , 2);
INSERT INTO sport (nom_sport , idobjectif) VALUES ('Squat' , 2);
INSERT INTO sport (nom_sport , idobjectif) VALUES ('Drop lunge' , 2);
INSERT INTO sport (nom_sport , idobjectif) VALUES ('Lunge' , 2);
INSERT INTO sport (nom_sport , idobjectif) VALUES ('Side lunge' , 2);
INSERT INTO sport (nom_sport , idobjectif) VALUES ('Get up' , 2);
INSERT INTO sport (nom_sport , idobjectif) VALUES ('Hip raise' , 2);
INSERT INTO sport (nom_sport , idobjectif) VALUES ('One-leg march' , 2);
INSERT INTO sport (nom_sport , idobjectif) VALUES ('One-leg RDL' , 2);
    --sport pour gagner du poids
INSERT INTO sport (nom_sport , idobjectif) VALUES ('Pompes' , 1);
INSERT INTO sport (nom_sport , idobjectif) VALUES ('Developpe incline' , 1);
INSERT INTO sport (nom_sport , idobjectif) VALUES ('Elevation laterale des bras' , 1);
INSERT INTO sport (nom_sport , idobjectif) VALUES ('Pompe Dive-Bomber' , 1);
INSERT INTO sport (nom_sport , idobjectif) VALUES ('Elevation bras et jambes opposes' , 1);
INSERT INTO sport (nom_sport , idobjectif) VALUES ('Gainage' , 1);

--insert type_sport
insert into type_sport(frequence_semaine , duree_exercice , description) values (5 , 5 , 'exercice intensive');

insert into type_sport(frequence_semaine , duree_exercice , description) values (3 , 3 , 'exercice modere');

insert into type_sport(frequence_semaine , duree_exercice , description) values (2 , 2 , 'exercice a faible intensite');

--insert IMC

INSERT INTO imc (valeur_min, valeur_sup, description)
VALUES (0, 18.5, 'Insuffisance pondérale'),
       (18.5, 24.9, 'Poids normal'),
       (25, 29.9, 'Surpoids'),
       (30, 34.9, 'Obésité de classe I'),
       (35, 39.9, 'Obésité de classe II'),
       (40, 100, 'Obésité de classe III');

--insert regime
insert into regime (idobjectif , nom_regime , idimc , duree , idtype_sport , kcalmin , kcalmax , poids , prix , image) values (2 , 'regime 1' , 4 , 22 , 1 , 1000 , 2000 , 20 , 100000 , null);

--insert ingredients
-- Muesli croustillant au chocholat
INSERT INTO ingredients (nom_ingredient) VALUES
('Cereales'),
('flocons de bles'),
('farine de ble'),
('cereales extrudees'),
('sucre'),
('farine de malt de ble'),
('sel'),
('sucre caramelise en poudre'),
('corn flakes'),
('extrait de malt d''orge'),
('sel'),
('emulsifiant');

-- Muesli aux fruits jaunes
INSERT INTO ingredients (nom_ingredient) VALUES
('Cereales'),
('flocons de ble'),
('farine de ble'),
('sucre'),
('farine de malt de ble'),
('sel'),
('sucre caramelise en poudre'),
('petales de mais'),
('emulsifiant');

-- Petits pains de campagne
INSERT INTO ingredients (nom_ingredient) VALUES
('Pain special'),
('eau'),
('levain'),
('sel marin'),
('levure'),
('farine de ble malte'),
('extrait d''acerola'),
('gluten de ble');

-- Petits pains aux cereales bio
INSERT INTO ingredients (nom_ingredient) VALUES
('Farine de ble'),
('eau'),
('graines'),
('levain'),
('levure');

-- granola au chocholat et amandes BIO sans gluten
INSERT INTO ingredients (nom_ingredient) VALUES
('Flocons d''avoine'),
('jus de pomme'),
('pépites de chocolat noir'),
('huile de tournesol'),
('sucre de canne blond'),
('billette de riz'),
('poudre de cacao'),
('amandes'),
('amidon de manioc'),
('graines de tournesol');

-- Smoothie protéiné aux bananes
INSERT INTO ingredients (nom_ingredient) VALUES
('Banane'),
('lait entier'),
('beurre d''arachide'),
('protéine en poudre');

-- Omelette aux légumes et fromage
INSERT INTO ingredients (nom_ingredient) VALUES
('Œufs'),
('légumes'),
('fromage râpé');

-- Porridge crémeux aux noix et aux fruits
INSERT INTO ingredients (nom_ingredient) VALUES
('Flocons d''avoine'),
('lait entier'),
('noix'),
('fruits frais ou séchés');

-- Sandwich au beurre d'arachide et à la confiture
INSERT INTO ingredients (nom_ingredient) VALUES
('Pain complet'),
('beurre d''arachide'),
('confiture de fruits');

-- Yaourt grec aux noix et au miel
INSERT INTO ingredients (nom_ingredient) VALUES
('Yaourt grec'),
('noix'),
('miel');

-- Salade de soleil au poulet et petites tomates
INSERT INTO ingredients (nom_ingredient) VALUES
('eau'),
('oignon'),
('tomates'),
('pates alimentaires'),
('poulet roti'),
('poivrons rouges'),
('poivrons jaunes'),
('huile de colza'),
('vinaigre d''alcool'),
('fecule de manioc'),
('sel'),
('basilic'),
('origan'),
('piment doux'),
('arome naturel');

-- Salade de thon listao
INSERT INTO ingredients (nom_ingredient) VALUES
('eau'),
('longues de thon'),
('carottes'),
('oignons'),
('poivrons rouges'),
('pois chiches'),
('huile de colza'),
('cibolette'),
('vinaigre d''alcool'),
('ail deshydrate'),
('amidon'),
('moutarde'),
('curcuma'),
('poivre');

-- salade indienne
INSERT INTO ingredients (nom_ingredient) VALUES
('poivrons verts'),
('poivrons jaunes'),
('poivrons rouges'),
('eau'),
('pulet roti'),
('fecule de manioc'),
('carottes'),
('farine de ble'),
('vinaigre d''alcool'),
('huile de colza'),
('coriandre'),
('sel'),
('curcuma');

-- Salade de riz, poulet et petits légumes
INSERT INTO ingredients (nom_ingredient) VALUES
('Poulet'),
('eau'),
('riz'),
('poivrons rouges'),
('tomates'),
('aubergines'),
('olives noires (olive, sel)'),
('oignons'),
('courgettes'),
('farine de blé'),
('basilic'),
('jus de citron concentré'),
('sel');

-- Nouilles aux légumes et sauce soja
INSERT INTO ingredients (nom_ingredient) VALUES
('Eau'),
('Spaghettini précuits (semoule de blé dur, poudre de blanc d''oeuf, huile de colza, sel)'),
('carottes'),
('courgettes'),
('oignons'),
('champignons'),
('farines de blé'),
('sauce soja (eau, graine de soja, sel, farine de blé)'),
('huile de colza'),
('poudre de lait'),
('jus de citron'),
('épices et aromates'),
('citronnelle'),
('vinaigre de riz (eau, riz complet, sel, ferments)'),
('sel');

-- Salade mexicaine végétarienne
INSERT INTO ingredients (nom_ingredient) VALUES
('Eau'),
('haricots rouges pré trempés (haricot rouge, eau)'),
('maïs'),
('poivrons rouges'),
('riz'),
('haricots blancs'),
('concentré de tomates'),
('tomates'),
('oignons'),
('farine de blé'),
('huile d’olive vierge extra'),
('vinaigre d’alcool'),
('ail déshydraté'),
('sel'),
('cumin'),
('paprika'),
('oignon déshydraté'),
('poivre'),
('muscade'),
('girofle'),
('cannelle'),
('piment');

-- Salade de mini coquilles à la grecque
INSERT INTO ingredients (nom_ingredient) VALUES
('Eau'),
('spécialité céréalière au blanc d''œuf précuite (eau, semoule de blé dur, poudre de blanc d''œuf)'),
('pois chiches précuits'),
('feta (lait de brebis et de chèvre pasteurisé, sel, ferments lactiques [dont lait], coagulant microbien)'),
('oignons'),
('tomates'),
('poivrons rouges'),
('olives noires'),
('poivrons verts'),
('huile d''olive vierge'),
('zestes de citrons'),
('double concentré de tomates'),
('ail déshydraté'),
('amidon');

-- Salade de mini coquilles à la grecque (suite)
INSERT INTO ingredients (nom_ingredient) VALUES
('jus de citron concentré'),
('sel'),
('origan'),
('oignon déshydraté'),
('sel'),
('arôme naturel'),
('poivre'),
('curcuma');

-- Salade Napolitaine
INSERT INTO ingredients (nom_ingredient) VALUES
('Thon'),
('oignons'),
('tomates'),
('eau'),
('carottes'),
('huile de colza'),
('pâtes alimentaires (semoule de blé dur, poudre de blanc d''oeuf)'),
('haricots verts'),
('olives noires'),
('vinaigre d''alcool'),
('fécule de manioc'),
('sel'),
('ail'),
('épices et aromates'),
('arôme naturel');

-- Bœuf bourguignon et ses pâtes
INSERT INTO ingredients (nom_ingredient) VALUES
('Pâtes préparées (eau, semoule de blé dur, œufs, huile de tournesol, sel, vinaigre d''alcool)'),
('viande bovine traitée en salaison et précuite (viande bovine (Origine France), eau, amidon, sel)'),
('eau'),
('carottes'),
('vin rouge Corbières'),
('oignons'),
('huile de colza'),
('amidons'),
('concentré de tomates'),
('plantes aromatiques arômes naturels'),
('extrait de malt d''orge'),
('sel'),
('poivre');

-- Couscous Poulet Légumes et son boulgour
INSERT INTO ingredients (nom_ingredient) VALUES
('Eau'),
('poulet (Origine France) précuit (filet de poulet, sel, amidon de maïs)'),
('courgettes'),
('pois chiches réhydratés (pois chiches, eau)'),
('oignons'),
('boulgour'),
('concentré de tomate'),
('amidon de maïs'),
('huile d''olive vierge extra'),
('sel'),
('raz-el-hanout'),
('curcuma'),
('sucre');

-- Saumon au four avec pommes de terre et légumes grillés
INSERT INTO ingredients (nom_ingredient) VALUES
('Filet de saumon au four'),
('pommes de terre cuites au four'),
('légumes grillés (comme les courgettes, les poivrons, les oignons)'),
('huile d''olive');

-- Poulet rôti avec quinoa et brocolis
INSERT INTO ingredients (nom_ingredient) VALUES
('Poulet rôti'),
('quinoa cuit'),
('brocolis cuits à la vapeur'),
('huile d''olive');

-- Spaghetti à la bolognaise avec viande hachée et sauce tomate
INSERT INTO ingredients (nom_ingredient) VALUES
('Spaghetti (de préférence complets)'),
('viande hachée'),
('sauce tomate'),
('oignons'),
('ail'),
('fromage râpé');

-- Burger de bœuf avec frites et salade
INSERT INTO ingredients (nom_ingredient) VALUES
('Steak de bœuf haché pour faire le burger'),
('pain à burger'),
('fromage'),
('frites de pommes de terre'),
('salade (laitue, tomates, concombres)');

-- Risotto aux champignons et poulet
INSERT INTO ingredients (nom_ingredient) VALUES
('Riz à risotto'),
('champignons'),
('poulet cuit en dés'),
('bouillon de poulet'),
('oignons'),
('ail'),
('fromage râpé');


-------------------------------------------------------------------

--insert plat_ingredient
-- Muesli croustillant au chocolat
INSERT INTO plat_ingredient (idingredient, idplat) VALUES
(1, 1),   -- Cereales
(2, 1),   -- Flocons de bles
(3, 1),   -- Farine de ble
(4, 1),   -- Cereales extrudees
(5, 1),   -- Sucre
(6, 1),   -- Farine de malt de ble
(7, 1),   -- Sel
(8, 1),   -- Sucre caramelise en poudre
(9, 1),   -- Corn flakes
(10, 1),  -- Extrait de malt d'orge
(11, 1),  -- Sel
(12, 1);  -- Emulsifiant

-- Muesli aux fruits jaunes
INSERT INTO plat_ingredient (idingredient, idplat) VALUES
(1, 2),   -- Cereales
(13, 2),  -- Flocons de ble
(3, 2),   -- Farine de ble
(5, 2),   -- Sucre
(6, 2),   -- Farine de malt de ble
(7, 2),   -- Sel
(8, 2),   -- Sucre caramelise en poudre
(14, 2),  -- Petales de mais
(12, 2);  -- Emulsifiant

-- Petits pains de campagne
INSERT INTO plat_ingredient (idingredient, idplat) VALUES
(15, 3),  -- Pain special
(16, 3),  -- Eau
(17, 3),  -- Levain
(18, 3),  -- Sel marin
(19, 3),  -- Levure
(20, 3),  -- Farine de ble malte
(21, 3),  -- Extrait d'acerola
(22, 3);  -- Gluten de ble

-- Petits pains aux cereales bio
INSERT INTO plat_ingredient (idingredient, idplat) VALUES
(3, 4),   -- Farine de ble
(16, 4),  -- Eau
(23, 4),  -- Graines
(17, 4),  -- Levain
(19, 4);  -- Levure

-- Granola au chocholat et amandes BIO sans gluten
INSERT INTO plat_ingredient (idingredient, idplat) VALUES
(13, 5),  -- Flocons d'avoine
(24, 5),  -- Jus de pomme
(25, 5),  -- Pépites de chocolat noir
(26, 5),  -- Huile de tournesol
(27, 5),  -- Sucre de canne blond
(28, 5),  -- Billette de riz
(29, 5),  -- Poudre de cacao
(30, 5),  -- Amandes
(31, 5),  -- Amidon de manioc
(32, 5);  -- Graines de tournesol

-- Smoothie protéiné aux bananes
INSERT INTO plat_ingredient (idingredient, idplat) VALUES
(33, 6),  -- Banane
(34, 6),  -- Lait entier
(35, 6),  -- Beurre d'arachide
(36, 6);  -- Protéine en poudre

-- Omelette aux légumes et fromage
INSERT INTO plat_ingredient (idingredient, idplat) VALUES
(37, 7),  -- Œufs
(38, 7),  -- Légumes
(39, 7);  -- Fromage râpé

-- Porridge crémeux aux noix et aux fruits
INSERT INTO plat_ingredient (idingredient, idplat) VALUES
(13, 8),  -- Flocons d'avoine
(34, 8),  -- Lait entier
(40, 8),  -- Noix
(41, 8);  -- Fruits frais ou séchés

-- Sandwich au beurre d'arachide et à la confiture
INSERT INTO plat_ingredient (idingredient, idplat) VALUES
(42, 9),  -- Pain complet
(35, 9),  -- Beurre d'arachide
(43, 9);  -- Confiture de fruits

-- Yaourt grec aux noix et au miel
INSERT INTO plat_ingredient (idingredient, idplat) VALUES
(44, 10), -- Yaourt grec
(40, 10), -- Noix
(45, 10); -- Miel

-- Salade de soleil au poulet et petites tomates
INSERT INTO plat_ingredient (idingredient, idplat) VALUES
(16, 11), -- Eau
(46, 11), -- Oignon
(47, 11), -- Tomates
(48, 11), -- Pates alimentaires
(49, 11), -- Poulet roti
(50, 11), -- Poivrons rouges
(51, 11), -- Poivrons jaunes
(52, 11), -- Huile decolza
(53, 11), -- Vinaigre d'alcool
(54, 11), -- Fecule de manioc
(11, 11), -- Sel
(55, 11), -- Basilic
(56, 11), -- Origan
(57, 11), -- Piment doux
(58, 11); -- Arome naturel

-- Salade de thon listao
INSERT INTO plat_ingredient (idingredient, idplat) VALUES
(16, 12), -- Eau
(59, 12), -- Longues de thon
(60, 12), -- Carottes
(46, 12), -- Oignons
(50, 12), -- Poivrons rouges
(61, 12), -- Pois chiches
(52, 12), -- Huile de colza
(62, 12), -- Cibolette
(53, 12), -- Vinaigre d'alcool
(63, 12), -- Ail deshydrate
(31, 12), -- Amidon
(64, 12), -- Moutarde
(65, 12), -- Curcuma
(66, 12); -- Poivre

-- Salade indienne
INSERT INTO plat_ingredient (idingredient, idplat) VALUES
(67, 13), -- Poivrons verts
(68, 13), -- Poivrons jaunes
(50, 13), -- Poivrons rouges
(16, 13), -- Eau
(49, 13), -- Poulet roti
(54, 13), -- Fecule de manioc
(60, 13), -- Carottes
(3, 13),  -- Farine de ble
(53, 13), -- Vinaigre d'alcool
(52, 13), -- Huile de colza
(69, 13), -- Coriandre
(11, 13), -- Sel
(65, 13); -- Curcuma

-- Salade de riz, poulet et petits légumes
INSERT INTO plat_ingredient (idingredient, idplat) VALUES
(49, 14), -- Poulet
(16, 14), -- Eau
(70, 14), -- Riz
(50, 14), -- Poivrons rouges
(47, 14), -- Tomates
(71, 14), -- Aubergines
(72, 14), -- Olives noires (olive, sel)
(46, 14), -- Oignons
(73, 14), -- Courgettes
(3, 14),  -- Farine de ble
(55, 14), -- Basilic
(74, 14), -- Jus de citron concentré
(11, 14); -- Sel

-- Nouilles aux légumes et sauce soja
INSERT INTO plat_ingredient (idingredient, idplat) VALUES
(16, 15), -- Eau
(75, 15), -- Spaghettini précuits (semoule de blé dur, poudre de blanc d'oeuf, huile de colza, sel)
(76, 15), -- Carottes
(73, 15), -- Courgettes
(46, 15), -- Oignons
(77, 15), -- Champignons
(3, 15),  -- Farines de blé
(78, 15), -- Sauce soja (eau, graine de soja, sel, farine de blé)
(52, 15), -- Huile de colza
(79, 15), -- Poudre de lait
(74, 15), -- Jus de citron
(80, 15), -- Épices et aromates
(81, 15), -- Citronnelle
(82, 15), -- Vinaigre de riz (eau, riz complet, sel, ferments)
(11, 15); -- Sel

-- Poulet grillé avec quinoa et légumes
INSERT INTO plat_ingredient (idingredient, idplat) VALUES
(49, 16), -- Blanc de poulet grillé
(76, 16), -- Quinoa cuit
(77, 16), -- Légumes (brocolis, carottes, pois)
(78, 16); -- Huile d'olive

-- Steak de bœuf avec patates douces rôties et haricots verts
INSERT INTO plat_ingredient (idingredient, idplat) VALUES
(79, 17), -- Steak de bœuf grillé
(80, 17), -- Patates douces coupées en dés et rôties au four
(81, 17); -- Haricots verts sautés à l'huile d'olive

-- Pâtes à la carbonara avec bacon et fromage
INSERT INTO plat_ingredient (idingredient, idplat) VALUES
(82, 18), -- Pâtes (de préférence complètes)
(83, 18), -- Bacon croustillant
(84, 18), -- Œufs
(85, 18), -- Fromage râpé
(86, 18); -- Crème épaisse

-- Wrap au poulet avec avocat, fromage et légumes
INSERT INTO plat_ingredient (idingredient, idplat) VALUES
(87, 19), -- Tortilla de blé
(49, 19), -- Blanc de poulet grillé en tranches
(88, 19), -- Avocat tranché
(85, 19); -- Fromage râpé

-- Bol de riz avec saumon grillé, légumes rôtis et avocat
INSERT INTO plat_ingredient (idingredient, idplat) VALUES
(89, 20), -- Riz (complet ou blanc)
(90, 20), -- Filet de saumon grillé
(80, 20), -- Légumes rôtis (courgettes, poivrons, oignons)
(88, 20); -- Avocat tranché


-- Salade mexicaine végétarienne
INSERT INTO plat_ingredient (idingredient, idplat) VALUES
(16, 21), -- Eau
(83, 21), -- Haricots rouges pré trempés (haricot rouge, eau)
(84, 21), -- Maïs
(50, 21), -- Poivrons rouges
(70, 21), -- Riz
(85, 21), -- Haricots blancs
(86, 21), -- Concentré de tomates
(47, 21), -- Tomates
(46, 21), -- Oignons
(3, 21),  -- Farine de blé
(87, 21), -- Huile d'olive vierge extra
(53, 21), -- Vinaigre d'alcool
(88, 21), -- Ail déshydraté
(11, 21), -- Sel
(89, 21), -- Cumin
(90, 21), -- Paprika
(91, 21), -- Oignon déshydraté
(66, 21), -- Poivre
(92, 21), -- Muscade
(93, 21), -- Girofle
(94, 21); -- Cannelle

-- Salade de mini coquilles à la grecque
INSERT INTO plat_ingredient (idingredient, idplat) VALUES
(16, 22),  -- Eau
(95, 22),  -- Spécialité céréalière au blanc d'œuf précuite (eau, semoule de blé dur, poudre de blanc d'œuf)
(96, 22),  -- Pois chiches précuits
(97, 22),  -- Feta (lait de brebis et de chèvre pasteurisé, sel, ferments lactiques [dont lait], coagulant microbien)
(46, 22),  -- Oignons(98, 22),  -- Tomates
(50, 22),  -- Poivrons rouges
(99, 22),  -- Olives noires
(68, 22),  -- Poivrons verts
(87, 22),  -- Huile d'olive vierge
(100, 22), -- Zestes de citrons
(86, 22),  -- Double concentré de tomates
(88, 22),  -- Ail déshydraté
(31, 22),  -- Amidon
(74, 22),  -- Jus de citron concentré
(11, 22),  -- Sel
(101, 22), -- Origan
(91, 22),  -- Oignon déshydraté
(11, 22),  -- Sel
(102, 22), -- Arôme naturel
(66, 22),  -- Poivre
(65, 22);  -- Curcuma

-- Salade Napolitaine
INSERT INTO plat_ingredient (idingredient, idplat) VALUES
(59, 23),  -- Thon
(46, 23),  -- Oignons
(98, 23),  -- Tomates
(16, 23),  -- Eau
(60, 23),  -- Carottes
(87, 23),  -- Huile de colza
(48, 23),  -- Pâtes alimentaires (semoule de blé dur, poudre de blanc d'oeuf)
(72, 23),  -- Haricots verts
(99, 23),  -- Olives noires
(53, 23),  -- Vinaigre d'alcool
(54, 23),  -- Fécule de manioc
(11, 23),  -- Sel
(88, 23),  -- Ail
(80, 23),  -- Épices et aromates
(102, 23); -- Arôme naturel

-- Bœuf bourguignon et ses pâtes
INSERT INTO plat_ingredient (idingredient, idplat) VALUES
(103, 24), -- Pâtes préparées (eau, semoule de blé dur, œufs, huile de tournesol, sel, vinaigre d'alcool)
(104, 24), -- Viande bovine traitée en salaison et précuite (viande bovine (Origine France), eau, amidon, sel)
(16, 24),  -- Eau
(60, 24),  -- Carottes
(105, 24), -- Vin rouge Corbières
(46, 24),  -- Oignons
(87, 24),  -- Huile de colza
(31, 24),  -- Amidons
(106, 24), -- Concentré de tomates
(107, 24), -- Plantes aromatiques arômes naturels
(10, 24),  -- Extrait de malt d'orge
(11, 24),  -- Sel
(66, 24);  -- Poivre

-- Couscous Poulet Légumes et son boulgour
INSERT INTO plat_ingredient (idingredient, idplat) VALUES
(16, 25),  -- Eau
(108, 25), -- Poulet (Origine France) précuit (filet de poulet, sel, amidon de maïs)
(73, 25),  -- Courgettes
(71, 25),  -- Pois chiches réhydratés (pois chiches, eau)
(46, 25),  -- Oignons
(109, 25), -- Boulgour
(86, 25),  -- Concentré de tomate
(54, 25),  -- Amidon de maïs
(87, 25),  -- Huile d'olive vierge extra
(11, 25),  -- Sel
(110, 25), -- Raz-el-hanout
(65, 25),  -- Curcuma
(111, 25); -- Sucre

-- Saumon au four avec pommes de terre et légumes grillés
INSERT INTO plat_ingredient (idingredient, idplat) VALUES
(112, 26), -- Filet de saumon au four
(113, 26), -- Pommes de terre cuites au four
(114, 26), -- Légumes grillés (comme les courgettes, les poivrons, les oignons)
(87, 26);  -- Huile d'olive

-- Poulet rôti avec quinoa et brocolis
INSERT INTO plat_ingredient (idingredient, idplat) VALUES
(108, 27), -- Poulet rôti
(115, 27), -- Quinoa cuit
(116, 27), -- Brocolis cuits à la vapeur
(87, 27);  -- Huile d'olive

-- Spaghetti à la bolognaise avec viande hachée et sauce tomate
INSERT INTO plat_ingredient (idingredient, idplat) VALUES
(117, 28), -- Spaghetti (de préférence complets)
(118, 28), -- Viande hachée
(119, 28), -- Sauce tomate
(46, 28),  -- Oignons
(88, 28),  -- Ail
(39, 28);  -- Fromage râpé

-- Burger de bœuf avec frites et salade
INSERT INTO plat_ingredient (idingredient, idplat) VALUES
(120, 29), -- Steak de bœuf haché pour faire le burger
(121, 29), -- Pain à burger
(122, 29), -- Fromage
(123, 29), -- Frites de pommes de terre
(124, 29); -- Salade (laitue, tomates, concombres)

-- Risotto aux champignons et poulet
INSERT INTO plat_ingredient (idingredient, idplat) VALUES
(125, 30), -- Riz à risotto
(77, 30),  -- Champignons
(108, 30), -- Poulet cuit en dés
(126, 30), -- Bouillon de poulet
(46, 30),  -- Oignons
(88, 30),  -- Ail
(39, 30);  -- Fromage râpé

insert into marge values(2.5,now());

insert into regime (idobjectif , nom_regime , idimc , duree , idtype_sport , kcalmin , kcalmax , poids , prix , image) values (1 , 'Regime hypercalorique' , 1 , 60 , 3 , 2000 , 2500 , 20 , 300000 , 'regime-hypercalorique.avif');
