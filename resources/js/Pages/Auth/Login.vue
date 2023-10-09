<script setup>

import { Head, Link, useForm } from '@inertiajs/vue3';

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>

        <Head title="Log in" />

        <div v-if="status" class="mb-4 font-medium text-sm text-success">
            {{ status }}
        </div>

        <form @submit.prevent="submit">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input
                    id="email"
                    type="email"
                    class="form-control"
                    v-model="form.email"
                    required
                    autofocus
                    autocomplete="username"
                />
                <div class="text-danger" v-if="form.errors.email">{{ form.errors.email }}</div>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input
                    id="password"
                    type="password"
                    class="form-control"
                    v-model="form.password"
                    required
                    autocomplete="current-password"
                />
                <div class="text-danger" v-if="form.errors.password">{{ form.errors.password }}</div>
            </div>

            <div class="mb-3 form-check">
                <input
                    id="remember"
                    type="checkbox"
                    class="form-check-input"
                    v-model="form.remember"
                />
                <label for="remember" class="form-check-label">Remember me</label>
            </div>

            <div class="mb-3 d-flex justify-content-end">
                <Link
                    v-if="canResetPassword"
                    :href="route('password.request')"
                    class="text-decoration-underline text-sm text-gray-600"
                >
                    Forgot your password?
                </Link>

                <button type="submit" class="btn btn-primary ms-4" :disabled="form.processing">
                    Log in
                </button>
            </div>
        </form>

</template>
