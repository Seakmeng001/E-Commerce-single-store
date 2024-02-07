<template>
  <section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>Latest Products</h2>
      </div>
      <div class="row">
        <div
          v-for="product in products.data"
          :key="product.id"
          class="col-sm-6 col-md-4 col-lg-3"
        >
          <div class="box">
            <a href="">
              <div class="img-box">
                <img :src="`http://localhost:8000/${product.image}`" alt="" />
              </div>
              <div class="detail-box">
                <h6>
                  {{ product.name }}
                </h6>
                <h6>
                  Price
                  <span> {{ product.price }}$ </span>
                  <span ><RiShoppingCartLine @click="addToCart(product.id, $event)" style="width: 17px;" /></span>
                </h6>
              </div>
              <div class="new">
                <span> New </span>
              </div>
            </a>
          </div>
        </div>
      </div>
      <!-- Pagination -->
      <div class="mt-4 d-flex justify-content-center">
        <ul class="pagination pagination-rounded mb-0 justify-content-end">
          <li class="page-item">
            <button
              class="page-link"
              @click="changePage(products.first_page_url)"
            >
              Previous
            </button>
          </li>
          <li
            v-for="(item, index) in products.links"
            :key="index"
            :class="{ 'page-item': true, active: item.active }"
          >
            <button
              v-if="index !== 0 && index !== products.links.length - 1"
              @click="changePage(item.url)"
              class="page-link"
            >
              {{ index }}
            </button>
          </li>

          <li class="page-item">
            <button
              class="page-link"
              @click="changePage(products.next_page_url)"
            >
              Next
            </button>
          </li>
        </ul>
      </div>
    </div>
  </section>
</template>
<script>
import fetchData from "../services/fetchData.js";
import {RiShoppingCartLine} from 'vue-remix-icons';
export default {
  components:{
    RiShoppingCartLine
  },
  data() {
    return {
      products: [],
      productEndPoint: "http://127.0.0.1:8000/api/v1/product",
    };
  },
  mounted() {
    this.getAll();
  },
  methods: {
    async getAll() {
      this.isLoading = true;
      try {
        this.products = await fetchData("GET", `${this.productEndPoint}`, null);
        this.isLoading = false;
      } catch (error) {
        console.error("Error fetching data:", error);
        this.isLoading = false;
      }
    },
    async changePage(url) {
      this.productEndPoint = url;
      await this.getAll();
    },
    async addToCart(productId, event) {
  event.preventDefault(); // Prevent default form submission or link navigation
  try {
    await fetchData("POST", "http://127.0.0.1:8000/api/v1/cart", {
      product_id: productId,
    });
    alert("Product added to cart successfully!");
  } catch (error) {
    console.error("Error adding product to cart:", error);
  }
}

  },
};
</script>
