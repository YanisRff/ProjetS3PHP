from argon2 import PasswordHasher

def hash_password(password):
    ph = PasswordHasher()
    return ph.hash(password)

with open("patient.sql", "w") as file:
    for i in range(1, 100):
        file.write(f"INSERT INTO patient (p_id, p_mail, p_name, p_surname, p_phone, p_password) VALUES (")
        file.write(f"{i}, 'exemple{i}@gmail.com', 'Nom{i}', 'Prenom{i}', {i}, '{hash_password('a')}');\n")
        file.write("\n")
