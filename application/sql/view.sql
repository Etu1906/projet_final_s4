

CREATE OR REPLACE FUNCTION getTest(idparcelle integer )
RETURNS varchar AS $$
declare 
    nom varchar;
BEGIN
    EXECUTE ' select nom from test where id = 1 ' into nom;
    return nom;
END;
$$ LANGUAGE plpgsql;