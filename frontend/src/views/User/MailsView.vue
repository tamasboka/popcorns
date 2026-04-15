<script>
import MailBox from "@/components/ui/MailBox.vue";
import {getMails} from "@/data/data.js";
import Spinner from "@/components/ui/Loading.vue";

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
  components: {Spinner, MailBox},
  mounted() {
    this.getUserMails()
  }
}
</script>

<template>
  <MailBox v-if="!loading" :mails="mails"/>
  <Spinner v-else-if="loading"/>
</template>

<style scoped>

</style>