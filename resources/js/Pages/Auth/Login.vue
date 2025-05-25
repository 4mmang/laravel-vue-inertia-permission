<script setup>
import TextInput from '@/Components/TextInput.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import InputError from '@/Components/InputError.vue';
import { useForm, Link } from '@inertiajs/vue3';

const form = useForm({
  email: '',
  password: '',
});

const submit = () => {
  form.post(route('login'), {
    onFinish: () => form.reset('password'),
  });
};
</script>
<template>
  <div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md">
      <div class="block rounded-md border border-gray-300 p-4 shadow-sm sm:p-6">
        <Link :href="route('home')" class="text-3xl font-bold">SPACE GROW</Link>
        <p class="mb-5 mt-1">Together to The Top</p>

        <form @submit.prevent="submit">

          <InputLabel for="email" value="Email" />
          <TextInput id="email" type="email" class="w-full" v-model="form.email" />
          <InputError class="mt-2" :message="form.errors.email" />

          <InputLabel for="password" class="mt-5" value="Password" />
          <TextInput id="password" type="password" class="w-full" v-model="form.password" />
          <InputError class="mt-2" :message="form.errors.password" />


          <PrimaryButton class="mt-5 px-5 py-3" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
            Log in
          </PrimaryButton>

        </form>
        
      </div>
    </div>
  </div>
</template>
