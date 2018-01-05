<template>
    <div style="padding:1em">
        <div class="level">
            <div class="level-left">Quote</div>
            <div class="level-right">Tarzan</div>
        </div>
        <h3 class="title is-4">Customer: {{invoicemaker.customer.name}}</h3>
        <h4 class="subtitle is-4">Address: {{invoicemaker.customer.address}}</h4>
        <hr>
        <h3 class="title is-4">Prepared By: {{invoicemaker.preparer.name}}</h3>
        <table class="table is-fullwidth is-bordered is-striped">
            <thead>
                <tr>
                    <th>Code</th>
                    <th>Brand</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Qty</th>
                    <th>Total</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr v-if="invoicemaker.loaded" v-for="item in added_goods">
                  <td>{{item.Code}}</td>
                  <td>{{item.Brand}}</td>
                  <td>{{item.Name}}</td>
                  <td>{{item.PriceEx | currency}}</td>
                  <td>{{item.AddedToInvoice}}</td>
                  <td>{{item.PriceEx * item.AddedToInvoice | currency}}</td>
                  <td><button @click="remove(item)" class="button is-danger">Remove</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
    </div>
</template>

<script>
    import invoicemaker from '../state.js';
    export default {
        data: function(){
            return {
                invoicemaker:invoicemaker
            }
        },
        methods: {
            remove: function(item){
                item.AddedToInvoice = 0;
            }
        },
        computed: {
          added_goods: function(){
            return this.invoicemaker.goods.filter((good) => 
                  good.AddedToInvoice > 0
            );
          }
        },
        filters: {
          currency: function (value) {
            return 'CH¢ ' + (value * 1.00).toLocaleString('en') ;
          }
        }
    }
</script>
