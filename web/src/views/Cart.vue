<template>
  <div class="my-5">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Image</th>
          <th scope="col">Name</th>
          <th scope="col">Price</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(item, index) in data" :key="item.id">
          <th scope="row">{{ index + 1 }}</th>
          <td>
            <img
              :src="`http://127.0.0.1:8000/${item.image}`"
              alt="iamge"
              style="height: 70px; width: 100px; object-fit: cover"
            />
          </td>
          <td>{{ item.name }}</td>
          <td>{{ item.price }}</td>
          <td>
            <button
              @click="removeCart(item.cart_id)"
              type="button"
              class="btn btn-outline-danger"
            >
              Remove
            </button>
          </td>
        </tr>
      </tbody>
    </table>
    <div class="d-flex align-items-center justify-content-end ">
              <div
                class="mt-4 me-5 d-flex flex-column align-items-center justify-content-center"
              >
                <h3>Total Price: {{ totalPrice }}$</h3>
                <router-link
                  to="/en/order"
                  type="button"
                  class="btn btn-outline-secondary btn-lg mt-3"
                  style="width: 200px"
                >
                  Checkout
                </router-link>
              </div>
            </div>
  </div>
</template>

<style scoped></style>

<script>
import fetchData from "../services/fetchData.js";
import {RiDeleteBinFill} from 'vue-remix-icons';
export default {
    conponets:{
        RiDeleteBinFill
    },
  data() {
    return {
      data: [],
    };
  },
  computed: {
    totalPrice() {
      const totalPrice = this.data.reduce(
        (total, item) => total + parseFloat(item.price),
        0
      );
      return totalPrice.toFixed(2);
    },
  },
  mounted() {
    this.getCart();
  },
  methods: {
    async getCart() {
      try {
        // Access $route.params.id using this.$route
        this.data = await fetchData(
          "GET",
          "http://127.0.0.1:8000/api/v1/cart/cart",
          null
        );
      } catch (error) {
        console.error("Error fetching data:", error);
      }
    },
    async removeCart(id) {
      try {
        // Access $route.params.id using this.$route
        await fetchData(
          "DELETE",
          `http://127.0.0.1:8000/api/v1/cart/${id}`,
          null
        );
        this.getCart();
      } catch (error) {
        console.error("Error fetching data:", error);
      }
    },
  },
};
</script>
