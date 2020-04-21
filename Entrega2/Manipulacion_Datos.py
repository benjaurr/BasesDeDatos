import csv


paises = list()
ciudades = list()
usuarios = list()
viajes = list()
tickets = list()
hoteles = list()
reservas = list()


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

re = open("datos_originales/usuarios-reservas-hoteles.csv", 'r', encoding='UTF-8')
for line in csv.DictReader(re):
    u = [line['uid'], line['username'], line['nombreusuario'], line['correo'], line['direccionusuario']]
    if u not in usuarios:
        usuarios.append(u)
    h = [line['hid'], line['nombreciudad'], line['direccionhotel'], line['telefono'], line['precionoche']]
    if h not in hoteles:
        hoteles.append(h)
    r = [line['hid'], line['uid'], line['fechainicio'], line['fechatermino']]
    reservas.append(r)
re.close()


with open('datos_modificados/paises.csv', 'w+', encoding='UTF-8') as file:
    for pais in paises:
        file.write(f'{pais[0],pais[1]}\n')

with open('datos_modificados/ciudades.csv', 'w+', encoding='UTF-8') as file:
    for idciudad, ciudad in enumerate(ciudades, 1):
        file.write(f'{idciudad},{ciudad[0]},{ciudad[1]}\n')

with open('datos_modificados/viajes.csv', 'w+', encoding='UTF-8') as file:
    for idviaje, viaje in enumerate(viajes, 1):
        file.write(f'{idviaje},{viaje[0]},{viaje[1]},{viaje[2]},{viaje[3]},{viaje[4]},{viaje[5]},{viaje[6]}\n')

with open('datos_modificados/tickets.csv', 'w+', encoding='UTF-8') as file:
    for numero_ticket, ticket in enumerate(tickets, 1):
        file.write(f'{numero_ticket},{ticket[0]},{ticket[1]},{ticket[2]},{ticket[3]},{ticket[4]}\n')


file_usuarios = open('datos_modificados/usuarios.csv', 'w', encoding='UTF-8')
escritor_usuarios = csv.writer(file_usuarios)
for usuario in usuarios:
    escritor_usuarios.writerow([usuario[0], usuario[1], usuario[2], usuario[3], usuario[4]])
file_usuarios.close()

file_hoteles = open('datos_modificados/hoteles.csv', 'w', encoding='UTF-8')
escritor_hoteles = csv.writer(file_hoteles)
for hotel in hoteles:
    nc = hotel[1]
    for idc, ciudad in enumerate(ciudades, 1):
        if ciudad[0] == nc:
            hotel[1] = idc
    escritor_hoteles.writerow([hotel[0], hotel[1], hotel[2], hotel[3], hotel[4]])
file_hoteles.close()

file_reservas = open('datos_modificados/reservas.csv', 'w', encoding='UTF-8')
escritor_reservas = csv.writer(file_reservas)
for rid, reserva in enumerate(reservas, 1):
    escritor_reservas.writerow([rid, reserva[0], reserva[1], reserva[2], reserva[3]])
file_reservas.close()

print(reservas)
