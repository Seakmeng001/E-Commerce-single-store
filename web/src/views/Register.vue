<template>
    <form @submit.prevent="register()">
      <input type="text" v-model="name" placeholder="name" />
      <input type="email" v-model="email" placeholder="emal" />
      <input type="password" v-model="password" placeholder="password" />
      <button type="submit">register</button>
    </form>
    
  </template>
  
  <script>
  import fetchData from "../services/fetchData.js";
  export default {
    data() {
      return {
        name: '',
        email: '',
        password: '',
      };
    },
    methods: {
      async register() {
        try {
          const response = await fetchData(
            "POST",
            "http://127.0.0.1:8000/api/v1/auth/register",
            {
                name:this.name,
                email: this.email,
                password: this.password,
            }
          );
          this.$router.push({ name: "login" });
        } catch (error) {
          console.error("Error logging in:", error);
        }
      },
    },
  };
  </script>
  