from abc import ABC, abstractmethod

# Classe Base: MetodoPagamento
class MetodoPagamento(ABC):
    @abstractmethod
    def effettua_pagamento(self, importo):
        pass

# Classe Derivata: CartaDiCredito
class CartaDiCredito(MetodoPagamento):
    def effettua_pagamento(self, importo):
        print(f"Pagamento di {importo} euro effettuato tramite Carta di Credito.")

# Classe Derivata: PayPal
class PayPal(MetodoPagamento):
    def effettua_pagamento(self, importo):
        print(f"Pagamento di {importo} euro effettuato tramite PayPal.")

# Classe Derivata: BonificoBancario
class BonificoBancario(MetodoPagamento):
    def effettua_pagamento(self, importo):
        print(f"Pagamento di {importo} euro effettuato tramite Bonifico Bancario.")

# Classe GestorePagamenti
class GestorePagamenti:
    def __init__(self, metodo_pagamento: MetodoPagamento):
        self.metodo_pagamento = metodo_pagamento

    def paga(self, importo):
        self.metodo_pagamento.effettua_pagamento(importo)

# Esempio di utilizzo
def main():
    # Creazione di diverse istanze di metodi di pagamento
    carta_di_credito = CartaDiCredito()
    paypal = PayPal()
    bonifico_bancario = BonificoBancario()

    # Utilizzo del GestorePagamenti con diversi metodi di pagamento
    gestore = GestorePagamenti(carta_di_credito)
    gestore.paga(100)

    gestore = GestorePagamenti(paypal)
    gestore.paga(200)

    gestore = GestorePagamenti(bonifico_bancario)
    gestore.paga(300)

if __name__ == "__main__":
    main()
