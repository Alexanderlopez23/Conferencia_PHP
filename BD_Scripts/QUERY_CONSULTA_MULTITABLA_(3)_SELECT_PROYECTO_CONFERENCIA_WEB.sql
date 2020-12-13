SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, 
nombre_invitado, apellido_invitado 
FROM eventos 
INNER JOIN categoria_evento 
ON eventos.id_cat_evento = categoria_evento.id_categoria  
INNER JOIN invitados 
ON eventos.id_inv = invitados.invitado_id 
ORDER BY eventos.evento_id ASC