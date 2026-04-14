<script>
import Mail from "@/components/ui/Mail.vue";

export default {
  name: "MailBox",
  components: {Mail},
  props: {
    mails: {
      type: Array,
      required: true
    }
  },
}
</script>

<template>
  <div class="mx-5 box">
    <h1 class="text-center mb-5">Mails</h1>
    <ul class="list-group">
      <Mail v-for="mail in mails" :mail="mail" :key="mail.id"/>
    </ul>
  </div>
</template>

<style scoped>

</style>