<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, useForm } from "@inertiajs/vue3";
import { defineProps, ref, reactive } from "vue";


</script>

<template>
  <Head title="Blog Create" />

  <AuthenticatedLayout>
     <!-- breadcrumb-area start -->
  <div class="breadcrumb-area section-ptb">
    <div class="container">
      <div class="row">
        <div class="topAbout col-12">
          <h2 class="breadcrumb-title">About Us</h2>
          <!-- breadcrumb-list start -->
          <ul class="breadcrumb-list">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
          </ul>
          <!-- breadcrumb-list end -->
        </div>
      </div>
    </div>
  </div>
  <!-- breadcrumb-area end -->

  <!-- main-content-wrap start -->
  <div class="main-content-wrap">
    <!-- About Us Area -->
    <div class="about-us-area section-ptb">
      <div class="container d-flex">
        <div class="row align-items-center">
          <div class="col-lg-7">
            <div class="about-us-contents">
              <h3>Welcome To <span>Our Page</span></h3>
              <p>
                There are many variations of passages of Lorem Ipsum available,
                buthe majority have suffered alteration in some form, by injeed
                randomised words which don't look even sliglieable.All the Lorem
                Ipsum generators on the Internet tend to repe defined chunks as
                necessary, making this the first true generator on the Internet.
                It uses
              </p>
              <div class="about-us-btn">
                <a href="/contact">Contact now</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="about-us-image text-start">
            <img src="@/assets/images/other/about-us2.jpg" alt="" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--// About Us Area -->
  </AuthenticatedLayout>
</template>

<style scoped>
.topAbout {
  color: aliceblue;
}
.about-us-contents h3,
span {
  color: #6d48a1;
}
</style>

