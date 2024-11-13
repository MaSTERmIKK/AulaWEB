# Esercizio Pandas - Soluzione completa per Alessio


import pandas as pd

# Creazione di un dataset di esempio con dati su Prodotti, Quantità, Prezzo Unitario e Città
data = {
    'Prodotto': ['Prodotto A', 'Prodotto B', 'Prodotto C', 'Prodotto A', 'Prodotto B', 'Prodotto C', 'Prodotto A', 'Prodotto B', 'Prodotto C'],
    'Quantità': [10, 5, 8, 7, 3, 6, 5, 4, 9],
    'Prezzo Unitario': [20, 30, 15, 20, 30, 15, 20, 30, 15],
    'Città': ['Roma', 'Milano', 'Napoli', 'Roma', 'Milano', 'Napoli', 'Roma', 'Milano', 'Napoli']
}

# 1. Caricare i dati in un DataFrame.
df = pd.DataFrame(data)

# 2. Aggiungere una colonna "Totale Vendite" che sia il risultato del prodotto tra Quantità e Prezzo Unitario.
df['Totale Vendite'] = df['Quantità'] * df['Prezzo Unitario']

# 3. Raggruppare i dati per Prodotto e calcolare il totale delle vendite per ciascun prodotto.
totale_per_prodotto = df.groupby('Prodotto')['Totale Vendite'].sum().reset_index()

# 4. Trovare il prodotto più venduto in termini di Quantità.
prodotto_piu_venduto = df.groupby('Prodotto')['Quantità'].sum().idxmax()
quantita_piu_venduta = df.groupby('Prodotto')['Quantità'].sum().max()

# 5. Identificare la città con il maggior volume di vendite totali.
citta_maggior_vendite = df.groupby('Città')['Totale Vendite'].sum().idxmax()

# 6. Creare un nuovo DataFrame che mostri solo le vendite superiori a un certo valore (es., 1000 euro).
vendite_superiori_1000 = df[df['Totale Vendite'] > 1000]

# 7. Ordinare il DataFrame originale per la colonna "Totale Vendite" in ordine decrescente.
df_ordinato = df.sort_values(by='Totale Vendite', ascending=False)

# 8. Visualizzare il numero di vendite per ogni città.
vendite_per_citta = df['Città'].value_counts()

# Visualizzazione dei risultati per ogni passaggio
print("Dataset originale con Totale Vendite aggiunto:\n", df)
print("\nTotale delle vendite per ciascun prodotto:\n", totale_per_prodotto)
print("\nProdotto più venduto (in termini di quantità):", prodotto_piu_venduto, "con", quantita_piu_venduta, "unità vendute.")
print("\nCittà con il maggior volume di vendite:", citta_maggior_vendite)
print("\nVendite superiori a 1000 euro:\n", vendite_superiori_1000)
print("\nDataFrame ordinato per Totale Vendite in ordine decrescente:\n", df_ordinato)
print("\nNumero di vendite per ogni città:\n", vendite_per_citta)
