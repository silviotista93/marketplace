<template>
  <!--<transition name="fade" mode="out-in" appear>-->
  <transition name="fade">
    <div
      class="alertaMSG alert alert-bordered"
      :class="'alert-' + status"
      role="alert"
      style="position: fixed;top: 4rem;right: 0.5rem; min-width:200px; z-index: 10000;"
      v-if="show"
    >
      <button type="button" class="close" @click="hideAlert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <strong class="d-block d-sm-inline-block-force">{{ title }}:</strong>
      {{ msg }}
    </div>
  </transition>
</template>
<script>
let time = null;
export default {
  data() {
    return {
      code: null,
      title: "",
      msg: "",
      show: false
    };
  },
  computed: {
    status: function() {
      if (this.code >= 200 && this.code < 300) {
        return "success";
      } else if (this.code >= 400 && this.code < 500) {
        return "warning";
      } else if (this.code >= 500 && this.code < 600) {
        return "danger";
      }
    }
  },
  methods: {
    showAlert: function(statusCode, title, msg) {
      this.code = statusCode;
      this.title = title;
      this.msg = msg;
      this.show = true;
      if (time !== null) {
        clearTimeout(time);
      }
      time = setTimeout(() => {
        this.show = false;
      }, 3000);
    },
    hideAlert() {
      this.show = false;
    }
  },
  created() {
    event.$on("alert", this.showAlert);
  }
};
</script>

<style scoped>
.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.5s;
}
.fade-enter,
.fade-leave-to {
  opacity: 0;
}
</style>
