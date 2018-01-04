<template>
    <div>
        <im-uploadmodal :modalOpen="modalOpen" v-on:toggleModal="toggleModal()"></im-uploadmodal>
        <div class="columns">
            <div class="column full-height-column is-grey is-4">
                <im-sidebar v-on:toggleModal="toggleModal()"></im-sidebar>
            </div>
            <div class="column full-height-column is-8">
                <im-invoice>
                </im-invoice>
            </div>
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
        methods: {
            toggleModal: function(){
                console.log('toggling modal');
                this.modalOpen = ! this.modalOpen;
            }
        },
        data: function(){
            return {
                invoicemaker: invoicemaker,
                modalOpen:false 
            }
        }
    }
</script>
