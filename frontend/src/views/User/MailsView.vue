<script>
import MailBox from "@/components/ui/MailBox.vue";
import {getMails} from "@/data/data.js";
import Loading from "@/components/ui/Loading.vue";

export default {
  name: "MailsView",
  data() {
    return {
      mails: [],
      loading: false
    }
  },
  methods: {
    async getUserMails() {
      this.loading = true
      try {
        const res = await getMails()
        console.log(res)
        this.mails = res.data.data
      } catch (e) {
        console.log(e.message)
      } finally {
        this.loading = false
      }
    }
  },
  components: {Loading, MailBox},
  mounted() {
    this.getUserMails()
  }
}
</script>

<template>
  <MailBox v-if="!loading" :mails="mails"/>
  <Loading v-else-if="loading" class="min-vh-100"/>
</template>

<style scoped>

</style>