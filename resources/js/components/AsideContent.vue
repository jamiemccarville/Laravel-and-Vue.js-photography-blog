<template>
  <div class="aside">
    <div class="aside__btnwrapper">
      <button
        type="button"
        class="aside__btn aside__btntext"
        @click="showPopup = true"
      >Send Me The Tips</button>
    </div>
    <aside-popup v-if="showPopup" @close="showPopup = false"></aside-popup>
  </div>
</template>

<script>
import AsidePopup from "../components/AsidePopup";
export default {
  components: {
    AsidePopup
  },
  data() {
    return {
      showPopup: false
    };
  }
};
</script>

<style lang="scss" scoped></style>
