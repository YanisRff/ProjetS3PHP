from argon2 import PasswordHasher
from datetime import date
from random import randint
from faker import Faker
import pandas as pd
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
        k = 1
        for i in range(1, 100):
            for j in range(1, 11):
                file.write(f"INSERT INTO rendez_vous (rdv_id, rdv_date, rdv_time, l_id) VALUES (")
                file.write(f"{k},")
                file.write(f"'{current_date}', '{time}',")
                file.write(f"'{randint(1, 99)}');\n")
                time_parts = time.split(':')
                hours = int(time_parts[0])
                hours = (hours + 1) % 24
                time = f"{hours:02d}:{time_parts[1]}:{time_parts[2]}"
                k += 1
            current_date_parts = current_date.split('-')
            year = int(current_date_parts[0])
            month = int(current_date_parts[1])
            day = int(current_date_parts[2])
            if day == 28 and month == 2 and (year % 4 != 0 or (year % 100 == 0 and year % 400 != 0)):
                day = 1
                month += 1
            elif day == 29 and month == 2:
                day = 1
                month += 1
            elif day == 30 and (month == 4 or month == 6 or month == 9 or month == 11):
                day = 1
                month += 1
            elif day == 31:
                day = 1
                if month == 12:
                    month = 1
                    year += 1
                else:
                    month += 1
            else:
                day += 1
            current_date = f"{year:04d}-{month:02d}-{day:02d}"
            time = "08:00:00 +00:00"
        file.close()


def medecin(file):
    spe = ["Généraliste", "Cardiologue", "Dermatologue", "Gynécologue", "Ophtalmologue", "ORL", "Pédiatre", "Pneumologue", "Psychiatre", "Rhumatologue", "Urologue", "Kinésitherpeute"]

    with open(file, "w") as file:
        #Endode in UTF-8
        file.write("SET NAMES = 'utf8';\n")
        file.write("SET CHARACTER = 'utf8';\n")
        for i in range(1, 100):
            file.write(f"INSERT INTO medecin (m_id, m_mail, m_name, m_surname, m_phone, m_password, m_postal, m_specialty) VALUES (")
            faker = Faker('fr_FR')
            name = faker.first_name()
            surname = faker.last_name()
            mail = faker.email()
            phone = faker.phone_number()
            postal = faker.postcode()
            file.write(f"{i}, '{mail}', '{name}', '{surname}', '{phone}', '{hash_password('a')}")
            file.write(f"', '{postal}'")
            file.write(f", '{spe[randint(0, len(spe) - 1)]}');\n")
        file.close()


def patient(file):
    with open(file, "w") as file:
        for i in range(1, 100):
            faker2 = Faker('fr_FR')
            name2 = faker2.first_name()
            surname2 = faker2.last_name()
            mail2 = faker2.email()
            phone2 = faker2.phone_number()
            file.write(f"INSERT INTO patient (p_id, p_mail, p_name, p_surname, p_phone, p_password) VALUES (")
            file.write(f"{i}, '{mail2}', '{name2}', '{surname2}', '{phone2}', '{hash_password('a')}');\n")
        file.close()


def propose(file):
    with open(file, "w") as propose:
        for i in range(1, 991):
            propose.write(f"INSERT INTO propose (rdv_id ,m_id) VALUES (")
            propose.write(f"{i}, {randint(1, 99)});\n")
        propose.close()

