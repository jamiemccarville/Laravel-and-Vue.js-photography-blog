<template>
  <transition name="modal__fade">
    <div class="modal__backdrop">
      <div class="modal">
        <button type="button" class="modal__close" @click="close"></button>
        <img src="/images/popout-progress-bar-sm.svg" alt="progress bar" class="modal__progress" />
        <img
          src="/images/popout-progress-bar-lg.svg"
          alt="progress bar"
          class="modal__progress--lg"
        />
        <h3 class="modal__heading" v-html="headingText"></h3>
        <div class="modal__form__margin">
          <aside-form></aside-form>
        </div>
      </div>
    </div>
  </transition>
</template>

<script>
import AsideForm from "../components/AsideForm";

export default {
  name: "modal",
  components: {
    AsideForm
  },
  data() {
    return {
      bgImage: "/images/close.svg",
      placeholder: "Please enter your email here",
      headingText: `Enter Your Email To Get <span class="modal__highlight">FREE</span>
          <br class="post__p--break" />iPhone Photography Email Tips:`
    };
  },
  methods: {
    close: function() {
      this.$emit("close");
    },
    submitForm: function() {
      console.log(this.message);
    }
  },
  computed: {
    placeholder2() {
      return `this is a test
      please work!`;
    }
  }
};
</script>

<style></style>
