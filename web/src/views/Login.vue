<template>
  <form @submit.prevent="login()">
    <input type="email" v-model="email" placeholder="emal" />
    <input type="password" v-model="password" placeholder="password" />
    <button type="submit">login</button>
    <router-link to="/register">register</router-link>
  </form>
</template>

<script>
import fetchData from "../services/fetchData.js";
export default {
  data() {
    return {
      email: '',
      password: '',
    };
  },
  methods: {
    async login() {
      try {
        const response = await fetchData(
          "POST",
          "http://127.0.0.1:8000/api/v1/auth/login",
          {
            email: this.email,
            password: this.password,
          }
        );
        const token = response.authorisation.token;
        const name = response.user.name;
        localStorage.setItem("token", token);
        localStorage.setItem("name", name);
        this.$router.push({ name: "home" });
      } catch (error) {
        console.error("Error logging in:", error);
      }
    },
  },
};
</script>
