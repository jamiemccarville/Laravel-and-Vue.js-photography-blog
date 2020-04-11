<template>
  <div class="modal__form" :class="{ invalid: this.errors.length }">
    <form @submit="checkForm" novalidate="true" class="modal__form__input">
      <p
        v-if="active"
        :class="{ modal__form__hidden: this.errors.length }"
        class="modal__enter"
      >Please enter your email here</p>
      <p v-if="errors.length" class="modal__errmsg">Please enter a valid email address</p>
      <p>
        <input
          class="modal__input"
          v-model="email"
          type="email"
          name="email"
          placeholder="Please enter your email here"
          @click="isActive"
          :class="{ modal__form__pad: padded }"
        />
      </p>
      <div class="modal__btnwrapper">
        <button class="modal__submit" @click.prevent="checkForm">Send Me The Tips »</button>
      </div>
      <!-- <p>
        <button @click.prevent="checkForm">go now</button>
      </p>-->
    </form>
  </div>
</template>
<script>
export default {
  data() {
    return {
      email: "",
      message: "Please enter your email here",
      errors: [],
      active: false,
      padded: false
    };
  },
  methods: {
    isActive: function() {
      return (this.active = true) && (this.padded = true);
    },
    checkForm: function(e) {
      this.errors = [];

      if (!this.email) {
        this.errors.push("Email required.");
      } else if (!this.validEmail(this.email)) {
        this.errors.push("Valid email required.");
      }

      if (!this.errors.length) {
        this.active = false;
        return true;
      }

      e.preventDefault();
      this.active = false;
    },
    validEmail: function(email) {
      var re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return re.test(email);
    }
  }
};
</script>
<style scoped>
</style>
