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


with open("datos_originales/tickets-destinos.csv", 'r', encoding='UTF-8') as file:
     file.readline()
     for line in file:
         data = line.strip().split(',')
         if [data[1], data[2], data[3], data[5], data[6], data[4], data[7]] not in viajes:
            viajes.append([data[1], data[2], data[3], data[5], data[6], data[4], data[7]])
         id_viaje = viajes.index([data[1], data[2], data[3], data[5], data[6], data[4], data[7]]) + 1
         tickets.append([data[0], id_viaje, data[9], data[8], data[10]])


with open("datos_originales/usuarios-reservas-hoteles.csv", 'r', encoding='UTF-8') as file:
    for line in file:
        print(line)

with open('datos_modificados/paises.csv', 'w+', encoding='UTF-8') as file:
    for pais in paises:
        file.write(f'{pais[0], pais[1]}\n')

with open('datos_modificados/ciudades.csv', 'w+', encoding='UTF-8') as file:
    for idciudad, ciudad in enumerate(ciudades, 1):
        file.write(f'{idciudad}, {ciudad[0]}, {ciudad[1]}\n')

with open('datos_modificados/viajes.csv', 'w+', encoding='UTF-8') as file:
    for idviaje, viaje in enumerate(viajes, 1):
        file.write(f'{idviaje}, {viaje[0]}, {viaje[1]}, {viaje[2]}, {viaje[3]}, {viaje[4]}, {viaje[5]}, {viaje[6]}\n')

with open('datos_modificados/tickets.csv', 'w+', encoding='UTF-8') as file:
    for numero_ticket, ticket in enumerate(tickets, 1):
        print(ticket)
        file.write(f'{numero_ticket}, {ticket[0]}, {ticket[1]}, {ticket[2]}, {ticket[3]}, {ticket[4]}\n')

