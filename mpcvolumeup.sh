#!/bin/sh
#Script pour charger des musiques dans mpd
# C'est un script universelle de choix de playlist mpc
# Le premier parametre est le nom de la playlist, le deuxieme est le sous
# repertoire de music dans lequel on veux se positionner
# /!\ ATTENTION a la syntaxe = /nom_du_repertoire

#préciser la bibliothèque pour mpd.
#Afin de lire tous vos fichier audio, il faudra que ce soit votre home la bibliothèque



MUSDIR="/media/USBHDD1/TOADMEDIA/Music"$2"/" # La bibliothèque

#c'est parti
mpc stop &

#On clear la playlist
mpc clear &

#On update la bdd de mpc
#mpc update &

#Récuperation du numero de la playlist de mpc
NUM=$(mpc playlist |wc -l)

#Ajustement pour les noms de fichier avec espace
v_=$IFS
IFS='
'


cd $MUSDIR
mpc load $1
mpc random on
mpc repeat on
mpc play $(( $NUM + 1 ))

IFS=$v_
exit
