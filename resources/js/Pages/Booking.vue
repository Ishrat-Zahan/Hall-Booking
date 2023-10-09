<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, useForm } from "@inertiajs/vue3";
import { defineProps, ref, reactive } from "vue";

const props = defineProps({
  halls: {
    type: Object,
    default: () => ({}),
  },
  userId: {
    type: Number,
    default: 0,
  },
  userName: {
    type: String,
  },
});

const form = useForm({
  user: props.userId,
  hall: "",
  date: "",
  total: "",
  comment: "",
  status: "request",
  url: "http://localhost/vue/inertia-vue/public/storage",
});

// const onChange = (event) => {
//   form.hall = event.target.value;
//   console.log(form.hall);
// };
const hallSelect = (id, price) => {
  form.hall = id;
  form.total = price;
  console.log(form.hall);
};

const submit = () => {
  form.post(route("booking.store"));
};
</script>

<template>
  <Head title="Blog Create" />

  <AuthenticatedLayout>
    <!-- <p>Welcome, User ID: {{ userId }}</p>
    <p>Welcome, User Name: {{ userName }}</p> -->

    <template #header>
      <h2 class="text-xl font-semibold leading-tight text-gray-800">Booking</h2>
    </template>

    <div class="py-12">
      <div class="mx-auto container">
        <div class="overflow-hidden bg-white shadow-sm rounded-lg">
          <div class="p-6 bg-white border border-gray-200">
            <form @submit.prevent="submit">
              <input name="userId" :value="form.user" type="hidden" />
              <!-- <div>
                <select
                  @change="onChange"
                  v-model="form.hall"
                  class="form-select"
                  name=""
                  id=""
                >
                  <option v-for="(h, index) in halls" :key="index" :value="h.id">
                    {{ h.name }}
                  </option>
                </select>
              </div> -->

              <div class="porduct-area section-pt section-pb-60">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="section-title text-center">
                        <h2><span>Feature</span> Halls</h2>
                      </div>
                    </div>
                  </div>

                  <div class="row product-active-lg-4">
                    <div
                      v-for="(h, index) in halls"
                      :key="index"
                      class="col-lg-3"
                    >
                      <!-- single-product-wrap start -->
                      <div
                        @click="hallSelect(h.id, h.price)"
                        class="single-product-wrap"
                      >
                        <div class="product-image">
                          <a href="javascript:void(0)">
                            <img
                              class="img-fluid"
                              :src="form.url + '/' + h.image"
                              alt="Product Images"
                            />
                          </a>
                          <span class="label">15% Off</span>
                        </div>

                        <div class="">
                          <h4>
                            <a href="">{{ h.name }}</a>
                          </h4>
                          <span>Capacity:{{ h.capacity }}</span>
                          <div class="price-box">
                            <h5 class="new-price">${{ h.price }}</h5>
                          </div>
                        </div>
                      </div>
                      <!-- single-product-wrap end -->
                    </div>
                  </div>
                </div>
              </div>

              <div class="row mb-3">
                <div class="col-6">
                  
                  <div class="col-sm-2 p-0 d-inline">
                    <span
                      style="color: #6d48a1; font-weight: bold"
                      class="me-2 mt-2"
                      >Date:</span
                    >
                  </div>
                  <div class="col-sm-10 p-0">
                    <input
                      type="date"
                      class="form-control"
                      v-model="form.date"
                      name="date"
                      required
                      autofocus
                    />
                  </div>
                </div>

                <div class="col-6">
                  <div class="row mx-0 mb-2">
                    <div class="col-sm-2 p-0 d-inline">
                      <span
                        style="color: #6d48a1; font-weight: bold"
                        class="me-2 mt-2"
                        >Comment:</span
                      >
                    </div>
                    <div class="col-sm-10 p-0">
                      <textarea
                        name="comment"
                        v-model="form.comment"
                        id="comment"
                        class="w-50 form-control"
                      ></textarea>
                    </div>
                  </div>
                </div>
              </div>

              <div
                class="mb-4 mt-4"
                style="color: #6d48a1; font-weight: bold; margin-left: 70%"
              >
                Total:
                <input
                  :value="form.total"
                  type="text"
                  name="total"
                  class="w-50 form-control"
                  readonly
                />
              </div>

              <div class="mb-3">
                <input
                  type="hidden"
                  v-model="form.status"
                  name="status"
                  class="form-control"
                />

                <div v-if="form.errors.content" class="text-danger small">
                  {{ form.errors.content }}
                </div>
              </div>
              <button style="margin-left:400px"
                type="submit"
                class="button"
                :disabled="form.processing"
              >
                Request for Booking 
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </AuthenticatedLayout>
</template>

<style scoped>
.section-title span,
h2,
p {
  color: #6d48a1;
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
.button {
  background-color: #6d48a1; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
</style>

