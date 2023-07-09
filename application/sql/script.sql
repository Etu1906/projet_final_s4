-- -- Création de la base de données
-- CREATE DATABASE gestion_employes;

-- -- Utilisation de la base de données
-- USE gestion_employes;

-- Création de la table des employés

CREATE TABLE employees (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    prenom VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    date_embauche DATE,
    salaire DECIMAL(10, 2),
    poste VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Création de la table des départements
CREATE TABLE departments (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    description VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Création de la table de liaison employés-départements (relation many-to-many)
CREATE TABLE employee_department (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    employee_id INT(11) NOT NULL,
    department_id INT(11) NOT NULL,
    FOREIGN KEY (employee_id) REFERENCES employees(id) ON DELETE CASCADE,
    FOREIGN KEY (department_id) REFERENCES departments(id) ON DELETE CASCADE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Création de la vue
CREATE VIEW vue_employes_departements AS
SELECT e.nom AS nom_employe, d.nom AS nom_departement
FROM employees e
JOIN employee_department ed ON e.id = ed.employee_id
JOIN departments d ON ed.department_id = d.id;


-- Insertion des départements
INSERT INTO departments (nom, description) VALUES
    ('Département 1', 'Description du département 1'),
    ('Département 2', 'Description du département 2'),
    ('Département 3', 'Description du département 3');

-- Insertion des employés
INSERT INTO employees (nom, prenom, email, date_embauche, salaire, poste) VALUES
    ('Nom 1', 'Prénom 1', 'email1@example.com', '2021-01-01', 5000.00, 'Poste 1'),
    ('Nom 2', 'Prénom 2', 'email2@example.com', '2021-02-01', 6000.00, 'Poste 2'),
    ('Nom 3', 'Prénom 3', 'email3@example.com', '2021-03-01', 7000.00, 'Poste 3');

-- Insertion des relations employés-départements
INSERT INTO employee_department (employee_id, department_id) VALUES
    (1, 1), -- Employé 1 dans le département 1
    (2, 2), -- Employé 2 dans le département 2
    (3, 3); -- Employé 3 dans le département 3

