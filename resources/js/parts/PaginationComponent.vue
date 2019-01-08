<template>
    <nav>
        <ul class="pagination pagination-lg">
            <li class="page-item"
                :class="{ 'disabled': pagination.prev_page_url === null }">
                <a href="#"
                    class="page-link"
                    @click="next(pagination.current_page-1)">
                    &laquo;
                </a>
            </li>
            <li class="page-item"
                v-for="page in pagination.last_page"
                :key="page"
                :class="{ 'active':pagination.current_page === page }">
                <a href="#"
                    @click.prevent="next(page)"
                    class="page-link">
                    {{ page }}
                </a>
            </li>
            <li class="page-item"
                :class="{ 'disabled': pagination.current_page === pagination.last_page }">
                <a  href="#"
                    class="page-link"
                    @click="next(pagination.current_page+1)">
                    &raquo;
                </a>
            </li>
        </ul>
    </nav>
</template>
<script>
export default {
    props: ['pagination'],
    methods: {
        next(page) {
            this.$emit('next', page);
        }
    }
}
</script>
