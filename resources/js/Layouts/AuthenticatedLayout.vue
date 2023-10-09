<script setup>
import { Link } from "@inertiajs/vue3";
import { ref } from "vue";
</script>

<template>
  <div class="container">
    <div class="header-top-area d-none d-lg-block">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="header-top-inner">
              <div class="row">
                <div class="col-lg-4 col-md-3">
                  <div class="social-top">
                    <ul>
                      <li>
                        <a href="#"><i class="ion-social-facebook"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="ion-social-twitter"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="ion-social-tumblr"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="ion-social-googleplus"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-8 col-md-9">
                  <div class="top-info-wrap text-end">
                    <ul class="top-info">
                      <li>Mon - Fri : 9am to 5pm</li>
                      <li><a href="#">01799217812</a></li>
                      <li><a href="#">ishratjahan260@gmail.com</a></li>
                      <li><a :href="route('logout')" method="post">Logout</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Header Top End -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light mt-3">
      <div class="container-fluid justify-content-center">
        <!-- Add 'justify-content-center' class here -->

        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="home-nav nav-item me-2">
              <a
                href="/"
                style="color: #6d48a1"
                aria-current="page"
                class="nav-link active"
              
                >Home</a
              >
            </li>
            <li class="home-nav nav-item me-3">
              <a
                href="/about"
                style="color: #6d48a1"
                aria-current="page"
                class="nav-link active"
               
                >About Us</a
              >
            </li>
            <li class="home-nav nav-item me-3">
              <a
                href="/contact"
                style="color: #6d48a1"
                aria-current="page"
                class="nav-link active"
              
                >Contact</a
              >
            </li>
            <li class="home-nav nav-item me-3">
              <Link
                href=""
                style="color: #6d48a1"
                aria-current="page"
                class="nav-link active"
                to="/hall"
                >Hall</Link
              >
            </li>
            <li class="home-nav nav-item me-3">
              <a
                :href="route('booking.create')"
                style="color: #6d48a1"
                aria-current="page"
                class="nav-link active"
             
                >Booking</a
              >
            </li>
            <li class="home-nav nav-item me-3">
              <Link
                href=""
                style="color: #6d48a1"
                aria-current="page"
                class="nav-link active"
                to="/stage"
                >Stage</Link
              >
            </li>
          
          </ul>
          
        </div>
      </div>
    </nav>

    <main>
      <slot />
    </main>

    <footer>
      <div class="footer-top section-pb section-pt-60">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <div class="widget-footer mt-20">
                <div class="footer-logo">
                  <a href=""><img src="" alt="" /></a>
                </div>
                <p>
                  long established fact that a reader will be distracted by the
                  readable content by the readable content established fact that
                </p>
                <div class="newsletter-footer">
                  <input type="text" placeholder="You Email" />
                  <div class="subscribe-button">
                    <button class="subscribe-btn">Subscribe</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-6">
              <div class="widget-footer mt-30">
                <h6 class="title-widget">QUICK LINK</h6>
                <ul class="footer-list">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Contact</a></li>
                  <li><a href="#">Blog Pages</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="widget-footer mt-30">
                <h6 class="title-widget">QUICK CONTACT</h6>
                <ul class="footer-contact">
                  <li>
                    <label>Phone</label>
                    <a href="#">01799217813</a>
                  </li>
                  <li>
                    <label>Email</label>
                    <a href="#">ishratzahan260@gmail.com</a>
                  </li>
                  <li>
                    <label>Address</label>
                    34/5 Section 06 <br />
                    Mirpur , Dhaka
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="widget-footer mt-30">
                <h6 class="title-widget">LATEST BLOG</h6>
                <ul class="footer-blog">
                  <li>
                    <div class="widget-blog-wrap">
                      <div class="widget-blog-image">
                        <a href="#"
                          ><img src="@/images/blog/small-blog.png" alt=""
                        /></a>
                      </div>
                      <div class="widget-blog-content">
                        <h6>
                          <a href="#">Some patience for the modern market</a>
                        </h6>
                        <div class="widget-blog-meta">
                          <span>21 Aug 2019</span>
                          <span>By <a href="#">Admin</a></span>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="widget-blog-wrap">
                      <div class="widget-blog-image">
                        <a href="#"
                          ><img src="@/images/blog/small-blog-02.jpg" alt=""
                        /></a>
                      </div>
                      <div class="widget-blog-content">
                        <h6>
                          <a href="#">Modern market Some patience for the </a>
                        </h6>
                        <div class="widget-blog-meta">
                          <span>13 Aug 2019</span>
                          <span>By <a href="#">Admin</a></span>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="copy-right-text text-center">
                <p>
                  Copyright &copy;
                  <a href="https://isdbstudents.com/ishratportfolio/">Ishrat</a>
                  All Right Reserved
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
</template>

<style scoped>
.footer-top {
  background-color: #6d48a1;
  color: aliceblue;
  margin-top: 80px;
}
.subscribe-btn {
  background-color: aliceblue;
  color: #6d48a1;
}
.navbar li {
  font-size: 15px;
}
.slider-text-info h1 {
  color: aliceblue;
}
.top-info-wrap {
  color: #6d48a1;
}
i {
  color: #6d48a1;
}
p {
  color: aliceblue;
}
.navbar {
  margin-left: 24%;
  padding: auto;
}
.nav-link {
  margin-right: 3px;
  position: relative;
  font-weight: 700;
}

.nav-link::after {
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  width: 0%;
  height: 2.5px;
  background-color: #6d48a1;
  transition: 0.5s;
}

.nav-link:hover::after {
  width: 100%;
  color: #6d48a1;
}
.single-slide {
  background-image: url(@/assets/images/slider/shutterstock_556644895-sl-1.jpg);
}
.section-title span,
h2,
p {
  color: #6d48a1;
}

.banner-content-box span,
h3 {
  color: aliceblue;
}
.nav-item{
  color: #6d48a1;
}
</style>
