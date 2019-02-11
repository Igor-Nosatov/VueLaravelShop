<template>
    <div class="pagination">
      <a href="#" class="prev-arrow" @click.prevent="changePage(pagination.current_page - 1)" :disabled="pagination.current_page <= 1"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
      <a  v-for="page in pages" :class="isCurrentPage(page) ? 'is-current' : ''" @click.prevent="changePage(page)">{{ page }}</a>
      <a href="#" class="next-arrow" @click.prevent="changePage(pagination.current_page + 1)" :disabled="pagination.current_page >= pagination.last_page"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
    </div>
</template>

<script>
    export default {
        props: ['pagination', 'offset'],

        methods: {
            isCurrentPage(page) {
                return this.pagination.current_page === page;
            },

            changePage(page) {
                if (page > this.pagination.last_page) {
                    page = this.pagination.last_page;
                }

                this.pagination.current_page = page;
                this.$emit('paginate');
            }
        },

        computed: {
            pages() {
                let pages = [];

                let from = this.pagination.current_page - Math.floor(this.offset / 2);

                if (from < 1) {
                    from = 1;
                }

                let to = from + this.offset - 1;

                if (to > this.pagination.last_page) {
                    to = this.pagination.last_page;
                }

                while (from <= to) {
                    pages.push(from);
                    from++;
                }

                return pages;
            }
        }
    }
</script>
