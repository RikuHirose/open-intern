<template>
  <div style="display: none;"></div>
</template>

<script>
export default {

  props: ['companyId', 'userId'],

  data () {
    return {
    }
  },

  created () {
    this.store(this.userId, this.companyId)
  },

  mounted: function () {
    // this.delete(this.userId, this.companyId)
  },

  methods: {
    store(userId, companyId) {

      let url = `/api/v1/histories/store`

      this.axios.post(url,{
        lesson_id: companyId,
        user_id: userId
      })
        // .then(response => {

        // })
        // .catch(error => {
        //   alert(error)
        // })

    }
  },

}

</script>