<script setup>
import { Link } from "@inertiajs/vue3";
import { ref } from "vue";
import { Head } from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";

defineProps({
  hall: {
    type: Object,
    default: () => ({}),
  },
});
const img = {
   url: "http://localhost/vue/inertia-vue/public/storage",
}
</script>
<template>
  <AuthenticatedLayout> 

      <!-- main-content-wrap start -->
        <div class="main-content-wrap section-ptb product-details-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6 col-md-6">
                        <div class="product-details-images">
                            <div class="product_details_container">
                                <!-- product_big_images start -->
                                <div class="product_big_images-top">
                                    <div class="portfolio-full-image tab-content">
                                        <div role="tabpanel" class="tab-pane active product-image-position" id="img-tab-5">
                                            <a href="" class="img-poppu">
                                                <img :src="img.url + '/' + hall.image" alt="#">
                                            </a>
                                        </div>
                                        
                                        
                                        
                                    </div>
                                </div>
                                <!-- product_big_images end -->

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6 col-md-6">
                        <!-- product_details_info start -->
                        <div class="product_details_info">
                            <h2 style="color:#6d48a1;">{{hall.name}}</h2>
                            <!-- pro_rating start -->
                            <div class="pro_rating d-flex">
                                <ul class="product-rating d-flex">
                                    <li><span class="ion-android-star-outline"></span></li>
                                    <li><span class="ion-android-star-outline"></span></li>
                                    <li><span class="ion-android-star-outline"></span></li>
                                    <li><span class="ion-android-star-outline"></span></li>
                                    <li><span class="ion-android-star-outline"></span></li>
                                </ul>
                                <span class="rat_qun"> (Based on 0 Ratings) </span>
                            </div>
                            <!-- pro_rating end -->
                            <!-- pro_details start -->
                            <div class="pro_details">
                                <p>{{hall.details}} </p>
                            </div>
                            <!-- pro_details end -->
                            <!-- pro_dtl_prize start -->
                            <ul class="pro_dtl_prize">
                                <li >${{hall.price}}</li>
                               
                            </ul>
                          
                            <ul class="pro_dtl_btn">
                                <li><a :href="route('booking.create')" class="buy_now_btn">Book now</a></li>
                               
                            </ul>
                           
                        </div>
                        <!-- product_details_info end -->
                    </div>
                </div>
            
            </div>
        </div>
        <!-- main-content-wrap end -->
  </AuthenticatedLayout>
</template>
