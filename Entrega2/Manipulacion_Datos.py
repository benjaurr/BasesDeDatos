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
        viaje = [data[1], data[2], data[3], data[5], data[6], data[4], data[7], data[10]]
        if viaje not in viajes:
            viajes.append(viaje)
        id_viaje = viajes.index(viaje) + 1
        tickets.append([data[0], id_viaje, data[9], data[8]])

re = open("datos_originales/usuarios-reservas-hoteles.csv", 'r', encoding='UTF-8')
for line in csv.DictReader(re):
    u = [line['uid'], line['username'], line['nombreusuario'], line['correo'], line['direccionusuario']]
    if u not in usuarios:
        usuarios.append(u)
    h = [line['hid'], line['nombrehotel'], line['nombreciudad'], line['direccionhotel'], line['telefono'], line['precionoche']]
    if h not in hoteles:
        hoteles.append(h)
    r = [line['hid'], line['uid'], line['fechainicio'], line['fechatermino']]
    reservas.append(r)
re.close()


with open('datos_modificados/paises.csv', 'w+', encoding='UTF-8') as file:
    escritor_paises = csv.writer(file)
    escritor_paises.writerow(['pnombre', 'numero_contacto'])
    for pais in paises:
        escritor_paises.writerow([pais[0], pais[1]])

with open('datos_modificados/ciudades.csv', 'w+', encoding='UTF-8') as file:
    escritor_ciudades = csv.writer(file)
    escritor_ciudades.writerow(['id_ciudad', 'cnombre', 'pnombre'])
    for idciudad, ciudad in enumerate(ciudades, 1):
        file.write(f'{idciudad},{ciudad[0]},{ciudad[1]}\n')

with open('datos_modificados/viajes.csv', 'w+', encoding='UTF-8') as file:
    escritor_viajes = csv.writer(file)
    escritor_viajes.writerow(['id_viaje', 'id_ciudad_origen', 'id_ciudad_destino', 'hora_de_salida', 'medio', 'capacidad_maxima', 'duracion', 'precio', 'fecha_viaje'])
    for idviaje, viaje in enumerate(viajes, 1):
        cdo = viaje[0]
        cdd = viaje[1]
        for idc, ciudad in enumerate(ciudades, 1):
            if ciudad[0] == cdo:
                viaje[0] = idc
            elif ciudad[0] == cdd:
                viaje[1] = idc
        file.write(f'{idviaje},{viaje[0]},{viaje[1]},{viaje[2]},{viaje[3]},{viaje[4]},{viaje[5]},{viaje[6]},{viaje[7]}\n')

with open('datos_modificados/tickets.csv', 'w+', encoding='UTF-8') as file:
    escritor_tickets = csv.writer(file)
    escritor_tickets.writerow(['numero_ticket', 'usario_id', 'id_viaje', 'fecha_compra', 'numero_de_asiento'])
    for numero_ticket, ticket in enumerate(tickets, 1):
        file.write(f'{numero_ticket},{ticket[0]},{ticket[1]},{ticket[2]},{ticket[3]}\n')

file_usuarios = open('datos_modificados/usuarios.csv', 'w', encoding='UTF-8')
escritor_usuarios = csv.writer(file_usuarios)
escritor_usuarios.writerow(['usario_id', 'username', 'nombre', 'correo', 'direccion'])
for usuario in usuarios:
    escritor_usuarios.writerow([usuario[0], usuario[1], usuario[2], usuario[3], usuario[4]])
file_usuarios.close()

file_hoteles = open('datos_modificados/hoteles.csv', 'w', encoding='UTF-8')
escritor_hoteles = csv.writer(file_hoteles)
escritor_hoteles.writerow(['id_hotel', 'nombre_hotel', 'id_ciudad', 'direccion', 'telefono', 'precio'])
for hotel in hoteles:
    nc = hotel[2]
    for idc, ciudad in enumerate(ciudades, 1):
        if ciudad[0] == nc:
            hotel[2] = idc
    escritor_hoteles.writerow([hotel[0], hotel[1], hotel[2], hotel[3], hotel[4], hotel[5]])
file_hoteles.close()

file_reservas = open('datos_modificados/reservas.csv', 'w', encoding='UTF-8')
escritor_reservas = csv.writer(file_reservas)
escritor_reservas.writerow(['id_reserva', 'id_hotel', 'usuario_id', 'fecha_llega', 'fecha_salida'])
for rid, reserva in enumerate(reservas, 1):
    escritor_reservas.writerow([rid, reserva[0], reserva[1], reserva[2], reserva[3]])
file_reservas.close()
