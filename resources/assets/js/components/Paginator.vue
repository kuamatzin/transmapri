<template>
<div>
    <nav aria-label="Page navigation example">
        <ul class="pagination" v-if="shouldPaginate">
            <li class="page-item" v-show="prevUrl">
                <a class="page-link" href="#" aria-label="Previous" rel="prev" @click.prevent="page--">
                    <span aria-hidden="true">&laquo; Anterior</span>
                </a>
            </li>
            <li class="page-item" v-for="n in dataSet.last_page" :class="{ active: dataSet.current_page == n }">
                <a class="page-link" href="" @click.prevent="updatePage(n)">{{n}}</a>
            </li>
            <li class="page-item" v-show="nextUrl">
                <a class="page-link" href="#" aria-label="Next" rel="next" @click.prevent="page++">
                    <span aria-hidden="true">&raquo; Siguiente</span>
                </a>
            </li>
        </ul>
    </nav>
</div>
</template>
<script>
export default {
    props: ['dataSet'],
    data(){
        return {
            page: 1,
            prevUrl: false,
            nextUrl: false
        }
    },
    computed: {
        shouldPaginate() {
            return !! this.prevUrl || !! this.nextUrl;
        }
    },
    watch: {
        dataSet(){
            this.page = this.dataSet.current_page;
            this.prevUrl = this.dataSet.prev_page_url;
            this.nextUrl = this.dataSet.next_page_url;
        },
        page(){
            this.broadcast();
        }
    },
    methods: {
        broadcast(){
            this.$emit('updated', this.page);
        },
        updatePage(page){
            this.page = page;
        }
    }
}
</script>