<template>
    <div>
        <im-uploadmodal :modalOpen="modalOpen" v-on:toggleModal="toggleModal()"></im-uploadmodal>
        <div class="columns">
            <div class="column full-height-column is-grey is-3 no-print">
                <im-left-sidebar v-on:toggleModal="toggleModal()"></im-left-sidebar>
            </div>
            <div id="printable" class="column full-height-column is-7">
                <im-invoice>
                </im-invoice>
            </div>
            <div class="column full-height-column is-grey is-2 no-print">
                <im-right-sidebar v-on:toggleModal="toggleModal()"></im-right-sidebar>
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
