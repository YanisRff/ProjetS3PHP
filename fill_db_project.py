from argon2 import PasswordHasher
from datetime import date
from random import randint

def hash_password(password):
    ph = PasswordHasher()
    return ph.hash(password)

def lieu(file):
    with open(file, "w") as lieu:
        for i in range(1, 100):
            lieu.write(f"INSERT INTO lieu (l_id, l_adress, l_city, l_postal) VALUES (")
            lieu.write(f"{i}, 'Rue{i}', 'Ville{i}', {randint(1000, 95999)});\n")
        lieu.close()

def rdv(file):
    with open(file, "w") as file:
        current_date = date.today().strftime("%Y-%m-%d")
        time = "08:00:00 +00:00"
        for i in range(1, 100):
            for j in range(1, 11):
                file.write(f"INSERT INTO rendez_vous (rdv_date, rdv_time, l_id) VALUES (")
                file.write(f"'{current_date}', '{time}',")
                file.write(f"'{randint(1, 100)}');\n")
                time_parts = time.split(':')
                hours = int(time_parts[0])
                hours = (hours + 1) % 24
                time = f"{hours:02d}:{time_parts[1]}:{time_parts[2]}"
            current_date_parts = current_date.split('-')
            day = int(current_date_parts[2])
            day = (day + 1) % 31
            current_date = f"{current_date_parts[0]}-{current_date_parts[1]}-{day:02d}"
            time = "08:00:00 +00:00"
        file.close()


def medecin(file):
    spe = ["Généraliste", "Cardiologue", "Dermatologue", "Gynécologue", "Ophtalmologue", "ORL", "Pédiatre", "Pneumologue", "Psychiatre", "Rhumatologue", "Urologue", "Kinésitherpeute"]

    with open(file, "w") as file:
        #Endode in UTF-8
        file.write("SET NAMES 'utf8';\n")
        file.write("SET CHARACTER SET utf8;\n")
        for i in range(1, 100):
            file.write(f"INSERT INTO medecin (m_id, m_mail, m_name, m_surname, m_phone, m_password, m_postal, m_specialty) VALUES (")
            file.write(f"{i}, 'mexemple{i}@gmail.com', 'Nom{i}', 'Prenom{i}', {i}, '{hash_password('a')}")
            file.write(f"', {randint(1000, 95999)}")
            file.write(f", '{spe[randint(0, len(spe) - 1)]}');\n")
            file.write("\n")
        file.close()


def patient(file):
    with open(file, "w") as file:
        for i in range(1, 100):
            file.write(f"INSERT INTO patient (p_id, p_mail, p_name, p_surname, p_phone, p_password) VALUES (")
            file.write(f"{i}, 'pexemple{i}@gmail.com', 'Nom{i}', 'Prenom{i}', {i}, '{hash_password('a')}');\n")
            file.write("\n")
        file.close()


def propose(file):
    with open(file, "w") as propose:
        for i in range(1, 991):
            propose.write(f"INSERT INTO propose (rdv_id ,m_id) VALUES (")
            propose.write(f"{i}, {randint(1, 99)});\n")
        propose.close()

def all(file):
    with open(file, "w") as projet:
        for i in range(1, 100):
            projet.write(f"INSERT INTO lieu (l_id, l_adress, l_city, l_postal) VALUES (")
            projet.write(f"{i}, 'Rue{i}', 'Ville{i}', {randint(1000, 95999)});\n")
        current_date = date.today().strftime("%Y-%m-%d")
        time = "08:00:00 +00:00"
        for i in range(1, 100):
            for j in range(1, 11):
                projet.write(f"INSERT INTO rendez_vous (rdv_date, rdv_time, l_id) VALUES (")
                projet.write(f"'{current_date}', '{time}',")
                projet.write(f"'{randint(1, 100)}');\n")
                time_parts = time.split(':')
                hours = int(time_parts[0])
                hours = (hours + 1) % 24
                time = f"{hours:02d}:{time_parts[1]}:{time_parts[2]}"
            current_date_parts = current_date.split('-')
            day = int(current_date_parts[2])
            day = (day + 1) % 31
            current_date = f"{current_date_parts[0]}-{current_date_parts[1]}-{day:02d}"
            time = "08:00:00 +00:00"
        spe = ["Generaliste", "Cardiologue", "Dermatologue", "Gynecologue", "Ophtalmologue", "ORL", "Pediatre", "Pneumologue", "Psychiatre", "Rhumatologue", "Urologue", "Kinesitherpeute"]
        for i in range(1, 100):
            projet.write(f"INSERT INTO medecin (m_id, m_mail, m_name, m_surname, m_phone, m_password, m_postal, m_specialty) VALUES (")
            projet.write(f"{i}, 'mexemple{i}@gmail.com', 'Nom{i}', 'Prenom{i}', {i}, '{hash_password('a')}")
            projet.write(f"', {randint(1000, 95999)}")
            projet.write(f", '{spe[randint(0, len(spe) - 1)]}');\n")
        for i in range(1, 100):
            projet.write(f"INSERT INTO patient (p_id, p_mail, p_name, p_surname, p_phone, p_password) VALUES (")
            projet.write(f"{i}, 'pexemple{i}@gmail.com', 'Nom{i}', 'Prenom{i}', {i}, '{hash_password('a')}');\n")
        for i in range(1, 991):
            projet.write(f"INSERT INTO propose (rdv_id ,m_id) VALUES (")
            projet.write(f"{i}, {randint(1, 99)});\n")
        projet.close()

all("projet.sql")
