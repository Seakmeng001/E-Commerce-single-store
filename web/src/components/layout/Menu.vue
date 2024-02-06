<template>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <nav class="navbar navbar-expand-lg custom_nav-container">
        <a class="navbar-brand" href="index.html">
          <span> Giftos </span>
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class=""></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item">
              <router-link to="/" class="nav-link"> Home </router-link>
            </li>
            <li class="nav-item">
              <router-link to="/shop" class="nav-link"> Shop </router-link>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="why.html"> Why Us </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="testimonial.html"> Testimonial </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact Us</a>
            </li>
          </ul>
          <div class="user_option">
            <router-link v-if="!isLogin" to="/login">
              <i class="fa fa-user" aria-hidden="true"></i>
              <span> Login </span>
            </router-link>
            <span v-else style="margin-end:12px">
              {{ isLogin }}
            </span>
            <a href="">
              <i class="fa fa-shopping-bag" aria-hidden="true"></i>
            </a>
            <form class="form-inline">
              <button class="btn nav_search-btn" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </form>
          </div>
        </div>
      </nav>
    </header>
    <!-- end header section -->

    <!-- Start Content  -->
    <slot></slot>
    <!-- End Content  -->
    <!-- info section -->

    <section class="info_section layout_padding2-top">
      <div class="social_container">
        <div class="social_box">
          <a href="./image147_2.webp">
            <i class="fa fa-facebook" aria-hidden="true"></i>
          </a>
          <a href="">
            <i class="fa fa-twitter" aria-hidden="true"></i>
          </a>
          <a href="">
            <i class="fa fa-instagram" aria-hidden="true"></i>
          </a>
          <a href="">
            <i class="fa fa-youtube" aria-hidden="true"></i>
          </a>
        </div>
      </div>
      <div class="info_container">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-lg-3">
              <h6>ABOUT US</h6>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                doLorem ipsum dolor sit amet,
              </p>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="info_form">
                <h5>Newsletter</h5>
                <form action="#">
                  <input type="email" placeholder="Enter your email" />
                  <button>Subscribe</button>
                </form>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <h6>NEED HELP</h6>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                doLorem ipsum dolor sit amet,
              </p>
            </div>
            <div class="col-md-6 col-lg-3">
              <h6>CONTACT US</h6>
              <div class="info_link-box">
                <a href="">
                  <i class="fa fa-map-marker" aria-hidden="true"></i>
                  <span> Gb road 123 london Uk </span>
                </a>
                <a href="">
                  <i class="fa fa-phone" aria-hidden="true"></i>
                  <span>+01 12345678901</span>
                </a>
                <a href="">
                  <i class="fa fa-envelope" aria-hidden="true"></i>
                  <span> demo@gmail.com</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- footer section -->
      <footer class="footer_section">
        <div class="container">
          <p>
            &copy; <span id="displayYear"></span> All Rights Reserved By
            <a href="https://html.design/">Free Html Templates</a>
          </p>
        </div>
      </footer>
      <!-- footer section -->
    </section>

    <!-- end info section -->
  </div>
</template>

<script>
export default {
  data() {
    return {
      isLogin: localStorage.getItem("name"),
    };
  },
  watch: {
    '$route': function() {
      this.isLogin = localStorage.getItem('name');
    }
  }
};
</script>
