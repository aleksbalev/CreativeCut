<template>
  <span ref="numberElement">
    {{ animatedNumber }}
  </span>
</template>

<script>
import 'gsap/TweenLite';

export default {
  name: 'AnimateNumber',
  props: {
    startNumber: {
      default: '12000'
    },
    fromNumber: {
      default: '0'
    },
    speed: {
      default: '2'
    },
    delay: {
      default: '0.5'
    }
  },
  data() {
    return {
      renderNumber: this.toNumber(this.$props.fromNumber),
      isVisible: false
    }
  },
  computed: {
    animatedNumber: function() {
      const index = this.numberRound(this.toNumber(this.startNumber));
      let resultNumber = this.toNumber(this.renderNumber.toFixed(index));
      return resultNumber.toLocaleString();
    }
  },
  watch: {
    isVisible (newVal, oldVal) {
      if (newVal) {
        setTimeout(() => {
          TweenLite.to(this.$data, this.toNumber(this.speed), {
            renderNumber: this.toNumber(this.startNumber)
          });
        }, this.toNumber(this.delay) * 1000);
      } 
    }
  },
  mounted() {
    this.changeVisibleOnScroll();
  },
  created () {
    window.addEventListener('scroll', this.changeVisibleOnScroll);
  },
  destroyed () {
    window.removeEventListener('scroll', this.changeVisibleOnScroll);
  },
  methods: {
    toNumber(number) {
      return Number(number)
    },
    numberRound(number) {
      number = String(number);
      if (number.indexOf(".") > 0) {
        return number.indexOf(".");
      }
      return 0;
    },
    changeVisibleOnScroll () {
      this.isVisible = this.visible(this.$refs.numberElement)
    },
    visible(target) {
      if (this.isVisible) return true;
      let targetPosition = {
          top: window.pageYOffset + target.getBoundingClientRect().top,
          left: window.pageXOffset + target.getBoundingClientRect().left,
          right: window.pageXOffset + target.getBoundingClientRect().right,
          bottom: window.pageYOffset + target.getBoundingClientRect().bottom
        },
        windowPosition = {
          top: window.pageYOffset,
          left: window.pageXOffset,
          right: window.pageXOffset + document.documentElement.clientWidth,
          bottom: window.pageYOffset + document.documentElement.clientHeight
        };

      if (targetPosition.bottom > windowPosition.top &&
        targetPosition.top < windowPosition.bottom &&
        targetPosition.right > windowPosition.left &&
        targetPosition.left < windowPosition.right) {

        return true;
      } else {
        return false;
      };
    }
  }

}
</script>
