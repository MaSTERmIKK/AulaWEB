# Analizzatore di Dati di Vendita

# Inizializziamo una lista vuota per gli importi di vendita
importi_vendite = []

# Ciclo per ottenere dati validi dall'utente
while True:
    try:
        # Chiediamo all'utente di inserire gli importi di vendita separati da spazi
        input_utente = input("Inserisci gli importi di vendita separati da spazi: ")
        # Suddividiamo la stringa in una lista di stringhe
        lista_input = input_utente.strip().split()
        # Convertiamo ogni elemento della lista in un intero
        importi_vendite = [int(valore) for valore in lista_input]
        # Se la conversione ha successo, usciamo dal ciclo
        break
    except ValueError:
        # Se c'è un errore di valore, informiamo l'utente e richiediamo l'input
        print("Errore: assicurati di inserire solo numeri interi separati da spazi. Riprova.")

# Verifichiamo se la lista è vuota
if not importi_vendite:
    print("Non sono presenti dati di vendita.")
else:
    # Calcoliamo il totale delle vendite
    totale_vendite = sum(importi_vendite)
    # Calcoliamo la media delle vendite
    media_vendite = totale_vendite / len(importi_vendite)
    # Stampiamo il totale e la media con messaggi appropriati
    print(f"Totale delle vendite: {totale_vendite}")
    print(f"Media delle vendite: {media_vendite:.2f}")

    # Troviamo i giorni con vendite sopra la media
    giorni_sopra_media = []
    for indice, valore in enumerate(importi_vendite):
        if valore > media_vendite:
            # Aggiungiamo il numero del giorno (indice + 1) alla lista
            giorni_sopra_media.append(indice + 1)

    # Verifichiamo se ci sono giorni con vendite sopra la media
    if giorni_sopra_media:
        print("Giorni con vendite sopra la media:")
        # Stampiamo i giorni
        for giorno in giorni_sopra_media:
            print(f"Giorno {giorno} con vendita di {importi_vendite[giorno - 1]}")
    else:
        print("Non ci sono vendite sopra la media.")
