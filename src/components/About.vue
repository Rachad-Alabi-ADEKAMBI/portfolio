<template>
   <div class="infos">

    <div class="message">
      <div class="message__text">
        <p>
          Contact me for freelance work
        </p>
      </div>
      <div class="message__btn">
        <a href='mailto:adekambirachad@gmail.com'>
          <i class="fas fa-download"></i>
        </a>
      </div>
    </div>
        <span>
          Full-stack Developer
        </span>

        <h1>
          Rachad Alabi ADEKAMBI
        </h1>

        <strong>
          Description
        </strong>

        <p>
          I am Rachad, a friendly developer with 6 years of experience. I know how to use tools like Laravel, Vue.js, Flask, and WordPress to make websites work well. I'm good at both the front and back parts of websites, but I'm especially skilled at backend work. I'm great at coming up with new ideas for websites and solving tricky problems. I've helped many clients as a freelancer, and they've all been happy with my work.
         <br> <br>
         I am enthusiastic about taking on new projects and exploring new opportunities. Each project allows me to learn and improve. If you're in need of a developer, feel free to send me a message, and we can discuss further.
        </p>
   </div>
</template>

<script>
export default {
  name: 'About',
  data() {
    return {
      currentRoute: '',
    };
  },
  watch: {
    $route(to) {
      this.currentRoute = to.path;
    },

  },
  mounted(){
    //this.closeMenu();
  }
};
</script>
