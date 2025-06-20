import './bootstrap';
import.meta.glob([
  '../images/**',
]);

document.addEventListener('alpine:init', function () {
  Alpine.data('powerSequence', function () {
    return {
      powered: false,

      async init() {
        await this.wait(500);

        for (let i = 0; i < 10; i++) {
          await this.wait(this.random(100, 300));
          console.log(this.powered);
          this.powered = !this.powered;
        }

        this.powered = false;
        this.powered = true;
      },

      wait(ms) {
        return new Promise(resolve => setTimeout(resolve, ms));
      },

      random(min, max) {
        let randomNumber = Math.random() * (max - min + 1);
        randomNumber += min;
        return Math.floor(randomNumber);
      }
    };
  }
  )
});
