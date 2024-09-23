<template>
  <div class="login-container">
    <h2>Login</h2>
    <form @submit.prevent="handleLogin">
      <!-- Campi del form come prima -->
      <button type="submit" :disabled="isLoading">
        {{ isLoading ? 'Caricamento...' : 'Login' }}
      </button>
    </form>

    <!-- Messaggi di errore e successo come prima -->
  </div>
</template>
