Correzione.vue<template>
  <div class="login-container">
    <h2>Login</h2>
    <form @submit.prevent="handleLogin">
      <div class="form-group">
        <label for="email">Email:</label>
        <input
          type="email"
          id="email"
          v-model="email"
          @blur="validateEmail"
          :class="{ 'is-invalid': emailError }"
          required
        />
        <span v-if="emailError" class="error">{{ emailError }}</span>
      </div>

      <div class="form-group">
        <label for="password">Password:</label>
        <input
          type="password"
          id="password"
          v-model="password"
          @blur="validatePassword"
          :class="{ 'is-invalid': passwordError }"
          required
        />
        <span v-if="passwordError" class="error">{{ passwordError }}</span>
      </div>

      <button type="submit">Login</button>
    </form>

    <div v-if="loginError" class="error-message">
      {{ loginError }}
    </div>
    <div v-if="loginSuccess" class="success-message">
      Login effettuato con successo!
    </div>
  </div>
</template>

<script>
export default {
  name: 'Login',
  data() {
    return {
      email: '',
      password: '',
      emailError: '',
      passwordError: '',
      loginError: '',
      loginSuccess: false,
    };
  },
  methods: {
    validateEmail() {
      const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!this.email) {
        this.emailError = 'L\'email è richiesta.';
      } else if (!emailPattern.test(this.email)) {
        this.emailError = 'Inserisci un\'email valida.';
      } else {
        this.emailError = '';
      }
    },
    validatePassword() {
      if (!this.password) {
        this.passwordError = 'La password è richiesta.';
      } else if (this.password.length < 6) {
        this.passwordError = 'La password deve avere almeno 6 caratteri.';
      } else {
        this.passwordError = '';
      }
    },
    handleLogin() {
      // Reset dei messaggi di errore
      this.loginError = '';
      this.loginSuccess = false;

      // Validazione dei campi
      this.validateEmail();
      this.validatePassword();

      if (this.emailError || this.passwordError) {
        return;
      }

      // Simulazione della richiesta di autenticazione
      // In un'app reale, qui effettueresti una chiamata API
      const mockUser = {
        email: 'utente@example.com',
        password: 'password123',
      };

      if (this.email === mockUser.email && this.password === mockUser.password) {
        this.loginSuccess = true;
        // Puoi reindirizzare l'utente o eseguire altre azioni dopo il login
      } else {
        this.loginError = 'Credenziali non valide. Riprova.';
      }
    },
  },
};
</script>

<style scoped>
.login-container {
  max-width: 400px;
  margin: 0 auto;
  padding: 20px;
}

.form-group {
  margin-bottom: 15px;
}

input {
  width: 100%;
  padding: 8px;
  box-sizing: border-box;
}

.is-invalid {
  border-color: red;
}

.error {
  color: red;
  font-size: 0.9em;
}

.error-message {
  margin-top: 15px;
  color: red;
}

.success-message {
  margin-top: 15px;
  color: green;
}

button {
  padding: 10px 15px;
  background-color: #42b983;
  color: white;
  border: none;
  cursor: pointer;
}

button:hover {
  background-color: #369870;
}
</style>
