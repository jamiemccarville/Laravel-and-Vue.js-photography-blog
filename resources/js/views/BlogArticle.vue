<template>
  <div id="app">
    <main class="container">
      <main-content></main-content>
      <aside-content></aside-content>
    </main>
  </div>
</template>

<script>
import MainContent from "../components/MainContent";
import AsideContent from "../components/AsideContent";
export default {
  name: "App",
  components: {
    MainContent,
    AsideContent
  },
  data() {
    return {
      showPopup: false
    };
  }
};
</script>

<style></style>
