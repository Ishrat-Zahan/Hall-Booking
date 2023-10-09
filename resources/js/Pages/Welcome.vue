<script setup>
import { Link } from "@inertiajs/vue3";
import { ref } from "vue";
import { Head } from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";

defineProps({
   halls: {
    type: Object,
    default: () => ({}),
  },
  canLogin: {
    type: Boolean,
  },
  canRegister: {
    type: Boolean,
  },
  laravelVersion: {
    type: String,
    required: true,
  },
  phpVersion: {
    type: String,
    required: true,
  },
    
});
const img = {
   url: "http://localhost/vue/inertia-vue/public/storage",
}

</script>

<template>
  <Head>
    <title>Wedding Event</title>
    <meta name="description" content="my custom SEO content" />
  </Head>

  <AuthenticatedLayout>
    <div class="hero-slider hero-slider-one mt-4">
      <div class="single-slide">
        <!-- Hero Content One Start -->
        <div class="hero-content-one container">
          <div class="row">
            <div class="col-lg-10 col-md-10">
              <div class="slider-text-info">
                <h2>A <span>Different</span></h2>
                <h1>Weeding <span>Convention</span> Hall</h1>
                <p>
                  There are many variations of passages of Lorem Ipsum
                  available, but the majority have suffered alteration in some
                  form, by injected humour, or randomised words...
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- Hero Content One End -->
      </div>
    </div>

    <!-- Start Product Area -->
    <div class="porduct-area section-pt section-pb-60">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title text-center">
              <h2><span>Feature</span> Halls</h2>
              <p>
                It is most convenient to organize a party due to its location as
                it is outside the Cantonment. One can organize conference,
                family get-together, gaye halud, wedding reception, marriage
                ceremony
              </p>
            </div>
          </div>
        </div>

        <div class="row product-active-lg-4">
          <div  v-for="(h, index) in halls"
                      :key="index" class="col-lg-3">
            <!-- single-product-wrap start -->
            <div class="single-product-wrap">
              <div class="product-image">
             <a :href="route('hall.show', { id: h.id })">

                  <img class="img-fluid"  :src="img.url + '/' + h.image" alt="Product Images" />
                </a>
                <span class="label">15% Off</span>
              </div>

              <div class="">
                <h4>
                  <a href="">{{h.name}}</a>
                </h4>
                <span>Capacity:{{h.capacity}}</span>
                <div class="price-box">
                  <h5 class="new-price">${{h.price}}</h5>
                </div>
              </div>
            </div>
            <!-- single-product-wrap end -->
          </div>
        </div>
      </div>
    </div>
    <!-- Start Product End -->

      <!-- Banner Area Start -->
  <div class="banner-area section-pb">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 mt-30">
          <!-- Single Banner Start -->
          <div class="single-banner-two banner_bg-two">
            <div class="banner-content-two text-start">
              <div class="banner-content-box">
                <h3><span>30%</span> off for all Bookings</h3>
                <h3>on this summer</h3>
                <a href="">Book now</a>
              </div>
            </div>
          </div>
          <!-- Single Banner End -->
        </div>
      </div>
    </div>
  </div>
  <!-- Banner Area End -->


    <div class="banner-area">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <!-- Single Banner Start -->
          <div class="single-banner mt-30">
            <img
              class="img-fluied"
              src="@/images/banner/banner-04.jpg"
              alt=""
            />
            <div class="banner-content text-center">
              <div class="banner-content-box">
                <h4>Wedding Surprise</h4>
                <p>
                  There are many variations of passages of Lorem Ipsum
                  available, but the have suffered lebmid alteration in some
                  ledmid form
                </p>
                <a href="">Shop now</a>
              </div>
            </div>
          </div>
          <!-- Single Banner End -->
        </div>

        <div class="col-lg-4 col-md-6">
          <!-- Single Banner Start -->
          <div class="single-banner mt-30">
            <img
              class="img-fluied"
              src="@/images/banner/banner-05.jpg"
              alt=""
            />
            <div class="banner-content text-center">
              <div class="banner-content-box">
                <h4>Wedding Surprise</h4>
                <p>
                  There are many variations of passages of Lorem Ipsum
                  available, but the have suffered lebmid alteration in some
                  ledmid form
                </p>
                <a href="">Shop now</a>
              </div>
            </div>
          </div>
          <!-- Single Banner End -->
        </div>

        <div class="col-lg-4 col-md-6">
          <!-- Single Banner Start -->
          <div class="single-banner mt-30">
            <img
              class="img-fluied"
              src="@/images/banner/banner-06.jpg"
              alt=""
            />
            <div class="banner-content text-center">
              <div class="banner-content-box">
                <h4>Wedding Surprise</h4>
                <p>
                  There are many variations of passages of Lorem Ipsum
                  available, but the have suffered lebmid alteration in some
                  ledmid form
                </p>
                <a href="">Shop now</a>
              </div>
            </div>
          </div>
          <!-- Single Banner End -->
        </div>
      </div>
    </div>
  </div>
  </AuthenticatedLayout>
</template>

<style scoped>
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
  background-image: url(@/images/slider/shutterstock_556644895-sl-1.jpg);
}
.section-title span,
h2,
p {
  color: #6d48a1;
}
.section-title p {
  font-family: "Playfair Display", "Times New Roman", Times, serif;
  font-size: 16px;
  font-weight: 500;

  font-style: italic;
}
.banner-content-box span,
h3 {
  color: aliceblue;
}
.product-image {
  height: 200px;
}
h4,
h5,
span {
  color: #6d48a1;
}
</style>
