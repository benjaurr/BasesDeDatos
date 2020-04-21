paises = list()
ciudades = list()
usuarios = list()
viajes = list()
tickets = list()
hoteles = list()
reservar = list()


with open('datos_originales/ciudades-paises.csv', 'r', encoding='UTF-8') as file:
    file.readline()
    for line in file:
        data = line.strip().split(',')
        if [data[1], data[2]] not in paises:
            paises.append([data[1], data[2]])
        if [data[0], data[1]] not in ciudades:
            ciudades.append([data[0], data[1]])


# with open("datos_originales/tickets-destinos.csv", 'r', encoding='UTF-8') as file:
#     for line in file:
#         print(line)


# with open("datos_originales/usuarios-reservas-hoteles.csv", 'r', encoding='UTF-8') as file:
#     for line in file:
#         print(line)

with open('datos_modificados/paises.csv', 'w+', encoding='UTF-8') as file:
    for pais in paises:
        file.write(f'{pais[0], pais[1]}\n')

with open('datos_modificados/ciudades.csv', 'w+', encoding='UTF-8') as file:
    for idciudad, ciudad in enumerate(ciudades, 1):
        file.write(f'{idciudad}, {ciudad[0]}, {ciudad[1]}\n')