<script>
export default {
  name: "Mail",
  props: {
    mail: {
      type: Object,
      required: true
    }
  },
  computed: {

  }
}
</script>

<template>
    <li class="list-group-item d-flex" :class="{'new': !mail.is_read}">
      <h1 class="me-2 text-dark mail-name">{{ mail.sender.name }}</h1>
      <h1 class="ms-2">{{ mail.title }}</h1>
    </li>
</template>

<style scoped>
.list-group-item {
  transition: border 0.5s, font-weight 0.4s;
  border: 5px solid black;
  border-left: 5px solid #353535;
  background: #616161;
}

.mail-name {
  font-weight: bold;
}

.new {
  border-left: 5px outset lime;
}

.list-group-item:hover {
  border-top: 5px solid white;
  border-bottom: 5px solid white;
  border-right: 5px solid white;
}
</style>