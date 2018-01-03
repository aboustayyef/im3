<template>
    <div class="columns">
        <div class="column is-grey is-4">
            <im-sidebar></im-sidebar>
        </div>
        <div class="column is-8">
            <im-invoice>
            </im-invoice>
        </div>
    </div>
</template>

<script>
    import invoicemaker from '../state.js';
    export default {
        mounted() {
            axios.get('/api/goods')
            .then((resp) => {
                this.invoicemaker.goods = resp.data;
                this.invoicemaker.loaded = 1;
            })
            .catch((resp)=> {
                alert('There was a problem loading the goods');
            });
        },
        data: function(){
            return {
                invoicemaker: invoicemaker,
            }
        }
    }
</script>