def all(file):
    faker = Faker('fr_FR')
    name = faker.first_name()
    surname = faker.last_name()
    mail = faker.email()
    phone = faker.phone_number()
    postal = faker.postcode()
    #Remove the space between the phone number
    phone = phone.replace(" ", "")
    with open(file, "w") as projet:
        projet.write("SET NAMES = 'utf8';\n")
        projet.write("SET CHARACTER = 'utf8';\n")
        for i in range(1, 100):
            faker3 = Faker('fr_FR')
            adress3 = faker3.street_address()
            ville3 = faker3.city()
            postal3 = faker3.postcode()
            projet.write(f"INSERT INTO lieu (l_id, l_adress, l_city, l_postal) VALUES (")
            projet.write(f"{i}, '{adress3}', '{ville3}', '{postal3}');\n")
        k = 1
        for l in range(1, 99):
            current_date = date.today().strftime("%Y-%m-%d")
            time = "08:00:00 +00:00"
            for i in range(1, 100):
                for j in range(1, 11):
                    projet.write(f"INSERT INTO rendez_vous (rdv_id, rdv_date, rdv_time, l_id) VALUES (")
                    projet.write(f"{k},")
                    projet.write(f"'{current_date}', '{time}',")
                    projet.write(f"'{randint(1, 99)}');\n")
                    time_parts = time.split(':')
                    hours = int(time_parts[0])
                    hours = (hours + 1) % 24
                    time = f"{hours:02d}:{time_parts[1]}:{time_parts[2]}"
                    k += 1
                current_date_parts = current_date.split('-')
                year = int(current_date_parts[0])
                month = int(current_date_parts[1])
                day = int(current_date_parts[2])
                if day == 28 and month == 2 and (year % 4 != 0 or (year % 100 == 0 and year % 400 != 0)):
                    day = 1
                    month += 1
                elif day == 29 and month == 2:
                    day = 1
                    month += 1
                elif day == 30 and (month == 4 or month == 6 or month == 9 or month == 11):
                    day = 1
                    month += 1
                elif day == 31:
                    day = 1
                    if month == 12:
                        month = 1
                        year += 1
                    else:
                        month += 1
                else:
                    day += 1
                current_date = f"{year:04d}-{month:02d}-{day:02d}"
                time = "08:00:00 +00:00"
        spe = ["Generaliste", "Cardiologue", "Dermatologue", "Gynecologue", "Ophtalmologue", "ORL", "Pediatre", "Pneumologue", "Psychiatre", "Rhumatologue", "Urologue", "Kinesitherpeute"]
        for i in range(1, 100):
            faker3 = Faker('fr_FR')
            name3 = faker3.first_name()
            surname3 = faker3.last_name()
            mail3 = faker3.email()
            phone3 = faker3.phone_number()
            phone3 = phone3.replace(" ", "")
            phone3 = phone3.replace(".", "")
            phone3 = phone3.replace("+33", "0")
            phone3 = phone3.replace("0(0)", "0")
            phone3 = phone3.replace("(0)", "0")
            postal3 = faker3.postcode()
            projet.write(f"INSERT INTO medecin (m_id, m_mail, m_name, m_surname, m_phone, m_password, m_postal, m_specialty) VALUES (")
            projet.write(f"{i}, '{mail3}', '{name3}', '{surname3}', '{phone3}', '{hash_password('a')}")
            projet.write(f"', '{postal3}'")
            projet.write(f", '{spe[randint(0, len(spe) - 1)]}');\n")
        for i in range(1, 100):
            faker2 = Faker('fr_FR')
            name2 = faker2.first_name()
            surname2 = faker2.last_name()
            mail2 = faker2.email()
            phone2 = faker2.phone_number()
            phone2 = phone2.replace(" ", "")
            phone2 = phone2.replace(".", "")
            phone2 = phone2.replace("+33", "0")
            phone2 = phone2.replace("0(0)", "0")
            phone2 = phone2.replace("(0)", "0")
            projet.write(f"INSERT INTO patient (p_id, p_mail, p_name, p_surname, p_phone, p_password) VALUES (")
            projet.write(f"{i}, '{mail2}', '{name2}', '{surname2}', '{phone2}', '{hash_password('a')}');\n")
        for i in range(1, 97021):
            projet.write(f"INSERT INTO propose (rdv_id ,m_id) VALUES (")
            projet.write(f"{i}, {randint(1, 99)});\n")
        projet.close()

all("projet.sql")
#rdv("rdv.sql")
#medecin("medecin.sql")
