
<template>
  <ul class="pagination">
    <li class="waves-effect" v-if="pagination.current_page > 1">
      <a href="javascript:void(0)" aria-label="Previous" v-on:click.prevent="changePage(pagination.current_page - 1)">
        <i class="material-icons dp48">navigate_before</i>
        <!-- <span aria-hidden="true">«</span> -->
      </a>
    </li>

    <li class="waves-effect disabled" v-else>
      <a href="javascript:void(0)" aria-label="Previous" v-on:click.prevent="changePage(pagination.current_page - 1)">
        <i class="material-icons dp48">navigate_before</i>
        <!-- <span aria-hidden="true">«</span> -->
      </a>
    </li>

    
    <li class="waves-effect" v-for="page in pagesNumber" :class="{'active waves-effect': page == pagination.current_page}">
      <a href="javascript:void(0)" v-on:click.prevent="changePage(page)">{{ page }}</a>
    </li>


    <li class="waves-effect" v-if="pagination.current_page < pagination.last_page">
      <a href="javascript:void(0)" aria-label="Next" v-on:click.prevent="changePage(pagination.current_page + 1)">
        <i class="material-icons dp48">navigate_next</i>
      </a>
    </li>

    <li class="waves-effect disabled" v-if="pagination.current_page == pagination.last_page">
      <a href="javascript:void(0)" aria-label="Next" v-on:click.prevent="changePage(pagination.current_page)">
        <i class="material-icons dp48">navigate_next</i>
      </a>
    </li>
  </ul>
</template>
<script>
export default{
  props: {
    pagination: {
      type: Object,
      required: true
    },
    offset: {
      type: Number,
      default: 4
    }
  },
  computed: {
    pagesNumber() {
      if (!this.pagination.to) {
        return [];
      }
      let from = this.pagination.current_page - this.offset;
      if (from < 1) {
        from = 1;
      }
      let to = from + (this.offset * 2);
      if (to >= this.pagination.last_page) {
        to = this.pagination.last_page;
      }
      let pagesArray = [];
      for (let page = from; page <= to; page++) {
        pagesArray.push(page);
      }
      return pagesArray;
    }
  },
  methods : {
    changePage(page) {
      this.pagination.current_page = page;
      this.$emit('paginate');
    }
  }
}
</script>