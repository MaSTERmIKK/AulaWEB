import pandas as pd
import numpy as np
import matplotlib.pyplot as plt

# Genera un dataset con temperature casuali per 30 giorni
np.random.seed(0)  # Per risultati riproducibili
temperature_data = np.random.uniform(low=15, high=30, size=30)  # Temperature casuali tra 15 e 30 gradi
df = pd.DataFrame(temperature_data, columns=["Temperature"])

# Calcola le statistiche richieste
temp_max = df["Temperature"].max()
temp_min = df["Temperature"].min()
temp_mean = df["Temperature"].mean()
temp_median = df["Temperature"].median()

# Stampa i risultati
print("Temperatura massima:", temp_max)
print("Temperatura minima:", temp_min)
print("Temperatura media:", temp_mean)
print("Mediana delle temperature:", temp_median)

# Crea un grafico a barre per mostrare le statistiche
labels = ['Massima', 'Minima', 'Media', 'Mediana']
values = [temp_max, temp_min, temp_mean, temp_median]

plt.figure(figsize=(8, 6))
plt.bar(labels, values, color=['red', 'blue', 'green', 'orange'])
plt.title("Statistiche di Temperatura")
plt.ylabel("Gradi Celsius")
plt.show()
