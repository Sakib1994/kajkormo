<template>
  <div class="flex justify-center">
    <div class="mb-3 xl:w-96">
      <select
        ref="select"
        v-model="value"
        class="
          form-select
          appearance-none
          block
          w-full
          py-1.5
          text-base
          font-normal
          text-gray-700
          bg-white bg-clip-padding bg-no-repeat
          border border-solid border-gray-300
          rounded
          transition
          ease-in-out
          m-0
          focus:text-gray-700
          focus:bg-white
          focus:border-blue-600
          focus:outline-none
        "
        aria-label="Default select example"
      >
        <option disabled value="">Please select one</option>
        <option
          v-for="option in options"
          :key="option.value"
          :value="option.value"
        >
          {{ option.text }}
        </option>
      </select>
    </div>
  </div>
</template>

<script>
import { defineComponent } from "vue";
export default defineComponent({
  props: ["modelValue", "options"],

  emits: ["update:modelValue"],

  methods: {
    focus() {
      this.$refs.select.focus();
    },
  },
  computed: {
    value: {
      get() {
        return this.modelValue;
      },
      set(value) {
        this.$emit("update:modelValue", value);
      },
    },
  },
});
</script>

<style>
</style>