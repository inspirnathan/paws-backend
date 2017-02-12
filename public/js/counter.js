Vue.component('score', {
  props: {
    scoreValue: {
      type: Number,
      required: true,
    },
    category: {
      type: String,
      required: true,
    },
  },
  computed: {
    scoreDigits: function() {
      const minLength = 4;
      const digits = ('' + this.scoreValue).split('').map(Number);
      const paddingCount = minLength - digits.length;
      for (let i = 0; i < paddingCount; i++) {
        digits.splice(0, 0, 0);
      }
      return digits;
    },
  },
  template: `
<div class="highscore">
  <span class="choice">{{ category }}</span>

  <template v-for="digit in scoreDigits">
    <digit :digitValue="digit"></digit>
  </template>
</div>`
});

Vue.component('digit', {
  props: {
    digitValue: {
      type: Number,
      required: true,
    },
  },
  template: `
<span class="digit-container">
  <span class="digits" v-bind:class="['d' + digitValue]">
    <span
      v-for="simpleDigit in [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]"
      class="digit">{{ simpleDigit }}</span>
  </span>
</span>`
});

document.addEventListener("touchstart", function(){}, true);

new Vue({
  el: '#app',
  data() {
    return {
      cats: 42,
      dogs: 8,
      isSpinning: false,
    };
  },
});
